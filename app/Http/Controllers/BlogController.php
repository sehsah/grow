<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog listing page.
     */
    public function index()
    {
        return view('blog');
    }

    /**
     * Display a single blog post.
     */
    public function show(string $id)
    {
        // TODO: Implement single blog post view
        return view('blog.show', compact('id'));
    }
}
