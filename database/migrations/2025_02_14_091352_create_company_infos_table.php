<?php

use App\Models\CompanyInfo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
        CompanyInfo::create([
            'name' => 'Ügyvezető',
            'description' => 'Tar György István',
        ]);
        CompanyInfo::create([
            'name' => 'Telefon',
            'description' => '+36 30 229 4079',
        ]);
        CompanyInfo::create([
            'name' => 'Email',
            'description' => 'tar.gyorgy@csinfo.hu',
        ]);
        CompanyInfo::create([
            'name' => 'Levelezési cím',
            'description' => 'C.S. Informatikai Rendszerek Kft.',
        ]);
        CompanyInfo::create([
            'name' => 'Telephely ',
            'description' => '1021 Budapest Széher út 13/a I/6',
        ]);
        CompanyInfo::create([
            'name' => 'Székhely ',
            'description' => '1021 Budapest Széher út 13/a I/6',
        ]);
        CompanyInfo::create([
            'name' => 'Adószám ',
            'description' => '12383948-2-41',
        ]);
        CompanyInfo::create([
            'name' => 'Cégjegyzék ',
            'description' => '01-09-374824',
        ]);
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
