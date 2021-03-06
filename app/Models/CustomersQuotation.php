<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersQuotation extends Model
{
    use HasFactory;
    protected $fillabe=[
            'customer_id',
            'product_id',
            'file_id',
            'supplier_quotation_reference',
            'customer_document_reference',
            'status',
            'document_date',
            'customer_reference',
            'project_reference',
            'product_reference',
            'qty',
            'unit_price_vat_excluded',
            'unit_price_vat_included',
            'lead_time',
            'color_codes_pantone',
            'customer_design',
            'customer_comment',
            'rejected_quotation',
            'reason_for_rejection',
            'terms_and_conditions',
            'signed_customer_document',
            'availabe_design',
    ];
}
