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
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div class="animate-fade-in"><span
                            class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6">About Us</span>
                        <h2 class="text-4xl md:text-5xl font-bold mb-6"><span class="">Our Services</span><br><span
                                class="text-primary">Comprehensive business solutions tailored to your needs</span></h2>
                        <p class="text-muted-foreground leading-relaxed"><span class="">about.story</span></p>
                    </div>
                    <div class="relative animate-fade-in animation-delay-200">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden"><img src="/assets/team-developer-VEpenOtO.jpg"
                                alt="Our Team"
                                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
                        </div>
                    </div>
                </div>
                <div class="space-y-0"><a
                        class="group grid md:grid-cols-[1fr_1fr_1.5fr] gap-6 md:gap-12 items-center py-8 border-t border-border first:border-t-0 animate-fade-in hover:bg-secondary/30 transition-all duration-300 px-4 -mx-4 rounded-xl cursor-pointer"
                        href="/services/organizational-development" style="animation-delay: 300ms;">
                        <div>
                            <h3
                                class="text-2xl md:text-3xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                <span class="">Organizational Development</span></h3>
                            <p class="text-primary text-sm"><span class="">Business Consulting</span></p>
                        </div>
                        <div class="hidden md:flex items-center justify-center">
                            <div
                                class="w-16 h-16 rounded-full bg-secondary/50 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-building2 w-8 h-8 text-primary">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                    <path d="M10 6h4"></path>
                                    <path d="M10 10h4"></path>
                                    <path d="M10 14h4"></path>
                                    <path d="M10 18h4"></path>
                                </svg></div>
                        </div>
                        <div class="flex items-center gap-4">
                            <p class="text-muted-foreground text-sm flex-1"><span class="">Transform your organization
                                    with strategic planning and process optimization.</span></p><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-5 h-5 text-muted-foreground group-hover:text-primary transition-all duration-300 group-hover:translate-x-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                    </a><a
                        class="group grid md:grid-cols-[1fr_1fr_1.5fr] gap-6 md:gap-12 items-center py-8 border-t border-border first:border-t-0 animate-fade-in hover:bg-secondary/30 transition-all duration-300 px-4 -mx-4 rounded-xl cursor-pointer"
                        href="/services/crm" style="animation-delay: 400ms;">
                        <div>
                            <h3
                                class="text-2xl md:text-3xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                <span class="">CRM Solutions</span></h3>
                            <p class="text-primary text-sm"><span class="">Sales</span></p>
                        </div>
                        <div class="hidden md:flex items-center justify-center">
                            <div
                                class="w-16 h-16 rounded-full bg-secondary/50 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg></div>
                        </div>
                        <div class="flex items-center gap-4">
                            <p class="text-muted-foreground text-sm flex-1"><span class="">Implement and optimize
                                    customer relationship management systems.</span></p><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-5 h-5 text-muted-foreground group-hover:text-primary transition-all duration-300 group-hover:translate-x-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                    </a><a
                        class="group grid md:grid-cols-[1fr_1fr_1.5fr] gap-6 md:gap-12 items-center py-8 border-t border-border first:border-t-0 animate-fade-in hover:bg-secondary/30 transition-all duration-300 px-4 -mx-4 rounded-xl cursor-pointer"
                        href="/services/outsourcing" style="animation-delay: 500ms;">
                        <div>
                            <h3
                                class="text-2xl md:text-3xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                <span class="">Outsourcing Services</span></h3>
                            <p class="text-primary text-sm"><span class="">Talent Acquisition</span></p>
                        </div>
                        <div class="hidden md:flex items-center justify-center">
                            <div
                                class="w-16 h-16 rounded-full bg-secondary/50 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-cog w-8 h-8 text-primary">
                                    <path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"></path>
                                    <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                                    <path d="M12 2v2"></path>
                                    <path d="M12 22v-2"></path>
                                    <path d="m17 20.66-1-1.73"></path>
                                    <path d="M11 10.27 7 3.34"></path>
                                    <path d="m20.66 17-1.73-1"></path>
                                    <path d="m3.34 7 1.73 1"></path>
                                    <path d="M14 12h8"></path>
                                    <path d="M2 12h2"></path>
                                    <path d="m20.66 7-1.73 1"></path>
                                    <path d="m3.34 17 1.73-1"></path>
                                    <path d="m17 3.34-1 1.73"></path>
                                    <path d="m11 13.73-4 6.93"></path>
                                </svg></div>
                        </div>
                        <div class="flex items-center gap-4">
                            <p class="text-muted-foreground text-sm flex-1"><span class="">Access skilled
                                    professionals and resources to support your operations.</span></p><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-5 h-5 text-muted-foreground group-hover:text-primary transition-all duration-300 group-hover:translate-x-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                    </a><a
                        class="group grid md:grid-cols-[1fr_1fr_1.5fr] gap-6 md:gap-12 items-center py-8 border-t border-border first:border-t-0 animate-fade-in hover:bg-secondary/30 transition-all duration-300 px-4 -mx-4 rounded-xl cursor-pointer"
                        href="/services/it-development" style="animation-delay: 600ms;">
                        <div>
                            <h3
                                class="text-2xl md:text-3xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                                <span class="">IT Development</span></h3>
                            <p class="text-primary text-sm"><span class="">Web Development</span></p>
                        </div>
                        <div class="hidden md:flex items-center justify-center">
                            <div
                                class="w-16 h-16 rounded-full bg-secondary/50 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-monitor w-8 h-8 text-primary">
                                    <rect width="20" height="14" x="2" y="3" rx="2"></rect>
                                    <line x1="8" x2="16" y1="21" y2="21"></line>
                                    <line x1="12" x2="12" y1="17" y2="21"></line>
                                </svg></div>
                        </div>
                        <div class="flex items-center gap-4">
                            <p class="text-muted-foreground text-sm flex-1"><span class="">Custom software
                                    development and digital transformation solutions.</span></p><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-5 h-5 text-muted-foreground group-hover:text-primary transition-all duration-300 group-hover:translate-x-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                    </a></div>
            </div>
        </section>
    </main>
@endsection
