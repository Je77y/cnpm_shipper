<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRepositoryInterface;

class HomeController extends Controller
{
    private $order;

    public function __construct(OrderRepositoryInterface $order)
    {
        $this->order = $order;
    }

    public function index()
    {
        $lsOrder = $this->order->getAll();
    	return view('backend.home.index', compact('lsOrder'));
    }

    public function signin()
    {
    	return view('backend.home.signin');
    }

    public function login(Request $request)
    {
        
    }

    public function signout()
    {
    	return view('backend.home.signout');
    }

    public function register(Request $request)
    {

    }

    public function sendemail()
    {
        return view('backend.home.reset_password');
    }
}
