<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\OrderService;
use App\Repositories\OrderRepositoryInterface;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;

class OrderServiceTest extends TestCase
{
    use RefreshDatabase;

    protected $orderService;

    public function setUp(): void
    {
        parent::setUp();

        // You can either use real DB or mock the repo
        $this->orderService = app(OrderService::class);
    }

    /** @test */
    public function it_can_create_an_order()
    {
        $data = [
            'customer_name' => 'Chamath',
            'status' => 'pending',
            'total' => 999.99,
        ];

        $order = $this->orderService->createOrder($data);

        $this->assertInstanceOf(Order::class, $order);
        $this->assertEquals('Chamath', $order->customer_name);
    }

    /** @test */
    public function it_can_list_all_orders()
    {
        Order::factory()->count(3)->create();

        $orders = $this->orderService->listOrders();

        $this->assertCount(3, $orders);
    }

    /** @test */
    public function it_can_update_an_order()
    {
        $order = Order::factory()->create([
            'customer_name' => 'Old Name'
        ]);

        $updated = $this->orderService->updateOrder($order->id, [
            'customer_name' => 'New Name'
        ]);

        $this->assertEquals('New Name', $updated->customer_name);
    }

    /** @test */
    public function it_can_delete_an_order()
    {
        $order = Order::factory()->create();

        $result = $this->orderService->deleteOrder($order->id);

        $this->assertTrue($result);
        $this->assertDatabaseMissing('orders', ['id' => $order->id]);
    }
}
