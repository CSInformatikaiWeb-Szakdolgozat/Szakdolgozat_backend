<?php

use App\Models\Classification;
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
        Schema::create('classifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('upper_classification')->nullable(); // A szülő menü referenciája
            $table->string('name');
            $table->timestamps();
            // Esetleg hozhatunk létre egy idegen kulcsot, ha biztosítjuk az integritást
            $table->foreign('upper_classification')->references('id')->on('classifications')->onDelete('cascade');
        });
        
        Classification::create([
            'id' => 1,
            'upper_classification' => null,
            'name' => 'szerver'
        ]);

        Classification::create([
            'id' => 2,
            'upper_classification' => 1,
            'name' => 'LENOVO Flex szerver'
        ]);

        Classification::create([
            'id' => 3,
            'upper_classification' => 1,
            'name' => 'LENOVO Rack szerver'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classifications');
    }
};
