<?php

use App\Models\Article;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->foreignId('partner')->references('id')->on('partners');
            $table->foreignId('classification')->references('id')->on('classifications');
            $table->longText('content');
            $table->boolean('visibility_status');
            $table->string('page_link');
            $table->timestamps();
        });

        Article::create([
            'id' => 1,
            'name' => 'ThinkSystem SR665 V3 Rack Server',
            'description' => '2U rack server, nagyon erõteljes a modern feladatok megoldásához',
            'partner' => 2,
            'classification' => 3,
            'content' => '<p>Ez a ThinkSystem SR665 V3 Rack Server-nek a teszt szövege</p><b>Működik rajta a vastag szöveg!</b>',
            'visibility_status' => 1,
            'page_link' => '/thinksystem_sr665_v3_rack_server',
        ]);

        Article::create([
            'id' => 2,
            'name' => 'ThinkSystem SR675 V3 Rack Server',
            'description' => 'Hatalmas teljesítmény, minden elváráshoz skálázható',
            'partner' => 2,
            'classification' => 3,
            'content' => '<i>Ez a ThinkSystem SR675 V3 Rack Server-nek a teszt szövege</i>',
            'visibility_status' => 1,
            'page_link' => '/thinksystem_sr675_v3_rack_server',
        ]);

        Article::create([
            'id' => 3,
            'name' => 'ThinkSystem SR670 V2 Rack Server',
            'description' => '2U/1P rack kiváló GPU kapacitással',
            'partner' => 2,
            'classification' => 3,
            'content' => '<p>Ez a ThinkSystem SR670 V2 Rack Server-nek a teszt szövege</p>',
            'visibility_status' => 1,
            'page_link' => '/thinksystem_sr670_v2_rack_server',
        ]);

        Article::create([
            'id' => 4,
            'name' => 'ThinkSystem SR645 Rack Server',
            'description' => 'Erõteljes, 2S/1U rack server komplex feladatok megoldására',
            'partner' => 2,
            'classification' => 3,
            'content' => '<p>Ez a ThinkSystem SR645 Rack Server-nek a teszt szövege</p>',
            'visibility_status' => 1,
            'page_link' => '/thinksystem_sr645_rack_server',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
