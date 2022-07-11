<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('frontend.pages.blog', [
            "title" => "All Post",
            'active' => 'posts',
            'posts' => Post::latest()->get()
        ]);
    }
    public function show(Post $post)
    {
        return view('frontend.pages.post', [
            "title" => "Single post",
            'active' => 'posts',
            "post"  => $post
        ]);
    }
    public function author(User $author)
    {
        return view('frontend.pages.blog', [
            'title' => "Post By Author : $author->name",
            'active' => 'posts',
            'posts' => $author->posts->load('category', 'author'),
        ]);
    }
    public function category(Category $category)
    {
        return view('frontend.pages.blog', [
            'title' => "Post By Category : $category->name",
            'active' => 'posts',
            'posts' => $category->posts->load('category', 'author')
        ]);
    }
    public function categoriy()
    {
        return view('frontend.pages.category', [
            'title' => 'Categoriy',
            'active' => 'categoriy',
            'categoriy' => Category::all()
        ]);
    }
}