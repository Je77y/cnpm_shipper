<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $filltable = [
    	'address',
    	'active',
    	'describe',
    	'save_order',
    	'created_at',
    	'updated_at'
    ];
}
