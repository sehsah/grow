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
                    <div class="group block rounded-2xl overflow-hidden bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 0ms;">
                        <div class="relative aspect-[16/10] overflow-hidden"><img
                                src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369371739-yfw62o.jpg"
                                alt="Visual Identity Design for “Latoga” Fashion Brand"
                                class="grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent pointer-events-none">
                            </div><span
                                class="absolute top-4 left-4 px-3 py-1 text-xs font-medium bg-primary text-primary-foreground rounded-full">Visual
                                Identity Design </span>
                        </div>
                        <div class="p-6"><a href="/projects/955a075e-8684-4ec9-87e3-0931cdf2f5b5">
                                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                    Visual Identity Design for “Latoga” Fashion Brand</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4">COMPACT developed a complete visual identity for
                                Latoga, a fashion brand, to create a modern, consistent, and recognizable brand presence.
                                The project covered logo development, color and typography systems, visual elements, and
                                brand applications across digital and marketing touchpoints.</p><a
                                class="flex items-center gap-2 text-primary text-sm font-medium"
                                href="/projects/955a075e-8684-4ec9-87e3-0931cdf2f5b5"><span><span
                                        class="">@trans('projects.view_project')</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="group block rounded-2xl overflow-hidden bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 100ms;">
                        <div class="relative aspect-[16/10] overflow-hidden"><img
                                src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369194317-uge4kq.png"
                                alt="Digital Marketing for Matrix (Masfoofat Al-Taqnia)"
                                class="grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent pointer-events-none">
                            </div><span
                                class="absolute top-4 left-4 px-3 py-1 text-xs font-medium bg-primary text-primary-foreground rounded-full">Digital
                                Marketing</span>
                        </div>
                        <div class="p-6"><a href="/projects/6f5ad5ae-b5a8-4559-b941-aae8d4eb50ec">
                                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                    Digital Marketing for Matrix (Masfoofat Al-Taqnia)</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4">COMPACT delivered integrated digital marketing for
                                Matrix (Masfoofat Al-Taqnia) to increase brand visibility, generate qualified leads, and
                                improve performance through content strategy, paid campaigns, and analytics-driven
                                optimization.</p><a class="flex items-center gap-2 text-primary text-sm font-medium"
                                href="/projects/6f5ad5ae-b5a8-4559-b941-aae8d4eb50ec"><span><span
                                        class="">@trans('projects.view_project')</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="group block rounded-2xl overflow-hidden bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 200ms;">
                        <div class="relative aspect-[16/10] overflow-hidden"><img
                                src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767369631707-8gr9oq.webp"
                                alt="Website Development for Rento Co for vehicles rental service  "
                                class="grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent pointer-events-none">
                            </div><span
                                class="absolute top-4 left-4 px-3 py-1 text-xs font-medium bg-primary text-primary-foreground rounded-full">Web
                                Development</span>
                        </div>
                        <div class="p-6"><a href="/projects/4f4bbdb8-4328-498e-aa13-77d121ec9aea">
                                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                    Website Development for Rento Co for vehicles rental service </h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4">Rento Car Rental Website – UI/UX Design &amp;
                                Development (Moken)

                                Rento by Moken: Car Rental Website Development</p><a
                                class="flex items-center gap-2 text-primary text-sm font-medium"
                                href="/projects/4f4bbdb8-4328-498e-aa13-77d121ec9aea"><span><span
                                        class="">@trans('projects.view_project')</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="group block rounded-2xl overflow-hidden bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 300ms;">
                        <div class="relative aspect-[16/10] overflow-hidden"><img
                                src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/project-images/1767368479210-m929sc.png"
                                alt="Digital Marketing Management for yallagoom website "
                                class="grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent pointer-events-none">
                            </div><span
                                class="absolute top-4 left-4 px-3 py-1 text-xs font-medium bg-primary text-primary-foreground rounded-full">Digital
                                Marketing </span>
                        </div>
                        <div class="p-6"><a href="/projects/07348e75-2bbc-4938-afc0-33f7e2dcf0de">
                                <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                    Digital Marketing Management for yallagoom website </h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4">Digital Marketing Management for yallagoom
                                website </p><a class="flex items-center gap-2 text-primary text-sm font-medium"
                                href="/projects/07348e75-2bbc-4938-afc0-33f7e2dcf0de"><span><span
                                        class="">@trans('projects.view_project')</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
