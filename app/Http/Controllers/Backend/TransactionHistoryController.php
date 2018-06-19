<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRepositoryInterface;

class TransactionHistoryController extends Controller
{
    private $transactionHistory;

    public function __construct(OrderRepositoryInterface $transactionHistory)
    {   
        $this->transactionHistory = $transactionHistory;
    }

    public function index()
    {
        $lsTransHis = $this->transactionHistory->getListActiveOrder();
        return view('backend.transaction_history.index', compact('lsTransHis'));
    }
}
