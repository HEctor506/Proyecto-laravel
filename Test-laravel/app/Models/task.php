<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    #definir los campos que seran insertados en la tabla
    protected $fillable = [
        'task'          #solo va insertar el nombre de la tarea
    ];
    

}


