<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class RentalClass extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'detail',
        'day_price',
        'order',
    ];

    // 関連商品の取得
    public function products() {
        return $this->hasMany(Product::class)->orderBy('order', 'asc');
    }
}
