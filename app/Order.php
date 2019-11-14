<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $primarykey = 'id';

    protected $fillable = [ 'total' , 'user_id' ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
