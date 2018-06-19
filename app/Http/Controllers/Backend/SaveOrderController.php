<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Models\Order;

class SaveOrderController extends Controller
{
    private $saveOrder;

    public function __construct(OrderRepositoryInterface $saveOrder)
    {
        $this->saveOrder = $saveOrder;
    }

    public function index()
    {
        $lsSaveOrder = $this->saveOrder->getListSaveOrder();
        return view('backend.save_order.index', compact('lsSaveOrder'));
    }

    public function saveOrder($id)
    {
        $this->saveOrder->update($id, array('save_order' => 1));
        return redirect()->route('admin.home');
    }

    public function filterSaveOrder()
    {
        $this->saveOrder->filterSaveOrder();
        return redirect()->route('admin.save_order');
    }

    public function removeSaveOrder($id)
    {
        $this->saveOrder->update($id, array('save_order' => 0));
        return redirect()->route('admin.save_order');
    }
}
