<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tag::class)->create([
            'name' => 'Sport',
            ]);
        factory(App\Tag::class)->create([
            'name' => 'Software',
            ]);
        factory(App\Tag::class)->create([
            'name' => 'Blog',
            ]);
        factory(App\Tag::class)->create([
            'name' => 'Reading',
            ]);
        factory(App\Tag::class)->create([
            'name' => 'Culture',
            ]);
        factory(App\Tag::class)->create([
            'name' => 'Airplane',
            ]);
        factory(App\Tag::class)->create([
            'name' => 'Work',
            ]);
        factory(App\Tag::class, 30)->create();
    }
}
