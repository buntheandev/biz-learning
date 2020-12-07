<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Product;
class Category extends Model
{
  use Notifiable;

    protected $fillable = [
        'name',
    ];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }
}
