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
		$query = $this->model->where('active', 0);
		
		$query->orderBy('created_at', 'desc');
		$query->orderBy('updated_at', 'desc');
		
		return $query->get();
	}

	public function getListSaveOrder()
	{
		$query = $this->model->where('save_order', 1);

		$query->orderBy('created_at', 'desc');

		return $query->get();
	}

	public function filterSaveOrder()
	{
		$query = $this->model
			->where('active', 1)
			->where('save_order', 1)
			->update(['save_order' => 0]);

		// return $query->where('save_order', 1)->get();
	}

	public function getListActiveOrder()
	{
		$query = $this->model
			->where('active', 1);

		$query->orderBy('created_at', 'desc');

		return $query->get();
	}
}
