<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = collect([
            [
                'position' => 'admin',
                'uuid' => Str::uuid()

            ],
            [
                'position' => 'manager',
                'uuid' => Str::uuid()
            ],
            [
                'position' => 'cashier',
                'uuid' => Str::uuid()
            ],
            [
                'position' => 'sales_associate',
                'uuid' => Str::uuid()
            ],
            [
                'position' => 'inventory_clerk',
                'uuid' => Str::uuid()
            ]
        ]);

        $roles->each(function ($roles){
            Role::insert($roles);
        });
    }
}
