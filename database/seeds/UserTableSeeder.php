<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Luis Daniel',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin'),
            // 'role' => 'admin'
            ]);
        factory(App\User::class, 10)->create();

    }
}
