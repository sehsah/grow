@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="relative min-h-[40vh] flex items-center pt-32 pb-20 overflow-hidden">
            <div class="absolute top-1/4 right-0 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-pulse-glow"></div>
            <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-primary/5 rounded-full blur-2xl"></div>
            <div class="container-custom relative z-10">
                <div class="max-w-3xl mx-auto">
                    <div class="flex items-center gap-4 text-sm text-muted-foreground mb-6 animate-fade-in">
                        <a href="{{ route('blog') }}" class="hover:text-primary transition-colors">Blog</a>
                        <span>/</span>
                        <span>{{ $blog->title }}</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in animation-delay-100">
                        {{ $blog->title }}
                    </h1>
                    <div class="flex flex-wrap items-center gap-4 text-sm text-muted-foreground mb-8 animate-fade-in animation-delay-200">
                        @if($blog->published_at)
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                <path d="M3 10h18"></path>
                            </svg>
                            {{ $blog->published_at->format('F j, Y') }}
                        </span>
                        @endif

                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container-custom">
                <div class="max-w-4xl mx-auto">
                    @if($blog->image)
                    <div class="relative rounded-2xl overflow-hidden mb-8 group">
                        <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="transition-transform duration-500 group-hover:scale-105 w-full h-[400px] md:h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none"></div>
                    </div>
                    @endif

                    @if($blog->excerpt)
                    <p class="text-xl text-muted-foreground mb-8 leading-relaxed">
                        {{ $blog->excerpt }}
                    </p>
                    @endif

                    <div class="prose prose-lg max-w-none dark:prose-invert">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </section>

        @if(isset($relatedBlogs) && $relatedBlogs->count() > 0)
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <h2 class="text-3xl md:text-4xl font-bold mb-12">Related Articles</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($relatedBlogs as $relatedBlog)
                    <article class="group">
                        <div class="relative rounded-xl overflow-hidden mb-4">
                            <img src="{{ $relatedBlog->image }}" alt="{{ $relatedBlog->title }}" class="transition-transform duration-500 group-hover:scale-105 w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none"></div>
                        </div>
                        <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                            <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">{{ $relatedBlog->title }}</h3>
                        </a>
                        <p class="text-muted-foreground text-sm mb-4 line-clamp-2">{{ $relatedBlog->excerpt ?? $relatedBlog->title }}</p>
                        <div class="flex items-center gap-4 text-xs text-muted-foreground">
                            @if($relatedBlog->published_at)
                            <span>{{ $relatedBlog->published_at->format('M j, Y') }}</span>
                            @endif
                            @if($relatedBlog->read_time)
                            <span>{{ $relatedBlog->read_time }} min read</span>
                            @endif
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
    </main>
@endsection
