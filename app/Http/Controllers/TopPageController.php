<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\ProductCategory;
use App\Models\Products\RentalClass;
use App\Services\ProductService;


class TopPageController extends Controller {

    public function show(){
        $products_0 = ProductService::getProductsWithCategoryOrder(0);  //RV rental
        $products_1 = ProductService::getProductsWithCategoryOrder(1);  //BIKE rental
        return view (
            //'top',
            'carshop.index',
            [
                'products_0' => $products_0,
                'products_1' => $products_1,
            ]
        );
    }
	
}