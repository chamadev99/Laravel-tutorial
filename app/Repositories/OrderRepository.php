<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function all()
    {
        return "all";
    }

    public function test()
    {
        return 5;
    }

    public function newMethod()
    {
        return 10;
    }

    public function find($id)
    {
        return Order::findOrFail($id);
    }

    public function create(array $data)
    {
        return Order::create($data);
    }

    public function update($id, array $data)
    {
        $order = $this->find($id);
        $order->update($data);
        return $order;
    }

    public function delete($id)
    {
        $order = $this->find($id);
        return $order->delete();
    }
}
