<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "me1",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quam ratione possimus. Itaque sint incidunt, eaque atque officiis cum dolor dolores nisi, ratione deserunt quia officia ipsam autem veritatis aliquid totam labore tenetur ullam suscipit sequi asperiores ipsa vero minima. Quasi modi eaque nam porro iure minima libero quia repellendus dicta dolorum, nostrum nesciunt eligendi nihil reprehenderit iusto deserunt cupiditate est voluptas quibusdam maiores debitis incidunt. Qui autem magni eveniet neque molestias deleniti corrupti tempora libero facilis quae consequuntur, sit nemo in reiciendis ratione nisi, tenetur aspernatur consequatur perspiciatis sint?"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "me2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui tenetur a non maxime nisi cupiditate, laboriosam deserunt praesentium minus magnam iste recusandae officia id assumenda ad excepturi itaque rem. Beatae deserunt sunt atque natus, officia exercitationem mollitia maiores nisi magni reiciendis rerum itaque iste, ratione nobis. Eius, repudiandae minus quidem eum iusto praesentium ab numquam assumenda officiis at perspiciatis. Ipsum quasi minima iusto consequatur aspernatur asperiores sapiente error veritatis, odio cumque ut corrupti facere et debitis quibusdam temporibus labore voluptatum, reprehenderit voluptas soluta? Odio consequatur voluptatibus illo voluptatum commodi autem dignissimos ea iusto earum ullam quasi quod provident ipsa, neque sit, eum accusamus porro velit reprehenderit molestiae voluptate dolore! Corrupti.
            "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
