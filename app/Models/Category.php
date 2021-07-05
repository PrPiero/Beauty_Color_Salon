<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //habilitando asignacion masiva
    protected $fillable = ['name','slug','image','icon'];

    //relacion uno a mucho
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
    //relacion muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }


    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    //url amigable
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
