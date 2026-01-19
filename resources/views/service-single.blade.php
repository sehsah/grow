@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="absolute top-20 left-10 w-20 h-20 border border-border/30 rotate-45"></div>
            <div class="absolute top-32 left-16 w-3 h-3 bg-primary rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in"><span class="">{{ $service->title }}</span></h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center shrink-0 animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span class="">{{ $service->short_description }}</span></p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <a class="text-muted-foreground hover:text-primary transition-colors"
                            href="/services">@trans('common.services')</a><span class="text-muted-foreground">&gt;</span><span
                            class="text-primary">{{ $service->title }}</span></div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container-custom">
                <div class="text-center mb-16 animate-fade-in"><span
                        class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6">{{ setting('services.badge') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold">@trans('common.what_we_offer')</h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($service->serviceItems as $item)
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 0ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <img src="{{ Storage::disk('public')->url($item->icon) }}" alt="{{ $item->title }}" class="w-8 h-8">
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">{{ $item->title }}</h3>
                        <p class="text-muted-foreground text-sm mb-4">{{ $item->description }}</p>
                        <ul class="space-y-2">
                            @php
                            $items = explode(',', $item->items['en']);
                            @endphp
                            @foreach ($items as $item2)
                            <li class="flex items-start gap-2 text-muted-foreground text-xs">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            <span>{{ $item2 }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-16 animate-fade-in">
                    <a class="inline-flex items-center gap-2 bg-primary text-primary-foreground px-8 py-4 rounded-full font-semibold hover:bg-primary/90 transition-colors"
                        href="/contact">
                        @trans('common.lets_talk')
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
