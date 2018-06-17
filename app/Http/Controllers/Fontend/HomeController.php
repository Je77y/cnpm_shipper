<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('fontend.index');
    }

    public function about()
    {
    	return view('fontend.about');
    }

    public function helpShipper()
    {
    	return view('fontend.help_shipper');
    }

    public function helpShop()
    {
    	return view('fontend.help_shop');
    }

    public function provision() 
    {
        return view('fontend.provision');
    }
}
