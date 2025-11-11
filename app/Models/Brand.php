<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['mdescription'];

    public function products()
    {
        /*hasMany una marca pertenece a muchos productos*/
        return $this->hasMany(Product::class, 'id');
    }
}
