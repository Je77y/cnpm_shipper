<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderController extends Controller
{
    private $order;

    public function __construct(OrderRepositoryInterface $order)
    {
        $this->order = $order;
    }
    
    public function activeOrder(Request $request, $id)
    {
        $order = $this->order->find($id);
        $this->update($order, array('active', 1));
        return redirect()->route('admin.home');
    }
}
