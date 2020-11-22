<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    Protected $fillable = ['user_id','user_name','ph_number','product_name','product_price','product_image' ,'order_id','txnid',
    'order_date','bank_name'];
}
