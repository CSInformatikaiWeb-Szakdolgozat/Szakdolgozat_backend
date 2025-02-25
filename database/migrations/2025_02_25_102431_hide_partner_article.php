<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('Create Trigger notPartnerArticle AFTER UPDATE    ON partners
        for EACH ROW
        BEGIN
                -- Ha a partner állapota 1-ről 0-ra változik, az összes hozzá tartozó item "visible" értékét 0-ra állítja
                IF OLD.status = 1 AND NEW.status = 0 THEN
                    UPDATE items
                    SET visible = 0
                    WHERE partner_id = OLD.id;
                END IF;
            END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TRIGGER IF EXISTS notPartnerArticle");
    }
};
