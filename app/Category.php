<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories";

    protected $fillable = [
        "category_name",
        "category_image",
        "active_status",
    ];

    public function products()
    {

        return $this->hasMany(Product::class);

    }
}
