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
                                class="">@trans('services.title')</span></h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span class="">@trans('services.subtitle')</span></p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <span class="text-muted-foreground">COMPACT</span><span
                            class="text-muted-foreground">&gt;</span><span class="text-primary">@trans('common.services')</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container-custom">
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div class="animate-fade-in">
                        <span class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6">{{ setting('services.badge') }}</span>
                        <h2 class="text-4xl md:text-5xl font-bold mb-6"><span class="">{{ setting('services.title') }}</span><br>
                            <span class="text-primary">{{ setting('services.subtitle') }}</span>
                        </h2>
                    </div>
                    <div class="relative animate-fade-in animation-delay-200">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden"><img src="{{ Storage::disk('public')->url(setting('services.image')) }}"
                                alt="{{ setting('services.title') }}"
                                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
                        </div>
                    </div>
                </div>
                <div class="space-y-0">
                    @forelse ($services as $service)
                        @php
                            $delay = 300 + ($loop->index * 100);
                            $imageUrl = $service->image;
                            $category = $service->category ?? null;
                            $description = $service->short_description ?? $service->description;
                        @endphp

                        <a class="group grid md:grid-cols-[1fr_1fr_1.5fr] gap-6 md:gap-12 items-center py-8 border-t border-border first:border-t-0 animate-fade-in hover:bg-secondary/30 transition-all duration-300 px-4 -mx-4 rounded-xl"
                            href="{{ route('services.show', $service->slug) }}" style="animation-delay: {{ $delay }}ms;">
                            <div>
                                <h3
                                    class="text-2xl md:text-3xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                    {{ $service->title }}</h3>
                                @if ($category)
                                    <p class="text-primary text-sm">{{ $category }}</p>
                                @endif
                            </div>

                            <div class="hidden md:flex items-center justify-center">
                                <div
                                    class="w-16 h-16 rounded-full bg-secondary/50 flex items-center justify-center overflow-hidden group-hover:bg-primary/20 transition-colors duration-300">
                                    <img src="{{ Storage::disk('public')->url($service->icon) }}" alt="{{ $service->title }}" class="">
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <p class="text-muted-foreground text-sm flex-1">
                                    {{ \Illuminate\Support\Str::limit($description, 160) }}</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-5 h-5 text-muted-foreground group-hover:text-primary transition-all duration-300 group-hover:translate-x-2">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                    @empty
                        <div class="text-center text-muted-foreground py-12 border-t border-border">
                            {{ __('No services available yet.') }}
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
