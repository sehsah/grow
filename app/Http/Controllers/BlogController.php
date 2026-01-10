<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Setting;
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

        // Fetch settings for blog page
        $settings = [
            'page_subtitle' => Setting::getValue('blog.page_subtitle', 'Discover the latest trends and insights in technology and business from our experts'),
            'newsletter_title' => Setting::getValue('blog.newsletter_title', 'Subscribe to Our Newsletter'),
            'newsletter_description' => Setting::getValue('blog.newsletter_description', 'Get the latest articles and insights delivered directly to your inbox'),
        ];

        return view('blog', compact('featuredBlog', 'blogs', 'settings'));
    }

    /**
     * Display a single blog post.
     */
    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Get related blogs (excluding current one)
        $relatedBlogs = Blog::where('is_active', true)
            ->where('id', '!=', $blog->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('blog-show', compact('blog', 'relatedBlogs'));
    }
}
