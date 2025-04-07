<?php

namespace App\Services;

use App\Repositories\OrderRepositoryInterface;

class OrderService
{
    protected $orderRepo;

    public function __construct(OrderRepositoryInterface $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function listOrders()
    {
        return $this->orderRepo->all();
    }

    public function getOrder($id)
    {
        return $this->orderRepo->find($id);
    }

    public function createOrder($data)
    {
        // Add extra business logic here (discounts, tax calc, etc.)
        return $this->orderRepo->create($data);
    }

    public function updateOrder($id, $data)
    {
        return $this->orderRepo->update($id, $data);
    }

    public function deleteOrder($id)
    {
        return $this->orderRepo->delete($id);
    }
}
