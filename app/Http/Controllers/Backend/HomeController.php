<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('backend.home.index');
    }

    public function signin()
    {
    	return view('backend.home.signin');
    }

    public function login()
    {

    }

    public function signout()
    {
    	return view('backend.home.signout');
    }

    public function register()
    {

    }
}
