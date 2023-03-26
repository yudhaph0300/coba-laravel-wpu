<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'M Yudha Pamungkas',
            'email' => 'yudhapamungkas0300@gmail.com',
            'username' => 'yudhapamungkas',
            'password' => bcrypt('12345')
        ]);
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // Category::factory(3)->create();
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        Post::factory(25)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur suscipit blanditiis optio eum, eligendi, consectetur aperiam quisquam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur suscipit blanditiis optio eum, eligendi, consectetur aperiam quisquam distinctio hic modi, est fuga illo ducimus doloribus debitis enim vero.</p><p>Velit ullam ratione voluptatibus maiores porro, eligendi, repellat non, animi ex ut debitis distinctio at? Quam suscipit itaque asperiores possimus natus ex sunt quibusdam mollitia nulla est recusandae doloribus maiores at dicta rerum a optio iure error, deserunt eos. Laboriosam, deleniti sint. Aut voluptate illum vitae qui quae modi dignissimos, ratione, aliquid illo impedit deserunt eum nesciunt tempora natus. Eaque deserunt porro, aut minus ad ipsa nisi neque libero possimus sunt exercitationem.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

    }
}
