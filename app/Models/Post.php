<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class); // belongsTo() es una función de Eloquent que nos permite definir una relación de uno a muchos
        //Cada posts pertenece a un usuario
    }
}
