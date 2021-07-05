<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //use HasFactory;

    protected $table = 'quotes';
    protected $fillable = [
        'client',
        'phone',
        'email',
        'date',
        'description',
        //'service',
        'state'
    ];

    /*public function service()
    {
        return $this->belongsTo(Service::class);
    }*/
}
