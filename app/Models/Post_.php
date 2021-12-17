<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ipsa iure consequuntur sint molestiae doloremque corrupti repellendus at, voluptas commodi suscipit quos alias rem aliquid consequatur quis tempora quaerat dolorum nisi! Ipsam exercitationem mollitia, placeat perspiciatis voluptates quae! Aut voluptates quod accusantium error beatae et similique blanditiis eos esse, placeat sequi adipisci sunt deserunt optio iste vero ipsam vel aspernatur harum architecto ut? Ipsam, ipsa vitae maiores illo dolores hic impedit minus asperiores libero, neque veritatis soluta cumque vel officia?"
        ],
        [
            "title" => "Judul Post HANNAN ",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam aspernatur facere architecto accusantium suscipit ab molestias quas fugiat vitae ratione tempore, sed saepe. Ut, voluptas? Tempore dolore qui ipsa odit facere libero vero necessitatibus maiores cum placeat rerum veniam exercitationem quo earum recusandae illo dicta in aspernatur fugit, officiis totam, consequuntur optio? Voluptate ex placeat nesciunt in officia at eligendi quod ducimus explicabo eius iure omnis, fuga numquam autem quia consequatur, possimus dolor quaerat natus sed rerum? Fugit illo maxime modi possimus, repellendus et at ad molestiae asperiores doloribus culpa sint laboriosam iste commodi eum sapiente natus numquam quisquam? Voluptas!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
