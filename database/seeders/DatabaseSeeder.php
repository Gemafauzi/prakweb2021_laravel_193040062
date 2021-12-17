<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Hannan Fh',
            'username' => 'hannanfh',
            'email' => 'alhafahanura@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        // User::create([
        //     'name' => 'Nura Nuraeni',
        //     'email' => '193040074@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web Programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
