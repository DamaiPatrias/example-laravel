<?php

namespace App\Models;



class Post
{
    private static $blogPost = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Nama Lengkap',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At optio inventore doloribus ipsa illum nesciunt dolorem magni nulla nemo quisquam sit molestiae, eum voluptatem officia in harum rem dignissimos id commodi possimus, reiciendis repellat. Animi expedita reprehenderit aliquam accusantium. Aliquam nulla sunt aperiam provident perspiciatis in. Repellat eaque error optio, tenetur deleniti sequi fuga blanditiis a at excepturi? Aspernatur debitis recusandae omnis alias! Reiciendis itaque eaque, amet saepe recusandae eveniet tenetur hic culpa perferendis? Non placeat exercitationem officia quo totam.'

        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Nama Depan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At optio inventore doloribus ipsa illum nesciunt dolorem magni nulla nemo quisquam sit molestiae, eum voluptatem officia in harum rem dignissimos id commodi possimus, reiciendis repellat. Animi expedita reprehenderit aliquam accusantium. Aliquam nulla sunt aperiam provident perspiciatis in. Repellat eaque error optio, tenetur deleniti sequi fuga blanditiis a at excepturi? Aspernatur debitis recusandae omnis alias! Reiciendis itaque eaque, amet saepe recusandae eveniet tenetur hic culpa perferendis? Non placeat exercitationem officia quo totam.'

        ]
    ];

    public static function all()
    {
        return collect(self::$blogPost);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $item) {
        //     if ($item["slug"] === $slug) {
        //         $post = $item;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
