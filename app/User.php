<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primarykey = 'id';

    protected $fillable = ['email','nickname','pawd','phone','status'];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
