<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "item_id",
        "quantity",
        "order_id",
    ];

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
