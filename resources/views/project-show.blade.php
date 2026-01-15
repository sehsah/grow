@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="container-custom relative z-10">
                <a
                    class="inline-flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors mb-8"
                    href="/projects">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left w-4 h-4">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>@trans('projects.back_to_projects')
                </a>
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-fade-in"><span
                            class="inline-block px-4 py-1.5 text-sm bg-primary text-primary-foreground rounded-full mb-6">
                            {{ $project->category }}
                        </span>
                        <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $project->title }}
                        </h1>
                        <p class="text-xl text-muted-foreground mb-8">
                            {!! $project->description !!}
                        </p>
                        <div class="flex flex-wrap gap-6"></div>
                    </div>
                    <div class="animate-fade-in animation-delay-200">
                        <div class="aspect-video rounded-2xl overflow-hidden"><img
                                src="{{ $project->image}}"
                                alt="{{ $project->title }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container-custom">
                <div class="prose prose-lg prose-invert max-w-none">
                    {!! $project->description !!}
                </div>
            </div>
        </section>
        @include('partials.contact-section')
    </main>
@endsection
