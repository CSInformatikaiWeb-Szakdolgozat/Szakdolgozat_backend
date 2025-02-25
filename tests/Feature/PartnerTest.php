<?php

use App\Models\Article;
use App\Models\Partner;

test(
    'trigger működik',
    function () {
        // Létrehozunk egy partnert állapottal 1
        $partner = Partner::create([
            'name' => 'Test Partner',
            'status' => 1,
        ]);

        // Létrehozunk 3 itemet, amelyek kapcsolódnak a partnerhez
        $items = Article::factory()->count(3)->create([
            'partner_id' => $partner->id,
            'visible' => 1, // kezdeti láthatóság
        ]);

        // Ellenőrizzük, hogy az itemek láthatósága 1
        foreach ($items as $item) {
            expect($item->visible)->toBe(1);
        }

        // Most frissítjük a partner állapotát 0-ra
        $partner->update(['status' => 0]);

        // Újra lekérjük az itemeket, hogy ellenőrizzük a változást
        $items = $partner->articles;

        // Ellenőrizzük, hogy az összes kapcsolódó item láthatósága 0-ra változott
        foreach ($items as $item) {
            $item->refresh(); // frissítjük az adatokat az adatbázisból
            expect($item->visible)->toBe(0);
        }
    }
);