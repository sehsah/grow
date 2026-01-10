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
                                class="">Blog</span></span>
                        <h1
                            class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight animate-fade-in animation-delay-100">
                            <span class="">Insights &amp;</span><br><span class="text-primary">Articles</span></h1>
                        <p class="mt-6 text-lg text-muted-foreground max-w-xl animate-fade-in animation-delay-200"><span
                                class="">Discover the latest trends and insights in technology and business from our
                                experts</span></p>
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
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div class="relative rounded-2xl overflow-hidden group"><img
                            src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767360420954-jwbj1q.jpeg"
                            alt="Business Development" class="transition-transform duration-500 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent pointer-events-none">
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Business Development</h2>
                        <p class="text-muted-foreground mb-6">How to Build Measurable Growth and Outperform Competitors with
                            a Clear Roadmap</p>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-muted-foreground mb-6"><span
                                class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>January 2, 2026</span><span class="flex items-center gap-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>5 min read</span></div><a class="btn-primary inline-flex items-center gap-2"
                            href="/blog/cabdcc1c-4aa7-4ee0-ad8d-1851d87d64d6"><span class="">Read More</span><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container-custom">
                <h2 class="text-3xl md:text-4xl font-bold mb-12"><span class="">All Articles</span></h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <article class="group animate-fade-in" style="animation-delay: 0ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4"><img
                                    src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767359867700-fi12lf.jpg"
                                    alt="Digital Transformation"
                                    class="transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none">
                                </div>
                            </div><a href="/blog/06d50767-ade9-4a5d-b2eb-8d0accad6864">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">Digital
                                    Transformation</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">How to Build a Smarter Operation and
                                Achieve Measurable Growth</p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground"><span
                                    class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>January 2, 2026</span><span class="flex items-center gap-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>5 min read</span></div>
                        </div>
                    </article>
                    <article class="group animate-fade-in" style="animation-delay: 100ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4"><img
                                    src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767360764996-4yy3tf.jpeg"
                                    alt="An Integrated Digital Marketing Agency Serving Businesses"
                                    class="transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none">
                                </div>
                            </div><a href="/blog/abf02665-5b60-4342-9e5e-b2a7992d7383">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">An Integrated
                                    Digital Marketing Agency Serving Businesses</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">Compact offers fully integrated 360°
                                marketing services across a wide range of industries and business sectors.</p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground"><span
                                    class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>January 2, 2026</span><span class="flex items-center gap-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>5 min read</span></div>
                        </div>
                    </article>
                    <article class="group animate-fade-in" style="animation-delay: 200ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4"><img
                                    src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767364163367-fabass.jpeg"
                                    alt="Legal Consulting"
                                    class="transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none">
                                </div>
                            </div><a href="/blog/8f8f79db-76ee-4b18-8efc-5c7a7a2d4eb4">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">Legal
                                    Consulting</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">How to Protect Your Business, Reduce
                                Risk, and Sign Stronger Contracts with Confidence</p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground"><span
                                    class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>January 2, 2026</span><span class="flex items-center gap-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>5 min read</span></div>
                        </div>
                    </article>
                    <article class="group animate-fade-in" style="animation-delay: 300ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4"><img
                                    src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767363487484-cnpenv.jpeg"
                                    alt="Financial Consulting"
                                    class="transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none">
                                </div>
                            </div><a href="/blog/28259b4e-cc44-4136-93ef-32f5d04058fa">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">Financial
                                    Consulting</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">How to Improve Profitability,
                                Control Cash Flow, and Make Data-Driven Decisions</p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground"><span
                                    class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>January 2, 2026</span><span class="flex items-center gap-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>5 min read</span></div>
                        </div>
                    </article>
                    <article class="group animate-fade-in" style="animation-delay: 400ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4"><img
                                    src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767363232957-ug3crn.jpeg"
                                    alt="Governance Solutions"
                                    class="transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none">
                                </div>
                            </div><a href="/blog/0a90659f-bd2f-4587-80a6-489b10e4185d">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">Governance
                                    Solutions</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">How to Protect Your Business,
                                Improve Control, and Become Audit-Ready</p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground"><span
                                    class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>January 2, 2026</span><span class="flex items-center gap-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>5 min read</span></div>
                        </div>
                    </article>
                    <article class="group animate-fade-in" style="animation-delay: 500ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4"><img
                                    src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767362825602-j0rgv.jpeg"
                                    alt="Websites &amp; Mobile Apps Development "
                                    class="transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none">
                                </div>
                            </div><a href="/blog/57adbe9f-a889-4920-91f9-a342ad5ad4e3">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">Websites
                                    &amp; Mobile Apps Development </h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">Your Digital Appearance that tells
                                your story </p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground"><span
                                    class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>January 2, 2026</span><span class="flex items-center gap-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>5 min read</span></div>
                        </div>
                    </article>
                    <article class="group animate-fade-in" style="animation-delay: 600ms;">
                        <div class="block">
                            <div class="relative rounded-xl overflow-hidden mb-4"><img
                                    src="https://lqphghuvyiajrmjclnmx.supabase.co/storage/v1/object/public/blog-images/1767362629040-vfrba.jpeg"
                                    alt="Recruitment &amp; Training"
                                    class="transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent pointer-events-none">
                                </div>
                            </div><a href="/blog/53ba6bbe-a3bc-41b9-ace1-4654e14a7c06">
                                <h3 class="text-xl font-bold mb-2 transition-colors group-hover:text-primary">Recruitment
                                    &amp; Training</h3>
                            </a>
                            <p class="text-muted-foreground text-sm mb-4 line-clamp-2">How to Build a High-Performing Team
                                and Reduce Turnover Costs</p>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground"><span
                                    class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>January 2, 2026</span><span class="flex items-center gap-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>5 min read</span></div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="section-padding bg-dark-card">
            <div class="container-custom">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4"><span class="">Subscribe to Our
                            Newsletter</span></h2>
                    <p class="text-muted-foreground mb-8"><span class="">Get the latest articles and insights
                            delivered directly to your inbox</span></p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center"><input type="email"
                            placeholder="Enter your email"
                            class="px-6 py-3 rounded-full bg-background border border-border focus:border-primary focus:outline-none text-foreground min-w-[300px]"><button
                            class="btn-primary"><span class="">Subscribe</span></button></div>
                </div>
            </div>
        </section>
    </main>
@endsection
