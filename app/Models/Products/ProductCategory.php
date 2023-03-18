<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

/* プロダクトカテゴリー モデル */
class ProductCategory extends Model
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
        'order',
    ];

    // 関連商品の取得
    public function products() {
        return $this->hasMany(Product::class, 'category_id');
    }
}

