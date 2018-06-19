<?php

namespace App\Repositories\Order;

interface OrderRepositoryInterface
{
	public function getAll();

	public function getListSaveOrder();

	public function filterSaveOrder();

	public function getListActiveOrder();
}
