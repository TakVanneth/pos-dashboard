<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum as RulesEnum;
use Spatie\Enum\Enum;

/**
 * @method static self cashier()
 * @method static self manager()
 * @method static self salesAssociate()
 * @method static self inventoryClerk()
 * @method static self accountant()
 */
class Position extends RulesEnum
{
    protected static function values(): array
    {
        return [
            'ADMIN' => 'admin',
            'CASHIER' => 'cashier',
            'MANAGER' => 'manager',
            'SALES_ASSOCIATE' => 'sales_associate',
            'INVENTORY_CLERK' => 'inventory_clerk',
            'ACCOUNTANT' => 'accountant',
        ];
    }
}
