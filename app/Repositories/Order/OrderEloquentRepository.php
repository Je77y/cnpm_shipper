<?php

namespace App\Repositories\Order;

use App\Repositories\EloquentRepository;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderEloquentRepository extends EloquentRepository implements OrderRepositoryInterface
{
	/**
	 * get model
	 * @return string
	 */
	public function getModel()
	{
		return \App\Models\Order::class;
	}

	/**
	 * Get all Order
	 * @return mixed
	 */
	public function getAll()
	{
		$query = $this->model
			->select('id', 'address', 'describe', 'created_at', 'updated_at')
			->where('active', 0);
		
		$query->orderBy('created_at', 'desc');
		$query->orderBy('updated_at', 'desc');
		
		return $query->get();
	}

	public function saveOrder($id)
	{
		
	}
}
