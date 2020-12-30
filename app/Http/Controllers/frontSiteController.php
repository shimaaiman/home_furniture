<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontSiteController extends Controller
{
    public function showhome(){
        return view('frontsite.index');
    }

    public function showaboutus(){
        return view('frontsite.aboutus');
    }
    public function showcategory(){
        return view('frontsite.category');
    }

    public function showcms(){
        return view('frontsite.cms');
    }
    public function showhowitworks(){
        return view('frontsite.howitworks');
    }

    public function showpricing(){
        return view('frontsite.pricing');
    }
    public function showproductpage(){
        return view('frontsite.productpage');
    }

    public function showprofile(){
        return view('frontsite.profile');
    }
    
}
    //
    
