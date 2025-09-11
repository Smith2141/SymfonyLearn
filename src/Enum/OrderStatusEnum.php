<?php
namespace App\Enum;

use phpDocumentor\Reflection\DocBlock\Description;

enum OrderStatusEnum: string
{
    #[Description('Заказ оплачен')]
    case Paid = 'paid';

    #[Description('Неоплаченный заказ')]
    case Unpaid = 'unpaid';
}
