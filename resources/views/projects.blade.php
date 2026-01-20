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
                                class="">@trans('projects.title')</span></h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center shrink-0 animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span class="">@trans('projects.subtitle')</span></p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <span class="text-muted-foreground">COMPACT</span><span
                            class="text-muted-foreground">&gt;</span><span class="text-primary">@trans('common.projects')</span>
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
                        <textPath href="#circlePath">• JOIN OUR TEAM • GROW WITH US • JOIN OUR TEAM • GROW WITH US
                        </textPath>
                    </text>
                    <circle cx="50" cy="50" r="20" fill="hsl(var(--card))" stroke="hsl(var(--border))"
                        stroke-width="1"></circle><text x="50" y="54" text-anchor="middle"
                        class="text-lg font-bold fill-foreground">C</text>
                </svg></div>
        </section>
        <section class="section-padding">
            <div class="container-custom">
                <div class="grid md:grid-cols-2 gap-8">
                    @forelse ($projects as $project)
                        @php
                            $delay = $loop->index * 100;
                            $imageUrl = $project->image;
                            $category = $project->category ?? null;
                        @endphp

                        <div class="group block rounded-2xl overflow-hidden bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                            style="animation-delay: {{ $delay }}ms;">
                            <div class="relative aspect-16/10 overflow-hidden">
                                <img src="{{ Storage::disk('public')->url($imageUrl) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                                <div
                                    class="absolute inset-0 bg-linear-to-t from-background/80 to-transparent pointer-events-none">
                                </div>
                                @if ($category)
                                    <span
                                        class="absolute top-4 left-4 px-3 py-1 text-xs font-medium bg-primary text-primary-foreground rounded-full">
                                        {{ $category }}
                                    </span>
                                @endif
                            </div>
                            <div class="p-6">
                                <a href="{{ route('projects.show', $project->id) }}">
                                    <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                        {{ $project->title }}</h3>
                                </a>
                                <p class="text-muted-foreground text-sm mb-4">
                                    {{ \Illuminate\Support\Str::limit($project->description, 220) }}
                                </p>
                                <a class="flex items-center gap-2 text-primary text-sm font-medium"
                                    href="{{ route('projects.show', $project->id) }}">
                                    <span>@trans('projects.view_project')</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-2 text-center text-muted-foreground py-12 border border-dashed border-border rounded-2xl">
                            {{ __('No projects available yet.') }}
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
