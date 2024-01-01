<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //post belongsto a user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //post belongsto a category
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
