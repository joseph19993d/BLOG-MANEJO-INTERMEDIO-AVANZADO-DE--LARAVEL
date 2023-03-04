<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
    use HasFactory;
    protected $guarded = ['id','create_at','update_at'];

    //relacion uno a muchos inversa (Comment-user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos iversa (coment-article)
    public function article()
    {
        return $this->belongsTo(article::class);
    }

}
