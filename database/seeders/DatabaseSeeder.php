<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Nama',
        //     'email' => 'nama@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Contoh',
        //     'email' => 'contoh@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, cupiditate rerum quis odit voluptate vel odio ipsam alias suscipit accusantium maxime eos cumque ipsa doloribus quam eaque laboriosam labore nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem accusamus, ipsam nemo ullam nam, pariatur animi sequi nostrum aspernatur, ratione eum labore. Fuga labore soluta, et suscipit consequuntur, nisi repudiandae rerum omnis cupiditate, minus aperiam atque deserunt provident hic id ut tenetur doloremque quisquam porro. Enim expedita itaque ducimus illum nisi nam amet sed eius labore atque, numquam, maxime saepe eveniet adipisci animi, at voluptatum rem sint blanditiis autem laborum maiores minima voluptas! Accusantium, exercitationem similique explicabo nisi nihil tempore laborum omnis facere vel recusandae adipisci autem debitis saepe necessitatibus quam? Corrupti dicta velit repellat quisquam blanditiis facere et.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, cupiditate rerum quis odit voluptate vel odio ipsam alias suscipit accusantium maxime eos cumque ipsa doloribus quam eaque laboriosam labore nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem accusamus, ipsam nemo ullam nam, pariatur animi sequi nostrum aspernatur, ratione eum labore. Fuga labore soluta, et suscipit consequuntur, nisi repudiandae rerum omnis cupiditate, minus aperiam atque deserunt provident hic id ut tenetur doloremque quisquam porro. Enim expedita itaque ducimus illum nisi nam amet sed eius labore atque, numquam, maxime saepe eveniet adipisci animi, at voluptatum rem sint blanditiis autem laborum maiores minima voluptas! Accusantium, exercitationem similique explicabo nisi nihil tempore laborum omnis facere vel recusandae adipisci autem debitis saepe necessitatibus quam? Corrupti dicta velit repellat quisquam blanditiis facere et.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, cupiditate rerum quis odit voluptate vel odio ipsam alias suscipit accusantium maxime eos cumque ipsa doloribus quam eaque laboriosam labore nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem accusamus, ipsam nemo ullam nam, pariatur animi sequi nostrum aspernatur, ratione eum labore. Fuga labore soluta, et suscipit consequuntur, nisi repudiandae rerum omnis cupiditate, minus aperiam atque deserunt provident hic id ut tenetur doloremque quisquam porro. Enim expedita itaque ducimus illum nisi nam amet sed eius labore atque, numquam, maxime saepe eveniet adipisci animi, at voluptatum rem sint blanditiis autem laborum maiores minima voluptas! Accusantium, exercitationem similique explicabo nisi nihil tempore laborum omnis facere vel recusandae adipisci autem debitis saepe necessitatibus quam? Corrupti dicta velit repellat quisquam blanditiis facere et.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, cupiditate rerum quis odit voluptate vel odio ipsam alias suscipit accusantium maxime eos cumque ipsa doloribus quam eaque laboriosam labore nostrum?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem accusamus, ipsam nemo ullam nam, pariatur animi sequi nostrum aspernatur, ratione eum labore. Fuga labore soluta, et suscipit consequuntur, nisi repudiandae rerum omnis cupiditate, minus aperiam atque deserunt provident hic id ut tenetur doloremque quisquam porro. Enim expedita itaque ducimus illum nisi nam amet sed eius labore atque, numquam, maxime saepe eveniet adipisci animi, at voluptatum rem sint blanditiis autem laborum maiores minima voluptas! Accusantium, exercitationem similique explicabo nisi nihil tempore laborum omnis facere vel recusandae adipisci autem debitis saepe necessitatibus quam? Corrupti dicta velit repellat quisquam blanditiis facere et.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
