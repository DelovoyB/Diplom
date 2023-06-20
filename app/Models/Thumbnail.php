<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "source",
        "item_id",
    ];

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
