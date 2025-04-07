<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        return response()->json($this->orderService->listOrders());
    }

    public function show($id)
    {
        return response()->json($this->orderService->getOrder($id));
    }

    public function store(Request $request)
    {
        $order = $this->orderService->createOrder($request->all());
        return response()->json($order, 201);
    }

    public function update(Request $request, $id)
    {
        $order = $this->orderService->updateOrder($id, $request->all());
        return response()->json($order);
    }

    public function destroy($id)
    {
        $this->orderService->deleteOrder($id);
        return response()->json(null, 204);
    }
}
