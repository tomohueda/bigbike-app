<?php
namespace App\Services;

use App\Models\Products\Product;
use App\Models\Products\ProductCategory;
use App\Models\Products\RentalClass;

class ProductService
{
    public static function getProducts(int $num)
    {
        $products = Product::with('productCategory')->with('rentalClass')->orderBy('order', 'asc')->paginate($num);
        return $products;
    }

    public static function getProduct(string $id)
    {
        $product = Product::find($id);
        return $product;
    }

    public static function getProductCategories()
    {
        $categories = ProductCategory::orderBy('order', 'asc')->get();
        return $categories;
    }

    public static function getRentalClasses()
    {
        $classes = RentalClass::orderBy('order', 'asc')->get();
        return $classes;
    }

}