<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static  $blogs = [
        0 => [
            'id' => 1,
            'title' => 'This is blog title one',
            'image' => 'img/category/1.png',
            'description' => 'This is blog title one  description'
        ],
        1 => [
            'id' => 2,
            'title' => 'This is blog title two',
            'image' => 'img/category/2.jpg',
            'description' => 'This is blog title  two description'
        ],
        2 => [
            'id' => 3,
            'title' => 'This is blog title three',
            'image' => 'img/category/3.jpg',
            'description' => 'This is blog title  three description'
        ],
        3 => [
            'id' => 4,
            'title' => 'This is blog title four',
            'image' => 'img/category/4.jpg',
            'description' => 'This is blog title  four description'
        ],
    ];

    public static function getAllBlogs()
    {
        return self::$blogs;
    }
    public static function getBlogById($id)
    {
        foreach(self::$blogs as $blog)
        {
            if ($blog['id'] == $id)
            {
                return $blog;
            }
        }

    }
}
