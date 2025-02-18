<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyInfoFactory> */
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_manager',
        'cm_email',
        'cm_telefon',
        'premise',
        'mailing_address',
        'head_office',
        'tax_number',
        'trade_register',
        'availability_email',
        'availability_phone',
        'report_email',
        'report_phone',
        'price_offer_email',
        'google_map'
    ];
}
