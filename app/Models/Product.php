<?php

namespace App\Models;

use App\Traits\hasPicture;
use App\Traits\hasStock;
use App\Traits\Paginable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
  use HasFactory, Paginable, hasPicture, hasStock;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'description',
    'price',
    'min_stock',
    'max_stock',
    'image',
    'image_2',
    'image_3',
    'hidden',
  ];

  /**
   * Get all of the stocks for the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function stocks(): HasMany
  {
    return $this->hasMany(StockProduct::class);
  }
}
