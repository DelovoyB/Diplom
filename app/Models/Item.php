<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "title",
        "description",
        "price",
        "quantity",
        "category_id",
    ];

    public function comments(){
        return $this->hasMany(Comment::class)->orderBy("id");
    }

    public function images(){
        return $this->hasMany(Image::class)->orderBy("source");
    }

    public function categories(){
        return $this->hasOne(Category::class);
    }
}
