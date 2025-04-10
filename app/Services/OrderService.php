<?php

namespace App\Services;

use App\Repositories\OrderRepository;
use App\Repositories\OrderRepositoryInterface;

class OrderService
{
    protected $orderRepo;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function listOrders()
    {
        return $this->orderRepo->all();
    }

    public function newMethod()
    {
        return "new";
    }

    public function test()
    {

        $varOne = $this->orderRepo->test();
        $varTwo = 5;
        // echo "sdsd", "sdsds" . "sdsds";
        //print($varOne , 'dfdfd');


        return $varOne;
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
