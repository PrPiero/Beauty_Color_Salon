<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    
    //evita la asignacion maximo en los campos especificados
    protected $guarded = ['id','created_at', 'update_at'];

    public function products(){
        return $this->hasMany(Product::class);
    }
    
    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
