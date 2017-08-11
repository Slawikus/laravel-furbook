<?php

use Illuminate\Database\Seeder;
use Furbook\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('hunter2'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'slawa',
            'email' => 'slawa@admin.com',
            'password' => bcrypt('secret'),
            'is_admin' => false
        ]);
    }
}
