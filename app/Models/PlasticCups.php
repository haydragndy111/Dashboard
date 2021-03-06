<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasticCups extends Model
{
    use HasFactory;
    protected $fillable=[
                        'product_id',
                        'size',
                        'model',
                        'material_type',
                        'material_color',
                        'quantity_per_item',
                        'effects'
                        ];
}
