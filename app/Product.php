<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primarykey = 'id';

    protected $fillable = ['productname','description','count','price','photo','vendor_id'];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }
}