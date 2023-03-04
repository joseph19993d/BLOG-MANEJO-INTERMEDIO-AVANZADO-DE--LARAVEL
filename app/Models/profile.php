<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $guarded = ['id','create_at','update_at'];

    //relacion de uno a uno inversa
    public function user(){
        return $this->belongsTo(user::class);
    }

}
