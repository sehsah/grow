@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="absolute top-20 left-10 w-20 h-20 border border-border/30 rotate-45"></div>
            <div class="absolute top-32 left-16 w-3 h-3 bg-primary rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in"><span class="">@trans('about.title')</span>
                        </h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center shrink-0 animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span class="">{{ $settings['intro_text'] ?? 'COMPACT delivers integrated business solutions across: Organizational Development, Business Development, CRM Solutions, Digital Transformation & Automation, Dashboards & Reporting, System Integration, Websites & Mobile Apps, and 360° Digital Marketing—plus Governance Solutions, Recruitment & Training, Financial Consulting, and Legal Consulting' }}</span></p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <span class="text-muted-foreground">COMPACT</span><span
                            class="text-muted-foreground">&gt;</span><span class="text-primary">@trans('about.title')</span></div>
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
                            class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6">@trans('about.title')</span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6"><span class="">@trans('about.partner_title')</span></h2>
                        <p class="text-muted-foreground leading-relaxed mb-4"><span class="">{{ $settings['intro_text'] ?? 'COMPACT delivers integrated business solutions across: Organizational Development, Business Development, CRM Solutions, Digital Transformation & Automation, Dashboards & Reporting, System Integration, Websites & Mobile Apps, and 360° Digital Marketing—plus Governance Solutions, Recruitment & Training, Financial Consulting, and Legal Consulting' }}</span></p>
                        <p class="text-muted-foreground leading-relaxed mb-4"><span class="">{{ $settings['description_text'] ?? 'Backed by over a decade of experience, we help organizations achieve measurable goals and transform operations for sustainable growth.' }}</span></p>
                        <p class="text-muted-foreground leading-relaxed"><span class="">{{ $settings['team_expertise'] ?? 'Our team blends deep industry expertise with innovative, results-driven approaches on every project.' }}</span></p>
                    </div>
                    <div class="relative animate-fade-in animation-delay-200">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden"><img src="{{ asset($settings['team_image'] ?? '/assets/team-marketer-DnNglUX8.jpg') }}"
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
                <div class="text-center mb-16 animate-fade-in"><span
                        class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6"><span
                            class="">@trans('about.why_compact')</span></span></div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 0ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['clients_count'] ?? '150+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.clients')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">@trans('about.clients_desc')</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 100ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['projects_count'] ?? '200+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.projects')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">@trans('about.projects_desc')</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 200ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['experts_count'] ?? '50+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.experts')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">@trans('about.experts_desc')</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 300ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['years_experience'] ?? '10+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">@trans('about.years')</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">@trans('about.years_desc')</span></p>
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
                            </svg></div>
                        <h3 class="text-2xl font-bold mb-4"><span class="">@trans('about.mission_title')</span></h3>
                        <p class="text-muted-foreground leading-relaxed"><span class="">{{ $settings['mission_text'] ?? 'To empower organizations with innovative, data-driven solutions that accelerate sustainable growth and strengthen operational excellence' }}</span></p>
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
                            </svg></div>
                        <h3 class="text-2xl font-bold mb-4"><span class="">@trans('about.vision_title')</span></h3>
                        <p class="text-muted-foreground leading-relaxed"><span class="">{{ $settings['vision_text'] ?? 'To be the Middle East\'s most trusted business consulting partner, delivering transformative solutions and consistently exceptional results.' }}</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card border-y border-border">
            <div class="container-custom">
                <div class="text-center mb-12 animate-fade-in"><span
                        class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6"><span
                            class="">@trans('about.values_title')</span></span>
                    <p class="text-muted-foreground max-w-2xl mx-auto"><span class="">{{ $settings['values_text'] ?? 'We are guided by integrity, innovation, collaboration, and a commitment to excellence in everything we do.' }}</span></p>
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
                            </svg></div><span class="text-sm font-medium"><span class="">@trans('about.value_passion')</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">@trans('about.value_integrity')</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">@trans('about.value_teamwork')</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">@trans('about.value_balance')</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">@trans('about.value_innovation')</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 250ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-lock w-7 h-7 text-primary">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg></div><span class="text-sm font-medium"><span class="">@trans('about.value_security')</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">@trans('about.value_creativity')</span></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding relative overflow-hidden">
            <div class="absolute left-0 top-1/4 w-64 h-64 border border-border/20 rounded-full"></div>
            <div class="absolute right-0 bottom-1/4 w-48 h-48 border border-border/20 rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="max-w-3xl mx-auto text-center animate-fade-in">
                    <div class="flex justify-center gap-1 mb-8"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-star w-5 h-5 fill-primary text-primary">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-star w-5 h-5 fill-primary text-primary">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-star w-5 h-5 fill-primary text-primary">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-star w-5 h-5 fill-primary text-primary">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-star w-5 h-5 fill-primary text-primary">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg></div>
                    <blockquote class="text-xl md:text-2xl italic text-muted-foreground mb-8 leading-relaxed">"{{ $settings['testimonial_text'] ?? 'COMPACT completely transformed our business with their innovative solutions! Their exceptional expertise went beyond expectations, creating a visually stunning and user-friendly experience. The team\'s attention to detail and commitment is unmatched!' }}"</blockquote>
                    <div class="flex items-center justify-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center"><span
                                class="text-lg font-bold text-primary">{{ substr($settings['testimonial_author'] ?? 'Ahmed Hassan', 0, 1) }}</span></div>
                        <div class="text-left">
                            <p class="font-bold">{{ $settings['testimonial_author'] ?? 'Ahmed Hassan' }}</p>
                            <p class="text-sm text-muted-foreground">{{ $settings['testimonial_author_position'] ?? 'CEO & Founder' }}</p>
                        </div>
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
                <div class="relative" id="target-fields-carousel">
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
                <div class="relative" id="partners-carousel">
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
