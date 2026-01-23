@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="absolute top-20 left-10 w-20 h-20 border border-border/30 rotate-45"></div>
            <div class="absolute top-32 left-16 w-3 h-3 bg-primary rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in"><span
                                class="">@trans('about.title')</span>
                        </h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center shrink-0 animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span
                                    class="">@trans('about.subtitle')</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <span class="text-muted-foreground">COMPACT</span><span
                            class="text-muted-foreground">&gt;</span><span class="text-primary">@trans('about.title')</span>
                    </div>
                </div>
            </div>
            <div class="absolute top-20 right-10 md:right-20 w-24 h-24 md:w-32 md:h-32 animate-rotate-slow"><svg
                    viewBox="0 0 100 100" class="w-full h-full">
                    <defs>
                        <path id="circlePath" d="M 50,50 m -35,0 a 35,35 0 1,1 70,0 a 35,35 0 1,1 -70,0"></path>
                    </defs>
                    <circle cx="50" cy="50" r="45" fill="none" stroke="hsl(var(--border))"
                        stroke-width="1"></circle><text class="text-[8px] uppercase tracking-widest fill-muted-foreground">
                        <textPath href="#circlePath">@trans('about.join_team_circle')
                        </textPath>
                    </text>
                    <circle cx="50" cy="50" r="20" fill="hsl(var(--card))" stroke="hsl(var(--border))"
                        stroke-width="1"></circle><text x="50" y="54" text-anchor="middle"
                        class="text-lg font-bold fill-foreground">C</text>
                </svg></div>
        </section>

        <section class="section-padding">
            <div class="container-custom">
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <div class="animate-fade-in"><span
                            class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6">{{ setting('about.badge') }}</span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6"><span class="">{{ setting('about.title') }}</span></h2>
                        <p class="text-muted-foreground leading-relaxed mb-4"><span
                                class="">{{ setting('about.description') }}</span>
                        </p>
                    </div>
                    <div class="relative animate-fade-in animation-delay-200">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden"><img
                                src="{{ Storage::disk('public')->url(setting('about.image')) }}"
                                alt="Our Team"
                                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
                        </div>
                        <div class="absolute bottom-4 left-4 bg-primary px-6 py-4 rounded-lg"><span
                                class="text-3xl font-bold text-primary-foreground">{{ $settings['years_experience'] ?? '10+' }}</span>
                            <p class="text-sm text-primary-foreground/80">@trans('about.years_experience')</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding bg-card border-y border-border">
            <div class="container-custom">
                <div class="text-center mb-16 animate-fade-in">
                    <span class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6"><span
                            class="">@trans('about.why_compact')</span></span>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 0ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span
                                        class="">{{ setting('stats.clients_count') }}</span></span>
                            </div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.clients')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span
                                class="">@trans('about.clients_desc')</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 100ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span
                                        class="">{{ setting('stats.projects_count') }}</span></span>
                            </div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.projects')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span
                                class="">@trans('about.projects_desc')</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 200ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span
                                        class="">{{ setting('stats.experts_count') }}</span></span>
                            </div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.experts')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span
                                class="">@trans('about.experts_desc')</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 300ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span
                                        class="">{{ setting('stats.years_experience') }}</span></span>
                            </div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.years')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span
                                class="">@trans('about.years_desc')</span></p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container-custom">
                <div class="grid md:grid-cols-2 gap-8">
                    <div
                        class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-target w-7 h-7 text-primary">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4"><span
                                class="">{{ setting('site.mission_title') }}</span></h3>
                        <p class="text-muted-foreground leading-relaxed"><span
                                class="">{{ setting('site.mission') }}</span></p>
                    </div>
                    <div
                        class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in animation-delay-200">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-eye w-7 h-7 text-primary">
                                <path
                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                </path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4"><span
                                class="">{{ setting('site.vision_title') }}</span></h3>
                        <p class="text-muted-foreground leading-relaxed"><span
                                class="">{{ setting('site.vision') }}</span></p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding bg-card border-y border-border">
            <div class="container-custom">
                <div class="text-center mb-12 animate-fade-in"><span
                        class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6"><span
                            class="">@trans('about.values_title')</span></span>
                    <p class="text-muted-foreground max-w-2xl mx-auto"><span
                            class="">{{ setting('about.values_text') }}</span></p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6">
                    <div class="group text-center animate-fade-in" style="animation-delay: 0ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-heart w-7 h-7 text-primary">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                </path>
                            </svg>
                        </div><span class="text-sm font-medium"><span class="">@trans('about.value_passion')</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 50ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-shield w-7 h-7 text-primary">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                            </svg>
                        </div><span class="text-sm font-medium"><span class="">@trans('about.value_integrity')</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 100ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-primary">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div><span class="text-sm font-medium"><span class="">@trans('about.value_teamwork')</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 150ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-scale w-7 h-7 text-primary">
                                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="M7 21h10"></path>
                                <path d="M12 3v18"></path>
                                <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                            </svg>
                        </div><span class="text-sm font-medium"><span class="">@trans('about.value_balance')</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 200ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-sparkles w-7 h-7 text-primary">
                                <path
                                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                </path>
                                <path d="M20 3v4"></path>
                                <path d="M22 5h-4"></path>
                                <path d="M4 17v2"></path>
                                <path d="M5 18H3"></path>
                            </svg>
                        </div><span class="text-sm font-medium"><span class="">@trans('about.value_innovation')</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 250ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-lock w-7 h-7 text-primary">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div><span class="text-sm font-medium"><span class="">@trans('about.value_security')</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 300ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-lightbulb w-7 h-7 text-primary">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg>
                        </div><span class="text-sm font-medium"><span class="">@trans('about.value_creativity')</span></span>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding relative overflow-hidden">
            <div class="absolute left-0 top-1/4 w-64 h-64 border border-border/20 rounded-full"></div>
            <div class="absolute right-0 bottom-1/4 w-48 h-48 border border-border/20 rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="relative" id="testimonials-carousel" dir="ltr">
                    <button id="testimonials-prev"
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full border-2 border-border/60 flex items-center justify-center text-foreground hover:bg-muted transition-colors"
                        aria-label="Previous testimonial">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-left">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </button>
                    <button id="testimonials-next"
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full border-2 border-border/60 flex items-center justify-center text-foreground hover:bg-muted transition-colors"
                        aria-label="Next testimonial">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                    <div class="overflow-hidden mx-12" data-viewport>
                        <div id="testimonials-track" class="flex transition-transform duration-500 ease-in-out">
                            @foreach ($testimonials as $testimonial)
                            <div class="flex-shrink-0 px-4 testimonials-slide w-full">
                                <div class="max-w-3xl mx-auto text-center animate-fade-in">
                                    <div class="flex justify-center gap-1 mb-8">
                                        @for ($i = 0; $i < 5; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-star w-5 h-5 fill-primary text-primary">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </div>
                                    <blockquote class="text-xl md:text-2xl italic text-muted-foreground mb-8 leading-relaxed">
                                        "{{ $testimonial->content }}"
                                    </blockquote>
                                    <div class="flex items-center justify-center gap-4" @if(app()->getLocale() == 'ar') style="direction: rtl;" @endif>
                                        <div class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center">
                                            @php
                                                $name = $testimonial->author;
                                                $initials = collect(explode(' ', $name))
                                                    ->filter(fn ($part) => trim($part) !== '')
                                                    ->take(2)
                                                    ->map(fn ($part) => mb_substr($part, 0, 1))
                                                    ->implode('');
                                            @endphp
                                            <span class="text-lg font-bold text-primary">{{ strtoupper($initials) }}</span>
                                        </div>
                                        <div style="text-align: start;">
                                            <p class="font-bold">{{ $testimonial->author }}</p>
                                            <p class="text-sm text-muted-foreground">
                                                {{ $testimonial->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="testimonials-dots" class="flex justify-center gap-2 mt-6">
                        {{-- Dots generated by JS --}}
                    </div>
                </div>
            </div>
        </section>

        <script>
        (() => {
            const init = () => {
                const carousel = document.getElementById('testimonials-carousel');
                if (!carousel) return;

                const track = carousel.querySelector('#testimonials-track');
                const slides = Array.from(track?.children || []);
                const prev = carousel.querySelector('#testimonials-prev');
                const next = carousel.querySelector('#testimonials-next');
                const dotsContainer = carousel.querySelector('#testimonials-dots');
                const viewport = carousel.querySelector('[data-viewport]');

                if (!track || slides.length === 0 || !viewport || !dotsContainer) return;

                let index = 0;
                let width = viewport.getBoundingClientRect().width || viewport.clientWidth;
                let timer;

                const setWidths = () => {
                    width = viewport.getBoundingClientRect().width || viewport.clientWidth;
                    slides.forEach(slide => {
                        slide.style.width = `${width}px`;
                        slide.style.flex = '0 0 auto';
                    });
                    track.style.width = `${width * slides.length}px`;
                    goTo(index, false);
                };

                const setActiveDot = (i) => {
                    dotsContainer.querySelectorAll('button').forEach((dot, dotIdx) => {
                        dot.classList.toggle('bg-primary', dotIdx === i);
                        dot.classList.toggle('bg-border', dotIdx !== i);
                    });
                };

                const goTo = (i, animate = true) => {
                    index = (i + slides.length) % slides.length;
                    if (!animate) track.style.transitionDuration = '0ms';
                    track.style.transform = `translateX(-${index * width}px)`;
                    requestAnimationFrame(() => track.style.transitionDuration = '');
                    setActiveDot(index);
                };

                const nextSlide = () => goTo(index + 1);
                const prevSlide = () => goTo(index - 1);

                dotsContainer.innerHTML = '';
                slides.forEach((_, i) => {
                    const dot = document.createElement('button');
                    dot.className = 'w-2.5 h-2.5 rounded-full bg-border transition-colors';
                    dot.setAttribute('aria-label', `Go to testimonial ${i + 1}`);
                    dot.addEventListener('click', () => {
                        stopAuto();
                        goTo(i);
                        startAuto();
                    });
                    dotsContainer.appendChild(dot);
                });

                const startAuto = () => {
                    timer = setInterval(nextSlide, 6000);
                };
                const stopAuto = () => {
                    clearInterval(timer);
                };

                next?.addEventListener('click', () => { stopAuto(); nextSlide(); startAuto(); });
                prev?.addEventListener('click', () => { stopAuto(); prevSlide(); startAuto(); });
                window.addEventListener('resize', setWidths);
                carousel.addEventListener('pointerenter', stopAuto);
                carousel.addEventListener('pointerleave', startAuto);

                setWidths();
                setActiveDot(0);
                startAuto();
            };

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', init);
            } else {
                init();
            }
        })();
        </script>

        <script>
        // Partners carousel (same logic as home, ensured for Arabic too)
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('partners-carousel');
            if (!carousel) return;

            const track = document.getElementById('partners-track');
            const prevBtn = document.getElementById('partners-prev');
            const nextBtn = document.getElementById('partners-next');
            const dotsContainer = document.getElementById('partners-dots');
            const slides = track ? track.querySelectorAll('.partners-slide') : [];

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

            function initCarousel() {
                applySlideWidths();
                totalSlides = Math.ceil(slides.length / itemsPerSlide);
                currentSlide = Math.min(currentSlide, totalSlides - 1);

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
                const translateX = -(currentSlide * 100);
                track.style.transform = `translateX(${translateX}%)`;

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

            initCarousel();
            function startAutoPlay() {
                clearInterval(autoPlayTimer);
                autoPlayTimer = setInterval(nextSlide, autoPlayDelay);
            }
            startAutoPlay();
        });

        // Target fields carousel
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
                if (window.innerWidth < 768) return 1;
                return 4;
            }

            function applySlideWidths() {
                const width = 100 / itemsPerSlide;
                slides.forEach((slide) => {
                    slide.style.width = `${width}%`;
                });
            }

            function initCarousel() {
                applySlideWidths();
                totalSlides = Math.ceil(slides.length / itemsPerSlide);
                currentSlide = Math.min(currentSlide, totalSlides - 1);

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
                const translateX = -(currentSlide * 100);
                track.style.transform = `translateX(${translateX}%)`;

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

            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            initCarousel();
        });
        </script>


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
                                <div class="flex-shrink-0 px-2 partners-slide" style="width: 16.6667%;">
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
    </main>
@endsection
