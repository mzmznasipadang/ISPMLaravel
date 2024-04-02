<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class content 
// extends Model
{
    // use HasFactory;
    private static $content = [
        [
            "title" => "Welcome to our website",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laborum quaerat quos totam suscipit fuga magnam non eveniet id placeat pariatur iste nostrum, ratione, magni cumque harum facere provident repudiandae?"
        ],
        [
            "title" => "Welcome to our website2",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laborum quaerat quos totam suscipit fuga magnam non eveniet id placeat pariatur iste nostrum, ratione, magni cumque harum facere provident repudiandae?2"
        ],
        [
            "title" => "Welcome to our website4",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laborum quaerat quos totam suscipit fuga magnam non eveniet id placeat pariatur iste nostrum, ratione, magni cumque harum facere provident repudiandae?3"
        ]
        ];

    public static function all() {
   return self::$content;
}
}