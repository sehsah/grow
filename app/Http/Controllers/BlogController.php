<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog listing page.
     */
    public function index()
    {
        $featuredBlog = Blog::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('published_at', 'desc')
            ->first();
        
        $blogs = Blog::where('is_active', true)
            ->where(function($query) use ($featuredBlog) {
                if ($featuredBlog) {
                    $query->where('id', '!=', $featuredBlog->id);
                }
            })
            ->orderBy('published_at', 'desc')
            ->orderBy('order', 'asc')
            ->get();
        
        return view('blog', compact('featuredBlog', 'blogs'));
    }

    /**
     * Display a single blog post.
     */
    public function show(string $id)
    {
        $blog = Blog::where('id', $id)
            ->where('is_active', true)
            ->firstOrFail();
        
        return view('blog.show', compact('blog'));
    }
}
