<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products\ProductCategory;
use App\Models\Products\RentalClass;
use App\Models\Products\Image;
use App\Models\Products\ProductImage;

class Product extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'copy',
        'detail',
        'spec',
        'url',
        'order',
        'category_id',
        'class_id',
    ];

    // 商品カテゴリー取得
    public function productCategory() {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    // レンタルクラス取得
    public function rentalClass() {
        return $this->belongsTo(RentalClass::class, 'class_id');
    }

    // 画像の取得
    public function images() {
        return $this->belongsToMany(Image::class, 'product_images')->using(ProductImage::class);
    }
}