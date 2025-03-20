<?php

use App\Models\Menu;
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
        Menu::create([
            'id' => 1,
            'name' => 'Cégbemutató',
            'main_menu' => null,
            'link' => '/bemutato',
            'status' => 1,
        ]);

        Menu::create([
            'id' => 3,
            'name' => 'Virtualizáció',
            'main_menu' => null,
            'link' => '/virtualizacio',
            'status' => 1,
        ]);
        Menu::create([
            'id' => 4,
            'name' => 'Szerverkonszolidáció',
            'main_menu' => null,
            'link' => '/szerverkonszolidacio',
            'status' => 1,
        ]);
        Menu::create([
            'id' => 5,
            'name' => 'Tároló konszolidáció',
            'main_menu' => null,
            'link' => '/taroloKonszolidacio',
            'status' => 1,
        ]);
        Menu::create([
            'id' => 6,
            'name' => 'Megoldások',
            'main_menu' => null,
            'link' => '/megoldasok',
            'status' => 1,
        ]);
        Menu::create([
            'name' => 'LENOVO Flex technológia',
            'main_menu' => 5,
            'link' => '/lenovoFlexTechnologia',
            'status' => 1,
        ]);
        Menu::create([
            'name' => 'IBM FlashSystem® Cyber Vault',
            'main_menu' => 5,
            'link' => '/ibmFlashSystemCyberVault',
            'status' => 1,
        ]);
        Menu::create([
            'name' => 'IBM Tároló technológia',
            'main_menu' => 5,
            'link' => '/ibmTaroloTechnologia',
            'status' => 1,
        ]);
        Menu::create([
            'name' => 'Szerver virtualizáció',
            'main_menu' => 5,
            'link' => '/szerverVirtualizacio',
            'status' => 1,
        ]);
        Menu::create([
            'id'=>11,
            'name' => 'Deszktop virtualizáció',
            'main_menu' => 5,
            'link' => '/deszktopVirtualizacio',
            'status' => 1,
        ]);
        Menu::create([
            'name' => 'Microsoft RDS',
            'main_menu' => 10,
            'link' => '/microsoftRds',
            'status' => 1,
        ]);     Menu::create([
            'name' => 'VMware View',
            'main_menu' => 10,
            'link' => '/vMwareView',
            'status' => 1,
        ]);
        Menu::create([
            'name' => 'Alkalmazás Virtualizáció',
            'main_menu' => 5,
            'link' => '/alkalmazasVirtualizacio',
            'status' => 1,
        ]);

        Menu::create([
            'id' => 15,
            'name' => 'Szolgáltatások ',
            'main_menu' => null,
            'link' => '/szolgaltatasok',
            'status' => 1,
        ]);
        Menu::create([
            'id' => 16,
            'name' => 'Termékek ',
            'main_menu' => null,
            'link' => '/termekek',
            'status' => 1,
        ]);
        Menu::create([
            'id' => 17,
            'name' => 'Letöltések ',
            'main_menu' => null,
            'link' => '/letoltesek',
            'status' => 1,
        ]);
        Menu::create([
            'id' => 18,
            'name' => 'Cikkek',
            'main_menu' => null,
            'link' => '/cikkek',
            'status' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
