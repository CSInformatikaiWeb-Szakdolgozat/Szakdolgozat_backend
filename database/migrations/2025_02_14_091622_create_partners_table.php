<?php

use App\Models\Partner;
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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(1);
            $table->string('page');
            $table->timestamps();
        });

        Partner::create([
            'name' => 'IBM',
            'status' => true,
            'page' => 'https://www.ibm.com/uk-en',
        ]);

        Partner::create([
            'name' => 'LENOVO',
            'status' => true,
            'page' => 'www.lenovo.hu',
        ]);

        Partner::create([
            'name' => 'VMware',
            'status' => true,
            'page' => 'www.vmware.com',
        ]);

        Partner::create([
            'name' => 'Veeam',
            'status' => true,
            'page' => 'www.veeam.com',
        ]);

        Partner::create([
            'name' => 'Microsoft',
            'status' => true,
            'page' => 'www.microsoft.hu',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
