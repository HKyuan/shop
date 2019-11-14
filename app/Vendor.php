<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';

    protected $primarykey = 'id';

    protected $fillable = ['vendor','vendorname','pawd','phone'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
