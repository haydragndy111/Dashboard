<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SachelBag extends Model
{
    use HasFactory;
    protected $fillable=[
                'product_id',
                'material_color',
                'material_type',
                'width',
                'height',
                'length',
                'print_style',
                'paper_thickness',
                'effects',
            ];
}
