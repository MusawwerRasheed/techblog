<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable =[ 'id','title','content','category_id','featured','slug'];







    public function category(){

         return $this->belongsTo('App\Category');


    }


    public function tags(){

        return $this->belongsToMany('App\Tag');


    }

}

