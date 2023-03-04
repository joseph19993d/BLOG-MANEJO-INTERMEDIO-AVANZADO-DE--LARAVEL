<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded = ['id','create_at','update_at'];

    //relacion de uno a muchos (article-category)
    public function articles()
    {
        return $this->hasMany(article::class);
    }


}
