<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'mariyanto',
            'email' => 'mariyanto1992@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('user');

        $admin = User::create([
            'name' => 'bamadigital',
            'email' => 'admin@bamadigital.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('organisasi');
    }
}
