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
        </section>

        <section class="section-padding bg-dark-card">
            <div class="container-custom">

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-8">
                        @foreach ($projects->filter(fn($p, $i) => $i % 2 === 0)->take(2) as $index => $project)
                            <div class="group animate-fade-in" style="animation-delay: {{ ($index + 2) * 100 }}ms;">
                                <div
                                    class="relative rounded-2xl overflow-hidden bg-gradient-to-br from-primary/30 to-primary/10 p-4 transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl hover:shadow-primary/20">
                                    <div class="aspect-[4/3] rounded-xl overflow-hidden bg-muted">
                                        <img src="{{ Storage::disk('public')->url($project->image) }}"
                                            alt="{{ $project->title }}"
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
                                    {{ $project->description ?? ($project->short_description ?? 'Project description') }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="space-y-8 md:mt-16">
                        @foreach ($projects->filter(fn($p, $i) => $i % 2 === 1)->take(2) as $index => $project)
                            <div class="group animate-fade-in" style="animation-delay: {{ ($index + 3) * 100 }}ms;">
                                <div
                                    class="relative rounded-2xl overflow-hidden bg-gradient-to-br from-gray-500/30 to-gray-600/30 p-4 transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl hover:shadow-primary/20">
                                    <div class="aspect-[4/3] rounded-xl overflow-hidden bg-muted">
                                        <img src="{{ Storage::disk('public')->url($project->image) }}"
                                            alt="{{ $project->title }}"
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
                                    {{ $project->description ?? ($project->short_description ?? 'Project description') }}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>        
    </main>
@endsection
