<?php

namespace App\Controllers;

use App\Models\Delivery;
use App\Models\Order;
use App\Models\Customer;

class DeliveryController
{
    public function calculateDeliveryCost($senderAddress, $receiverAddress)
    {
        // Логика расчета стоимости доставки
        // ...

        // Возвращаем результат расчета
        return $deliveryCost;
    }

    public function createOrder($senderAddress, $receiverAddress, $customerName, $customerEmail)
    {
        // Создание объектов моделей
        $customer = new Customer($customerName, $customerEmail);
        $order = new Order($senderAddress, $receiverAddress, $customer);

        // Сохранение заказа в базе данных
        $order->save();

        // Возвращаем созданный заказ
        return $order;
    }

    public function getOrderInfo($orderId)
    {
        // Получение информации о заказе из базы данных
        $order = Order::find($orderId);

        // Возвращаем информацию о заказе
        return $order;
    }

    public function getOrderList()
    {
        // Получение списка заказов из базы данных
        $orders = Order::all();

        // Возвращаем список заказов
        return $orders;
    }
}