<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['product_department', 'product_class', 'model', 'product_name', 'uom', 'length', 'width', 'height', 'capacity', 'thickness', 'effects', 'additional_text', 'product_type', 'branding'];

    public function category(){
        return $this->belongsTo(Categories::class);
    }
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
