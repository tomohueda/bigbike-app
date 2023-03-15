<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutPageController extends Controller{
   public function show(){
        $date = date("Y-m-d H:i:s");
        return view('about', [
            "current_time" => $date
        ]);
	}
	
}