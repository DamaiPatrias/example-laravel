<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $post = Post::latest();

        // dd(request('search'));

        // if (request('search')) {
        //     $post->where('title', 'LIKE', '%' . request('search') . '%')
        //         ->orWhere('body', 'LIKE', '%' . request('search') . '%');
        // }
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('name', request('author'));
            $title = 'by ' . $author->name;
        }
        return view('post', [
            "title" => "All Posts " . $title,
            "active" => 'post',
            // "posts" => $post->get(),
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('single_post', [
            "title" => 'Singel Post',
            "active" => 'post',
            "posts" => $post
        ]);
    }
}
