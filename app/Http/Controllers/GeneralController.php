<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    
     public function showmission()
    {
        return view('mission');
    }


     public function showcontact()
    {
        return view('contact');
    }


     public function showproduct()
    {
        return view('product');
    }

     public function showmanagement()
    {
        return view('management');
    }



     public function showfaq()
    {
        return view('faq');
    }




}
