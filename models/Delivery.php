<?php

namespace App\Models;

class Delivery
{
    public function calculateCost($senderAddress, $receiverAddress)
    {
        // Логика расчета стоимости доставки
        // Можно использовать mock данные или реальный алгоритм расчета
        $cost = 10.00; // Пример стоимости доставки

        return $cost;
    }
}
