<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $guarded = ['id','create_at','update_at'];

    //relacion de uno a muchos inversa (article-user)
    public function user(){
        return $this->belongsTo(user::class);
    }

    //relacion de uno a muchos (article-coment)
    public function coments()
    {
        return $this->hasMany(coment::class);
    }

    //relacion uno a muchos inversa (category-article)
    public function category()
    {
        return $this->belongsTo(category::class);
    }



}
