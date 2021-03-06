<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HandlePaperBag extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'material_type',
        'material_colors',
        'paper_thickness',
        'handle_model',
        'base_width',
        'base_height',
        'print_type',
        'effects',
        'quantity_per_item',
        'quantity_per_tons',
    ];
}
