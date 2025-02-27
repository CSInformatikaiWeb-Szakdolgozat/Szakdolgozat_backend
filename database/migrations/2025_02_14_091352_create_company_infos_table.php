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
            $table->string('company_name');
            $table->string('company_manager');
            $table->string('cm_email');
            $table->string('cm_telefon');
            $table->string('premise');
            $table->string('mailing_address');
            $table->string('head_office');
            $table->string('tax_number');
            $table->string('trade_register');
            $table->string('availability_email');
            $table->string('availability_phone');
            $table->string('report_email');
            $table->string('report_phone');
            $table->string('price_offer_email');
            $table->string('google_map');
            $table->timestamps();
        });
        CompanyInfo::create([
            'company_name' => 'CSInfo',
            'company_manager' => 'Tar György István',
            'cm_email' => 'tar.gyorgy@csinfo.hu',
            'cm_telefon' => '+36 30 229 4079',
            'premise' => '1021 Budapest Széher út 13/a I/6',
            'mailing_address' => 'C.S. Informatikai Rendszerek Kft.',
            'head_office' => '1021 Budapest Széher út 13/a I/6',
            'tax_number' => '12383948-2-41',
            'trade_register' => '01-09-374824',
            'availability_email' => 'mail@csinfo.hu',
            'availability_phone' => '+36 20 924 1462',
            'report_email' => 'bejelentes@csinfo.hu',
            'report_phone' => '+36 20 9241 462',
            'price_offer_email' => 'mail@csinfo.hu',
            'google_map' => 'Budapest, Széher út 13a, 1021',
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
