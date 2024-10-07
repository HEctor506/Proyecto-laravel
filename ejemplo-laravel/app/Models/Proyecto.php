<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion'];

    // protected static function boot(){
    //     parent::boot();
    //     static::creating(function ($project){
    //         $project ->id = auth()->id();
    //     });
        
    // }
}
