<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function index($id)
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
                ->where('category', '=', $id)
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

        $categories = Category::all();

        $cat = $categories->pluck('name','id')->toArray();

        return view('blog.index',[
            'categories' => $categories,
            'posts' => $posts,
            'cat' => $cat,
            'id' => $id,
        ]);
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }
}
