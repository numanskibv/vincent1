<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $guarded = []; // only while developing;

    // protected $fillable = [
    //     'shop_id',
    //     'product_name',
    //     'artikel_nr'
    // ];

    public function shop()
    {
        return $this->belongsTo(Shop::class); // product behoren bij shop
    }
}
