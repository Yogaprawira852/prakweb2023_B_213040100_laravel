<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [

        [

            "title"=> "Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author"=>"Yoga Prawira Kusuma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, 
            quasi nesciunt eveniet unde recusandae molestiae sed culpa excepturi, 
            nulla optio repellat iure iusto sequi perspiciatis sapiente voluptate libero quisquam nemo. Aliquid dolorem velit eaque modi, 
            cupiditate dolore temporibus autem suscipit, id ducimus laboriosam nulla eius numquam quisquam quo facilis. Quos, hic. Aliquid, 
            assumenda! Debitis earum at ea est, consequuntur, mollitia impedit enim voluptatibus eius nulla fugit placeat a harum beatae eos ut 
            libero molestiae sed itaque numquam exercitationem laborum dolor!"
        ],

        [
            "title"=> "Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author"=>"khalid karawita",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, 
            quidem? Eligendi maiores qui quaerat cupiditate quidem doloremque, quas quisquam esse hic expedita laudantium, 
            delectus eaque, eos sed omnis debitis sequi quibusdam. Ut veritatis aliquid porro corrupti aspernatur in dolorem ipsa! 
            Accusantium architecto laboriosam mollitia rem eligendi quis, saepe quo alias exercitationem dicta cumque magnam vel ipsam in, 
            quod voluptatem maiores, dignissimos nemo quidem dolorem quos aperiam voluptate omnis reiciendis? Quibusdam, provident. Quis debitis,
             nam eaque quae consequuntur dolores delectus, earum, beatae maiores minus sunt. Deserunt ut saepe aliquam natus maxime sit reprehenderit, 
             pariatur ad enim tempore alias cupiditate facere expedita."
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