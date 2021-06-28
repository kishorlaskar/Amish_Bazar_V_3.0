<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "orders";

    protected $fillable=
        [
            "name",
            "email",
            "phone",
            "amount",
            "address",
            "status",
            "transaction_id",
            "currency",
            "user_ip",
            "user_id",
        ];
}
