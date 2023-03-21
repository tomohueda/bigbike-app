<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\ProductCategory;
use App\Models\Products\RentalClass;
use App\Services\ProductService;


class TopPageController extends Controller {

    public function show(){

        $products_0 = ProductService::getProductsWithCategoryOrder(0);
        $categories = ProductService::getProductCategories();
        $classes = ProductService::getRentalClasses();
        return view (
            //'top',
            'carshop',
            [
                'products_0' => $products_0,
                'categories' => $categories,
                'classes' => $classes,
            ]
        );
    }
	
}