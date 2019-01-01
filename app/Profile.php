<?php

namespace App;
use App\User;
//use App\Profile;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable =['id','user_id', 'avatar','youtube','facebook','about'];

public function user(){

     return $this->belongsTo('App\User');


}



    //
}
