<?php

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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('main_menu')->nullable(); // A szülő menü referenciája
            $table->string('link');
            $table->boolean('status');
            $table->timestamps();
             // Esetleg hozhatunk létre egy idegen kulcsot, ha biztosítjuk az integritást
            $table->foreign('main_menu')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
