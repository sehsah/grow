@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="relative min-h-[50vh] flex items-center pt-32 pb-20 overflow-hidden">
            <div class="absolute top-1/4 right-0 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-pulse-glow"></div>
            <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-primary/5 rounded-full blur-2xl"></div>
            <div class="container-custom relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div><span
                            class="inline-block px-4 py-2 rounded-full border border-primary/50 text-primary text-sm font-medium mb-6 animate-fade-in"><span
                                class="">@trans('blog.badge')</span></span>
                        <h1
                            class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight animate-fade-in animation-delay-100">
                            <span class="">@trans('blog.title_insights')</span><br><span class="text-primary">@trans('blog.title_articles')</span></h1>
                        <p class="mt-6 text-lg text-muted-foreground max-w-xl animate-fade-in animation-delay-200"><span
                                class="">{{ $settings['page_subtitle'] ?? 'Discover the latest trends and insights in technology and business from our experts' }}</span></p>
                    </div>
                    <div class="hidden lg:flex justify-center items-center">
                        <div class="relative animate-rotate-slow w-40 h-40"><svg viewBox="0 0 100 100" class="w-full h-full"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                                        <feGaussianBlur stdDeviation="2" result="coloredBlur"></feGaussianBlur>
                                        <feMerge>
                                            <feMergeNode in="coloredBlur"></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                    </filter>
                                </defs>
                                <path d="M50 5
        C75 5, 95 25, 95 50
        C95 75, 75 95, 50 95
        C25 95, 5 75, 5 50
        C5 30, 20 15, 40 12" stroke="hsl(175, 50%, 42%)" stroke-width="4" stroke-linecap="round" fill="none"
                                    filter="url(#glow)" class="drop-shadow-[0_0_10px_hsl(175,50%,42%)]"></path>
                                <path d="M45 15
        C60 15, 80 30, 80 50
        C80 70, 60 85, 45 80" stroke="hsl(175, 50%, 50%)" stroke-width="2" stroke-linecap="round" fill="none"
                                    opacity="0.6"></path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </section>
        @if($featuredBlog)
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div class="relative rounded-2xl overflow-hidden group">
                        <img src="{{ $featuredBlog->image }}" alt="{{ $featuredBlog->title }}" class="transition-transform duration-500 group-hover:scale-105 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent pointer-events-none"></div>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ $featuredBlog->title }}</h2>
                        <p class="text-muted-foreground mb-6">{{ $featuredBlog->excerpt ?? $featuredBlog->title }}</p>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-muted-foreground mb-6">
                            @if($featuredBlog->published_at)
                            <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                {{ $featuredBlog->published_at->format('F j, Y') }}
                            </span>
                            @endif
                            @if($featuredBlog->read_time)
                            <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                {{ $featuredBlog->read_time }} @trans('blog.min_read')
                            </span>
                            @endif
                        </div>
                        <a class="btn-primary inline-flex items-center gap-2" href="{{ route('blog.show', $featuredBlog->slug) }}">
                            <span class="">@trans('blog.read_more')</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <section class="section-padding">
            <div class="container-custom">
                <h2 class="text-3xl md:text-4xl font-bold mb-12"><span class="">@trans('blog.all_articles')</span></h2>
                @if($blogs->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($blogs as $index => $blog)
                    <article class="group animate-fade-in" style="animation-delay: {{ $index * 100 }}ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4">
                                <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="transition-transform duration-500 group-hover:scale-105 w-full h-48 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none"></div>
                            </div>
                            <a href="{{ route('blog.show', $blog->slug) }}">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">{{ $blog->title }}</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">{{ $blog->excerpt ?? $blog->title }}</p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground">
                                @if($blog->published_at)
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    {{ $blog->published_at->format('F j, Y') }}
                                </span>
                                @endif
                                @if($blog->read_time)
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                    {{ $blog->read_time }} @trans('blog.min_read')
                                </span>
                                @endif
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                @else
                <div class="text-center py-12">
                    <p class="text-muted-foreground">@trans('blog.no_posts')</p>
                </div>
                @endif
            </div>
        </section>
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4"><span class="">{{ $settings['newsletter_title'] ?? 'Subscribe to Our Newsletter' }}</span></h2>
                    <p class="text-muted-foreground mb-8"><span class="">{{ $settings['newsletter_description'] ?? 'Get the latest articles and insights delivered directly to your inbox' }}</span></p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center"><input type="email"
                            placeholder="@trans('blog.email_placeholder')"
                            class="px-6 py-3 rounded-full bg-background border border-border focus:border-primary focus:outline-none text-foreground min-w-[300px]"><button
                            class="btn-primary"><span class="">@trans('blog.subscribe')</span></button></div>
                </div>
            </div>
        </section>
    </main>
@endsection
