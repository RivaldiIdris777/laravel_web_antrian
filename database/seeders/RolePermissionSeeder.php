<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'user.menu']);
        Permission::create(['name' => 'user.all']);
        Permission::create(['name' => 'user.add']);
        Permission::create(['name' => 'user.store']);
        Permission::create(['name' => 'user.edit']);
        Permission::create(['name' => 'user.update']);
        Permission::create(['name' => 'user.delete']);

        Permission::create(['name' => 'customer.menu']);
        Permission::create(['name' => 'customer.all']);
        Permission::create(['name' => 'customer.add']);
        Permission::create(['name' => 'customer.store']);
        Permission::create(['name' => 'customer.edit']);
        Permission::create(['name' => 'customer.update']);
        Permission::create(['name' => 'customer.delete']);

        Permission::create(['name' => 'product.menu']);
        Permission::create(['name' => 'product.all']);
        Permission::create(['name' => 'product.add']);
        Permission::create(['name' => 'product.store']);
        Permission::create(['name' => 'product.edit']);
        Permission::create(['name' => 'product.update']);
        Permission::create(['name' => 'product.delete']);

        Permission::create(['name' => 'order.menu']);
        Permission::create(['name' => 'order.all']);
        Permission::create(['name' => 'order.add']);
        Permission::create(['name' => 'order.store']);
        Permission::create(['name' => 'order.edit']);
        Permission::create(['name' => 'order.update']);
        Permission::create(['name' => 'order.delete']);

        Role::create(['name' => 'superadmin']);

        $roleAdmin = Role::findByName('superadmin');
        $roleAdmin->givePermission('user.menu');
        $roleAdmin->givePermission('user.all');
        $roleAdmin->givePermission('user.add');
        $roleAdmin->givePermission('user.store');
        $roleAdmin->givePermission('user.edit');
        $roleAdmin->givePermission('user.update');
        $roleAdmin->givePermission('user.delete');

        $roleAdmin->givePermission('customer.menu');
        $roleAdmin->givePermission('customer.all');
        $roleAdmin->givePermission('customer.add');
        $roleAdmin->givePermission('customer.store');
        $roleAdmin->givePermission('customer.edit');
        $roleAdmin->givePermission('customer.update');
        $roleAdmin->givePermission('customer.delete');

        $roleAdmin->givePermission('product.menu');
        $roleAdmin->givePermission('product.all');
        $roleAdmin->givePermission('product.add');
        $roleAdmin->givePermission('product.store');
        $roleAdmin->givePermission('product.edit');
        $roleAdmin->givePermission('product.update');
        $roleAdmin->givePermission('product.delete');

        $roleAdmin->givePermission('order.menu');
        $roleAdmin->givePermission('order.all');
        $roleAdmin->givePermission('order.add');
        $roleAdmin->givePermission('order.store');
        $roleAdmin->givePermission('order.edit');
        $roleAdmin->givePermission('order.update');
        $roleAdmin->givePermission('order.delete');
    }
}
