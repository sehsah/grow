@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Welcome to Grow Application')

@section('content')
    <main class="flex-1">
        <section class="relative min-h-screen flex flex-col pt-20 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 8px; height: 8px; top: 10%; left: 15%; animation-delay: 0s; animation-duration: 6s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 6px; height: 6px; top: 20%; left: 80%; animation-delay: 1s; animation-duration: 8s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 10px; height: 10px; top: 60%; left: 10%; animation-delay: 2s; animation-duration: 7s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 5px; height: 5px; top: 40%; left: 90%; animation-delay: 0.5s; animation-duration: 9s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 7px; height: 7px; top: 80%; left: 20%; animation-delay: 3s; animation-duration: 6s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 4px; height: 4px; top: 30%; left: 70%; animation-delay: 1.5s; animation-duration: 8s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 9px; height: 9px; top: 70%; left: 85%; animation-delay: 2.5s; animation-duration: 7s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 6px; height: 6px; top: 15%; left: 50%; animation-delay: 4s; animation-duration: 9s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 8px; height: 8px; top: 85%; left: 60%; animation-delay: 0s; animation-duration: 6s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 5px; height: 5px; top: 50%; left: 5%; animation-delay: 3.5s; animation-duration: 8s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 7px; height: 7px; top: 25%; left: 35%; animation-delay: 1s; animation-duration: 7s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
                <div class="absolute rounded-full bg-primary/60 animate-float-dot"
                    style="width: 4px; height: 4px; top: 55%; left: 75%; animation-delay: 2s; animation-duration: 9s; box-shadow: 0 0 10px hsl(var(--primary) / 0.5);">
                </div>
            </div>
            <div class="absolute top-1/4 right-0 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-pulse-glow"></div>
            <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-primary/5 rounded-full blur-2xl"></div>
            <div class="container-custom relative z-10 flex-1 flex items-center">
                <div class="grid lg:grid-cols-2 gap-12 items-center w-full mx-0 my-[160px]">
                    <div>
                        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold leading-tight animate-fade-in">
                            <span class="">{{ setting('home.hero_title') }}</span><br>
                            <span class="text-primary"><span
                                    class="">{{ setting('home.hero_subtitle') }}</span></span>
                        </h1>
                        <p
                            class="mt-6 text-lg md:text-xl text-muted-foreground max-w-xl animate-fade-in animation-delay-200">
                            <span class="">{{ setting('home.hero_description') }}</span>
                        </p>
                        <div class="mt-10 flex flex-wrap gap-4 animate-fade-in animation-delay-300">
                            <a class="btn-primary" href="/about"><span class="">@trans('home.explore_services')</span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-arrow-right">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                            <a class="btn-outline" href="/services"><span class="">@trans('home.our_services_btn')</span></a>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center items-center">
                        <div class="relative animate-rotate-slow w-56 h-56"><svg viewBox="0 0 100 100" class="w-full h-full"
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
                     C5 30, 20 15, 40 12" stroke="hsl(175, 50%, 42%)" stroke-width="4" stroke-linecap="round"
                                    fill="none" filter="url(#glow)" class="drop-shadow-[0_0_10px_hsl(175,50%,42%)]">
                                </path>
                                <path d="M45 15
                     C60 15, 80 30, 80 50
                     C80 70, 60 85, 45 80" stroke="hsl(175, 50%, 50%)" stroke-width="2" stroke-linecap="round"
                                    fill="none" opacity="0.6"></path>
                            </svg></div>
                    </div>
                </div>
            </div>
            <div class="container-custom pb-20 relative z-10 my-0">
                <div class="relative mt-16 animate-fade-in animation-delay-400">
                    <div class="absolute -inset-4 rounded-2xl border-2 border-primary/30 -rotate-1"></div>
                    <div class="absolute -inset-4 rounded-2xl border-2 border-primary/20 rotate-1"></div>
                    <div class="relative rounded-xl overflow-hidden">
                        <img src="{{ Storage::disk('public')->url(setting('home.image_cover')) }}" alt="COMPACT team collaboration" class="w-full h-[400px] md:h-[500px] object-cover grayscale">
                        <div class="absolute inset-0 bg-gradient-to-t from-background/80 via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <a href="{{ setting('home.video_url') }}" target="_blank"
                                class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-primary flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-primary/50 animate-pulse-glow"
                                aria-label="Play video">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-play w-6 h-6 md:w-8 md:h-8 text-primary-foreground fill-current ml-1">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4"><span class="">@trans('services.title')</span> <span
                            class="text-primary">@trans('services.title2')</span></h2>
                    <p class="text-muted-foreground"><span class="">@trans('services.subtitle')</span></p>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach ($services as $index => $service)
                        <div class="service-card group animate-fade-in"
                            style="animation-delay: {{ ($index + 1) * 100 }}ms; margin-top: {{ $index % 2 === 1 ? '2rem' : '0px' }};">
                            <div class="w-12 h-12 text-primary mb-6 group-hover:scale-110 transition-transform">
                                <img src="{{ Storage::disk('public')->url($service->icon) }}" alt="{{ $service->title }}" class="w-10 h-10 filter-primary">
                            </div>
                            <h3 class="text-2xl font-bold mb-3"><span class="">{{ $service->title }}</span></h3>
                            <p class="text-muted-foreground mb-6"><span
                                    class="">{{ $service->short_description ?? ($service->description ?? 'Service description') }}</span>
                            </p>
                            <a class="inline-flex items-center gap-2 text-primary font-medium hover:gap-3 transition-all"
                                href="{{ route('services.show', $service->slug) }}"><span
                                    class="">@trans('home.learn_more')</span><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-arrow-right">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-padding ">
            <div class="container-custom">
                <div class="text-center mb-8 md:mb-16"><span
                        class="inline-block px-4 py-2 rounded-full border border-primary/50 text-primary text-sm font-medium mb-4 md:mb-6 animate-fade-in"><span
                            class="">@trans('home.why_choose_us')</span></span>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold animate-fade-in animation-delay-100"><span
                            class="">{{ setting('home.strengths_title', __('Our Strengths')) }}</span><br>
                        <span
                            class="text-primary">{{ setting('home.strengths_subtitle', __('Competitive Advantages')) }}</span>
                    </h2>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8 md:mb-16">
                    @if (!empty($competitiveAdvantages))
                        @foreach ($competitiveAdvantages as $index => $advantage)
                            <div class="group p-4 md:p-6 rounded-xl md:rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                                style="animation-delay: {{ $index * 100 }}ms;">
                                <div
                                    class="w-10 h-10 md:w-14 md:h-14 rounded-lg md:rounded-xl bg-primary/10 flex items-center justify-center mb-3 md:mb-4 group-hover:bg-primary/20 transition-colors">
                                    {!! $advantage['icon'] ?? '' !!}
                                </div>
                                <h3 class="text-sm md:text-lg font-bold mb-1 md:mb-2">
                                    <span class="">{{ $advantage['title'][app()->getLocale()] ?? '' }}</span>
                                </h3>
                                <p class="text-xs md:text-sm text-muted-foreground line-clamp-3 md:line-clamp-none">
                                    <span class="">{{ $advantage['description'][app()->getLocale()] ?? '' }}</span>
                                </p>
                            </div>
                        @endforeach
                    @else
                        <div class="group p-4 md:p-6 rounded-xl md:rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                            style="animation-delay: 0ms;">
                            <div
                                class="w-10 h-10 md:w-14 md:h-14 rounded-lg md:rounded-xl bg-primary/10 flex items-center justify-center mb-3 md:mb-4 group-hover:bg-primary/20 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-award w-5 h-5 md:w-7 md:h-7 text-primary">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                            </div>
                            <h3 class="text-sm md:text-lg font-bold mb-1 md:mb-2"><span
                                    class="">{{ setting('stats.years_experience', '10+') }} Years
                                    Experience</span></h3>
                            <p class="text-xs md:text-sm text-muted-foreground line-clamp-3 md:line-clamp-none"><span
                                    class="">Proven track record of delivering successful projects across various
                                    industries.</span></p>
                        </div>
                        <div class="group p-4 md:p-6 rounded-xl md:rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                            style="animation-delay: 100ms;">
                            <div
                                class="w-10 h-10 md:w-14 md:h-14 rounded-lg md:rounded-xl bg-primary/10 flex items-center justify-center mb-3 md:mb-4 group-hover:bg-primary/20 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-users w-5 h-5 md:w-7 md:h-7 text-primary">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="text-sm md:text-lg font-bold mb-1 md:mb-2"><span
                                    class="">{{ setting('stats.team_members', '100+') }} Team
                                    Members</span></h3>
                            <p class="text-xs md:text-sm text-muted-foreground line-clamp-3 md:line-clamp-none"><span
                                    class="">Expert professionals dedicated to your business success.</span></p>
                        </div>
                        <div class="group p-4 md:p-6 rounded-xl md:rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                            style="animation-delay: 200ms;">
                            <div
                                class="w-10 h-10 md:w-14 md:h-14 rounded-lg md:rounded-xl bg-primary/10 flex items-center justify-center mb-3 md:mb-4 group-hover:bg-primary/20 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-target w-5 h-5 md:w-7 md:h-7 text-primary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                            <h3 class="text-sm md:text-lg font-bold mb-1 md:mb-2"><span
                                    class="">@trans('home.result_oriented')</span>
                            </h3>
                            <p class="text-xs md:text-sm text-muted-foreground line-clamp-3 md:line-clamp-none"><span
                                    class="">@trans('home.result_oriented_desc')</span>
                            </p>
                        </div>
                        <div class="group p-4 md:p-6 rounded-xl md:rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                            style="animation-delay: 300ms;">
                            <div
                                class="w-10 h-10 md:w-14 md:h-14 rounded-lg md:rounded-xl bg-primary/10 flex items-center justify-center mb-3 md:mb-4 group-hover:bg-primary/20 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-shield w-5 h-5 md:w-7 md:h-7 text-primary">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-sm md:text-lg font-bold mb-1 md:mb-2"><span
                                    class="">@trans('home.quality_assurance')</span></h3>
                            <p class="text-xs md:text-sm text-muted-foreground line-clamp-3 md:line-clamp-none"><span
                                    class="">@trans('home.quality_assurance_desc')</span></p>
                        </div>
                    @endif
                </div>

                <div class="grid md:grid-cols-2 gap-4 md:gap-8 mb-8 md:mb-16">
                    <div
                        class="group p-5 md:p-8 rounded-xl md:rounded-2xl bg-gradient-to-br from-primary/10 to-primary/5 border border-primary/20 hover:border-primary/40 transition-all duration-300 animate-fade-in">
                        <div class="flex items-center gap-3 md:gap-4 mb-3 md:mb-4">
                            <div
                                class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-primary/20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-target w-5 h-5 md:w-6 md:h-6 text-primary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                            <h3 class="text-lg md:text-2xl font-bold">
                                <span class="">{{ setting('site.mission_title') }}</span>
                            </h3>
                        </div>
                        <p class="text-sm md:text-base text-muted-foreground leading-relaxed">
                            <span class="">{{ setting('site.mission') }}</span>
                        </p>
                    </div>
                    <div
                        class="group p-5 md:p-8 rounded-xl md:rounded-2xl bg-gradient-to-br from-secondary/50 to-secondary/30 border border-border hover:border-primary/40 transition-all duration-300 animate-fade-in animation-delay-200">
                        <div class="flex items-center gap-3 md:gap-4 mb-3 md:mb-4">
                            <div
                                class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-primary/20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-eye w-5 h-5 md:w-6 md:h-6 text-primary">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                    </path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </div>
                            <h3 class="text-lg md:text-2xl font-bold"><span
                                    class="">{{ setting('site.vision_title') }}</span></h3>
                        </div>
                        <p class="text-sm md:text-base text-muted-foreground leading-relaxed">
                            <span class="">{{ setting('site.vision') }}</span>
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-8"><span class="">@trans('home.our_core_values')</span>
                    </h3>
                    <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-6 md:mb-8">
                        @foreach ($coreValues as $index => $coreValue)
                            <div class="flex items-center gap-1.5 md:gap-2 px-3 md:px-4 py-1.5 md:py-2 rounded-full bg-card border border-border hover:border-primary/50 transition-colors animate-fade-in"
                                style="animation-delay: {{ $index * 50 }}ms;">
                                {!! $coreValue['icon'] !!}
                                <span class="text-xs md:text-sm font-medium">
                                    <span class="">{{ $coreValue['title'][app()->getLocale()] ?? '' }}</span>
                                </span>
                            </div>
                        @endforeach
                    </div><a class="btn-outline inline-flex items-center gap-2 text-sm md:text-base" href="/about"><span
                            class="">@trans('home.learn_more_about_us')</span><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></a>
                </div>
            </div>
        </section>
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <div class="text-center mb-16"><span
                        class="inline-block px-4 py-2 rounded-full border border-border text-sm font-medium mb-6 animate-fade-in">
                        <span class="">@trans('home.complete_work')</span></span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in animation-delay-100"><span
                            class="">@trans('home.projects_title')</span><br><span
                            class="text-primary">@trans('home.projects_subtitle')</span>
                    </h2>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-8">
                        @foreach ($projects->filter(fn($p, $i) => $i % 2 === 0)->take(2) as $index => $project)
                            <div class="group animate-fade-in" style="animation-delay: {{ ($index + 2) * 100 }}ms;">
                                <div
                                    class="relative rounded-2xl overflow-hidden bg-gradient-to-br from-primary/30 to-primary/10 p-4 transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl hover:shadow-primary/20">
                                    <div class="aspect-[4/3] rounded-xl overflow-hidden bg-muted">
                                        <img src="{{ Storage::disk('public')->url($project->image) }}" alt="{{ $project->title }}"
                                            class="transition-transform duration-500 group-hover:scale-110">
                                    </div>
                                    <div class="absolute bottom-8 left-8 flex gap-2">
                                        <span
                                            class="px-3 py-1 rounded-full bg-background/90 text-xs font-medium">{{ $project->category }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('projects.show', $project->id) }}">
                                    <h3
                                        class="text-xl font-bold text-primary mt-4 transition-colors group-hover:text-primary/80">
                                        {{ $project->title }}</h3>
                                </a>
                                <p class="text-muted-foreground text-sm mt-2 line-clamp-2">
                                    {{ $project->description ?? ($project->short_description ?? 'Project description') }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="space-y-8 md:mt-16">
                        @foreach ($projects->filter(fn($p, $i) => $i % 2 === 1)->take(2) as $index => $project)
                            <div class="group animate-fade-in" style="animation-delay: {{ ($index + 3) * 100 }}ms;">
                                <div
                                    class="relative rounded-2xl overflow-hidden bg-gradient-to-br from-gray-500/30 to-gray-600/30 p-4 transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl hover:shadow-primary/20">
                                    <div class="aspect-[4/3] rounded-xl overflow-hidden bg-muted">
                                        <img src="{{ Storage::disk('public')->url($project->image) }}" alt="{{ $project->title }}"
                                            class="transition-transform duration-500 group-hover:scale-110">
                                    </div>
                                    @if ($project->category)
                                        <div class="absolute bottom-8 left-8 flex gap-2">
                                            <span
                                                class="px-3 py-1 rounded-full bg-background/90 text-xs font-medium">{{ $project->category }}</span>
                                        </div>
                                    @endif
                                </div>
                                <a href="{{ route('projects.show', $project->id) }}">
                                    <h3
                                        class="text-xl font-bold text-primary mt-4 transition-colors group-hover:text-primary/80">
                                        {{ $project->title }}</h3>
                                </a>
                                <p class="text-muted-foreground text-sm mt-2 line-clamp-2">
                                    {{ $project->description ?? ($project->short_description ?? 'Project description') }}</p>
                            </div>
                        @endforeach
                        <div class="pt-4">
                            <a class="btn-outline inline-flex items-center gap-2" href="{{ route('projects') }}">
                                <span class="">@trans('home.view_all')</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-sidebar-accent">
            <div class="container-custom">
                <div class="text-center mb-8"><span
                        class="inline-block px-4 py-2 rounded-full border border-primary/50 text-primary text-sm font-medium animate-fade-in"><span
                            class="">@trans('home.working_process')</span></span></div>
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold animate-fade-in animation-delay-100"><span
                            class="">@trans('home.working_process_subtitle')</span></h2>
                </div>
                <div class="relative">
                    <div
                        class="hidden md:block absolute top-8 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-border to-transparent">
                    </div>
                    <div class="grid md:grid-cols-4 gap-8 relative">
                        @foreach ($workingProcesses as $index => $process)
                            <div class="text-center animate-fade-in relative"
                                style="animation-delay: {{ $index * 150 }}ms;">
                                <div class="flex justify-center mb-6"><span
                                        class="inline-block px-3 py-1 rounded-full bg-primary text-primary-foreground text-xs font-medium">{{ $process->step_number }}</span>
                                </div>
                                <div
                                    class="w-16 h-16 rounded-full bg-secondary/50 border border-border flex items-center justify-center mx-auto mb-6 transition-all duration-300 hover:border-primary hover:bg-primary/10">
                                    {!! $process->icon ??
                                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-7 h-7 text-foreground"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>' !!}
                                </div>
                                <h3 class="text-lg font-bold mb-3"><span class="">{{ $process->title }}</span></h3>
                                <p class="text-muted-foreground text-sm leading-relaxed max-w-[200px] mx-auto"><span
                                        class="">{{ $process->description }}</span></p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding ">
            <div class="container-custom">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6 mb-12">
                    <div><span
                            class="inline-block px-4 py-2 rounded-full border border-primary/50 text-primary text-sm font-medium mb-6 animate-fade-in"><span
                                class="">@trans('home.our_team')</span></span>
                        <h2 class="text-4xl md:text-5xl font-bold animate-fade-in animation-delay-100"><span
                                class="">@trans('home.meet_experts') </span><br><span class="text-primary">COMPACT</span>
                        </h2>
                    </div>
                    <div class="animate-fade-in animation-delay-200"><a class="btn-outline inline-flex items-center gap-2"
                            href="/about"><span class="">@trans('home.view_teams')</span></a></div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach ($teams as $index => $team)
                        <div class="group animate-fade-in" style="animation-delay: {{ ($index + 1) * 100 }}ms;">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{ Storage::disk('public')->url($team->image) }}" alt="{{ $team->name }}"
                                    class="grayscale group-hover:grayscale-0 transition-all duration-500">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-muted-foreground text-sm">{{ $team->position }}</p>
                                <h3 class="font-bold text-lg">{{ $team->name }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <div class="text-center mb-12"><span
                        class="inline-block px-4 py-2 rounded-full border border-primary/50 text-primary text-sm font-medium mb-6 animate-fade-in">@trans('home.our_partners')</span>
                    <h2 class="text-4xl md:text-5xl font-bold animate-fade-in animation-delay-100">
                        @trans('home.trusted_by')<br><span class="text-primary">@trans('home.leading_companies')</span></h2>
                </div>
                <div class="relative" id="partners-carousel" dir="ltr">
                    <button id="partners-prev"
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full bg-card border border-border flex items-center justify-center hover:bg-muted transition-colors"
                        aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left w-5 h-5">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </button>
                    <button id="partners-next"
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full bg-card border border-border flex items-center justify-center hover:bg-muted transition-colors"
                        aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-5 h-5">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                    <div class="overflow-hidden mx-12">
                        <div id="partners-track" class="flex transition-transform duration-500 ease-in-out">
                            @foreach ($partners as $partner)
                                <div class="flex-shrink-0 px-2 partners-slide">
                                    @if ($partner->website_url)
                                        <a href="{{ $partner->website_url }}" target="_blank" rel="noopener noreferrer"
                                            class="block bg-white rounded-xl p-6 h-28 flex items-center justify-center hover:shadow-lg transition-shadow border border-border/10">
                                            <img src="{{ $partner->logo }}" alt="{{ $partner->name }}"
                                                class="max-h-full max-w-full object-contain">
                                        </a>
                                    @else
                                        <div
                                            class="bg-white rounded-xl p-6 h-28 flex items-center justify-center border border-border/10">
                                            <img src="{{ $partner->logo }}" alt="{{ $partner->name }}"
                                                class="max-h-full max-w-full object-contain">
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="partners-dots" class="flex justify-center gap-2 mt-6">
                        {{-- Dots will be generated by JavaScript --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12 md:py-16 bg-primary ">
            <div class="container-custom">
                <div class="text-center mb-8 md:mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-primary-foreground mb-2">@trans('home.target_fields')</h2>
                    <p class="text-primary-foreground/80 text-sm md:text-base">@trans('home.target_fields_description')</p>
                </div>
                <div class="relative" id="target-fields-carousel" dir="ltr">
                    <button id="target-fields-prev"
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full border-2 border-primary-foreground/50 flex items-center justify-center text-primary-foreground hover:bg-primary-foreground/10 transition-colors"
                        aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </button>
                    <button id="target-fields-next"
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full border-2 border-primary-foreground/50 flex items-center justify-center text-primary-foreground hover:bg-primary-foreground/10 transition-colors"
                        aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                    <div class="overflow-hidden mx-14">
                        <div id="target-fields-track" class="flex transition-transform duration-500 ease-in-out">
                            @foreach ($targetFields as $field)
                                <div class="flex-shrink-0 px-2 target-field-slide" style="width: 25%;">
                                    <div class="text-center py-4">
                                        <div
                                            class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-primary-foreground/30 flex items-center justify-center mx-auto mb-3 hover:border-primary-foreground/60 hover:bg-primary-foreground/10 transition-all duration-300">
                                            {!! $field->icon !!}
                                        </div>
                                        <span
                                            class="text-primary-foreground font-medium text-sm md:text-base hover:text-primary-foreground/80 transition-colors cursor-default">{{ $field->name }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="target-fields-dots" class="flex justify-center gap-2 mt-4">
                        {{-- Dots will be generated by JavaScript --}}
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container-custom">
                <div
                    class="relative rounded-3xl bg-gradient-to-r from-primary/20 to-primary/5 p-12 md:p-20 text-center overflow-hidden">
                    <div
                        class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,hsl(var(--primary)/0.3),transparent_50%)]">
                    </div>
                    <div class="relative z-10">
                        <h2 class="text-3xl md:text-5xl font-bold mb-6"><span class="">@trans('home.lets_start_conversation')</span>
                        </h2>
                        <p class="text-muted-foreground max-w-xl mx-auto mb-8"><span
                                class="">@trans('home.get_in_touch')</span></p><a class="btn-primary" href="/contact"><span
                                class="">@trans('home.lets_talk')</span><svg xmlns="http://www.w3.org/2000/svg"
                                width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('partners-carousel');
            if (!carousel) return;

            const track = document.getElementById('partners-track');
            const prevBtn = document.getElementById('partners-prev');
            const nextBtn = document.getElementById('partners-next');
            const dotsContainer = document.getElementById('partners-dots');
            const slides = track.querySelectorAll('.partners-slide');

            if (!track || !prevBtn || !nextBtn || !dotsContainer || slides.length === 0) return;

            let itemsPerSlide = getItemsPerSlide();
            let totalSlides = Math.ceil(slides.length / itemsPerSlide);
            let currentSlide = 0;
            let autoPlayTimer = null;
            const autoPlayDelay = 4000;

            function getItemsPerSlide() {
                if (window.innerWidth < 768) return 1; // mobile
                return 6; // desktop/tablet default
            }

            function applySlideWidths() {
                const width = 100 / itemsPerSlide;
                slides.forEach((slide) => {
                    slide.style.width = `${width}%`;
                });
            }

            // Initialize carousel
            function initCarousel() {
                applySlideWidths();
                totalSlides = Math.ceil(slides.length / itemsPerSlide);
                if (currentSlide >= totalSlides) currentSlide = totalSlides - 1;
                if (currentSlide < 0) currentSlide = 0;

                // Generate pagination dots
                dotsContainer.innerHTML = '';
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.className =
                        `w-2 h-2 rounded-full transition-all ${i === currentSlide ? 'w-6 bg-primary' : 'bg-muted-foreground/30'}`;
                    dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }

                updateCarousel();
            }

            function updateCarousel() {
                // Calculate transform: move by 100% for each slide (6 items per slide)
                const translateX = -(currentSlide * 100);
                track.style.transform = `translateX(${translateX}%)`;

                // Update dots
                const dots = dotsContainer.querySelectorAll('button');
                dots.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.remove('bg-muted-foreground/30');
                        dot.classList.add('w-6', 'bg-primary');
                    } else {
                        dot.classList.remove('w-6', 'bg-primary');
                        dot.classList.add('bg-muted-foreground/30');
                    }
                });

                // Update button states
                prevBtn.disabled = currentSlide === 0;
                nextBtn.disabled = currentSlide === totalSlides - 1;
                prevBtn.classList.toggle('opacity-50', currentSlide === 0);
                prevBtn.classList.toggle('cursor-not-allowed', currentSlide === 0);
                nextBtn.classList.toggle('opacity-50', currentSlide === totalSlides - 1);
                nextBtn.classList.toggle('cursor-not-allowed', currentSlide === totalSlides - 1);
            }

            function goToSlide(slide) {
                if (slide < 0 || slide >= totalSlides) return;
                currentSlide = slide;
                updateCarousel();
            }

            function nextSlide() {
                if (currentSlide < totalSlides - 1) {
                    currentSlide++;
                } else {
                    currentSlide = 0;
                }
                updateCarousel();
            }

            function prevSlide() {
                if (currentSlide > 0) {
                    currentSlide--;
                    updateCarousel();
                }
            }

            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
            carousel.addEventListener('mouseenter', () => clearInterval(autoPlayTimer));
            carousel.addEventListener('mouseleave', startAutoPlay);
            carousel.addEventListener('touchstart', () => clearInterval(autoPlayTimer), { passive: true });
            carousel.addEventListener('touchend', startAutoPlay, { passive: true });

            window.addEventListener('resize', () => {
                const newItems = getItemsPerSlide();
                if (newItems !== itemsPerSlide) {
                    itemsPerSlide = newItems;
                    initCarousel();
                    updateCarousel();
                } else {
                    applySlideWidths();
                }
            });

            // Initialize
            initCarousel();
            function startAutoPlay() {
                clearInterval(autoPlayTimer);
                autoPlayTimer = setInterval(nextSlide, autoPlayDelay);
            }
            startAutoPlay();
        });

        // Target Fields Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('target-fields-carousel');
            if (!carousel) return;

            const track = document.getElementById('target-fields-track');
            const prevBtn = document.getElementById('target-fields-prev');
            const nextBtn = document.getElementById('target-fields-next');
            const dotsContainer = document.getElementById('target-fields-dots');
            const slides = track ? track.querySelectorAll('.target-field-slide') : [];

            if (!track || !prevBtn || !nextBtn || !dotsContainer || slides.length === 0) return;

            let itemsPerSlide = getItemsPerSlide();
            let totalSlides = Math.ceil(slides.length / itemsPerSlide);
            let currentSlide = 0;

            function getItemsPerSlide() {
                if (window.innerWidth < 768) return 1; // mobile
                return 4; // desktop/tablet default
            }

            function applySlideWidths() {
                const width = 100 / itemsPerSlide;
                slides.forEach((slide) => {
                    slide.style.width = `${width}%`;
                });
            }

            // Initialize carousel
            function initCarousel() {
                applySlideWidths();
                totalSlides = Math.ceil(slides.length / itemsPerSlide);
                if (currentSlide >= totalSlides) currentSlide = totalSlides - 1;
                if (currentSlide < 0) currentSlide = 0;

                // Generate pagination dots
                dotsContainer.innerHTML = '';
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.className =
                        `w-2 h-2 rounded-full transition-colors ${i === currentSlide ? 'bg-primary-foreground' : 'bg-primary-foreground/30 hover:bg-primary-foreground/50'}`;
                    dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }

                updateCarousel();
            }

            function updateCarousel() {
                // Calculate transform: move by 100% for each slide (4 items per slide)
                const translateX = -(currentSlide * 100);
                track.style.transform = `translateX(${translateX}%)`;

                // Update dots
                const dots = dotsContainer.querySelectorAll('button');
                dots.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.remove('bg-primary-foreground/30');
                        dot.classList.add('bg-primary-foreground');
                    } else {
                        dot.classList.remove('bg-primary-foreground');
                        dot.classList.add('bg-primary-foreground/30');
                    }
                });

                // Update button states
                prevBtn.disabled = currentSlide === 0;
                nextBtn.disabled = currentSlide === totalSlides - 1;
                prevBtn.classList.toggle('opacity-50', currentSlide === 0);
                prevBtn.classList.toggle('cursor-not-allowed', currentSlide === 0);
                nextBtn.classList.toggle('opacity-50', currentSlide === totalSlides - 1);
                nextBtn.classList.toggle('cursor-not-allowed', currentSlide === totalSlides - 1);
            }

            function goToSlide(slide) {
                if (slide < 0 || slide >= totalSlides) return;
                currentSlide = slide;
                updateCarousel();
            }

            function nextSlide() {
                if (currentSlide < totalSlides - 1) {
                    currentSlide++;
                    updateCarousel();
                }
            }

            function prevSlide() {
                if (currentSlide > 0) {
                    currentSlide--;
                    updateCarousel();
                }
            }

            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            // Initialize
            initCarousel();
        });
    </script>
@endsection
