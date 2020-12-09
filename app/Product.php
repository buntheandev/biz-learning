<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'quantity', 'description', 'image', 'user_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
