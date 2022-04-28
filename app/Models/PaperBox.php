<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperBox extends Model
{
    use HasFactory;
    protected $fillable=[
                        'product_id',
                        'material_type',
                        'material_color',
                        'paper_thickness',
                        'model',
                        'print_type',
                        'quantity_per_item',
                        'single_board_width',
                        'single_board_height',
                        'solovan_layer',
                        'uv_layer',
                        'coverage',
                        'glue_points_number',
                        'window_shape',
                        'window_width',
                        'window_height'
                    ];
}
