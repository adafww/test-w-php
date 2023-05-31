<?php

namespace App\Controllers;

use App\Models\Order;

class OrderController
{
    public function createOrder($senderAddress, $receiverAddress, $customerId)
    {
        $order = new Order();
        $order->senderAddress = $senderAddress;
        $order->receiverAddress = $receiverAddress;
        $order->customerId = $customerId;
        $order->save();

        return $order;
    }

    public function getOrderInfo($orderId)
    {
        $order = Order::find($orderId);

        return $order;
    }

    public function getOrderList()
    {
        $orders = Order::all();

        return $orders;
    }
}