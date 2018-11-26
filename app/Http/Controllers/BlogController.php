<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

        $categories = Category::all();

        return view('blog.index',[
            'categories' => $categories,
            'posts' => $posts,
        ]);

    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        $categories = Category::all();

        $cat = $categories->pluck('name','id')->toArray();

        return view('blog.post',[
            'categories' => $categories,
            'post' => $post,
            'cat' => $cat,
        ]);
    }
}
