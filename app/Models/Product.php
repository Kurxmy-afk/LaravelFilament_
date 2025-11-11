<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['pdescription', 'price', 'stock', 'others', 'categories_id', 'brands_id'];
    //protected $guarded=[];

    public function categories()
    {

        /*belongsTo "Pertenece" o "es de" */
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function brands()
    {
        /*belongsTo "Pertenece" o "es de"*/
        return $this->belongsTo(related: Brand::class, foreignKey: 'brands_id');
    }
}
