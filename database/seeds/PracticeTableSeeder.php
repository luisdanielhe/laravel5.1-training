<?php

use Illuminate\Database\Seeder;

class PracticeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Practice::class)->create([
            'title'     =>  'Tinker'
            ]);
        factory(App\Practice::class)->create([
            'title'     =>  'Start-With-Blade'
            ]);
        factory(App\Practice::class)->create([
            'title'     =>  'Articles'
            ]);
    }
}
