<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => "php", 'posted_by' => "Ahmed", 'created_at' => '2022-10-10 09:00:00'],
            ['id' => 2, 'title' => "c#", 'posted_by' => "Mohamed", 'created_at' => '2012-10-10 09:00:00'],
            ['id' => 3, 'title' => "java", 'posted_by' => "Ahmed", 'created_at' => '2010-10-10 09:00:00'],
            ['id' => 4, 'title' => "html", 'posted_by' => "Ahmed", 'created_at' => '2013-10-10 09:00:00']
        ];
        return view('posts/index', ['posts' => $allPosts]);
    }
}
