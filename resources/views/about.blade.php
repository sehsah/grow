@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="absolute top-20 left-10 w-20 h-20 border border-border/30 rotate-45"></div>
            <div class="absolute top-32 left-16 w-3 h-3 bg-primary rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in"><span class="">About Us</span>
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
                            class="text-muted-foreground">&gt;</span><span class="text-primary">About Us</span></div>
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
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <div class="animate-fade-in"><span
                            class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6">About Us</span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6"><span class="">Your Partner in Business
                                Excellence</span></h2>
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
                            <p class="text-sm text-primary-foreground/80">Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card border-y border-border">
            <div class="container-custom">
                <div class="text-center mb-16 animate-fade-in"><span
                        class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6"><span
                            class="">Why COMPACT</span></span></div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 0ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['clients_count'] ?? '150+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">Clients</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">Trusted by leading
                                organizations</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 100ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['projects_count'] ?? '200+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">Projects</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">Successfully
                                delivered</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 200ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['experts_count'] ?? '50+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">Experts</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">Dedicated
                                professionals</span></p>
                    </div>
                    <div class="group p-6 rounded-2xl bg-secondary/30 border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 300ms;">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                                <span class="text-2xl font-bold text-primary"><span class="">{{ $settings['years_experience'] ?? '10+' }}</span></span></div>
                            <h3 class="text-lg font-bold"><span class="">Years</span></h3>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed"><span class="">Industry
                                experience</span></p>
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
                        <h3 class="text-2xl font-bold mb-4"><span class="">Our Mission</span></h3>
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
                        <h3 class="text-2xl font-bold mb-4"><span class="">Our Vision</span></h3>
                        <p class="text-muted-foreground leading-relaxed"><span class="">{{ $settings['vision_text'] ?? 'To be the Middle East\'s most trusted business consulting partner, delivering transformative solutions and consistently exceptional results.' }}</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card border-y border-border">
            <div class="container-custom">
                <div class="text-center mb-12 animate-fade-in"><span
                        class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6"><span
                            class="">Our Values</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">Passion</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">Integrity</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">Teamwork</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">Balance</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">Innovation</span></span>
                    </div>
                    <div class="group text-center animate-fade-in" style="animation-delay: 250ms;">
                        <div
                            class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-lock w-7 h-7 text-primary">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg></div><span class="text-sm font-medium"><span class="">Security</span></span>
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
                            </svg></div><span class="text-sm font-medium"><span class="">Creativity</span></span>
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
                    <h2 class="text-2xl md:text-3xl font-bold text-primary-foreground mb-2">Our Target Fields</h2>
                    <p class="text-primary-foreground/80 text-sm md:text-base">We are proud to serve a wide range of
                        industries</p>
                </div>
                <div class="relative">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 mb-8">
                        <div class="text-center py-4 animate-fade-in" style="animation-delay: 0ms;">
                            <div
                                class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-primary-foreground/30 flex items-center justify-center mx-auto mb-3 hover:border-primary-foreground/60 hover:bg-primary-foreground/10 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-building2 w-6 h-6 md:w-7 md:h-7 text-primary-foreground">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                    <path d="M10 6h4"></path>
                                    <path d="M10 10h4"></path>
                                    <path d="M10 14h4"></path>
                                    <path d="M10 18h4"></path>
                                </svg></div><span
                                class="text-primary-foreground font-medium text-sm md:text-base hover:text-primary-foreground/80 transition-colors cursor-default">Construction</span>
                        </div>
                        <div class="text-center py-4 animate-fade-in" style="animation-delay: 100ms;">
                            <div
                                class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-primary-foreground/30 flex items-center justify-center mx-auto mb-3 hover:border-primary-foreground/60 hover:bg-primary-foreground/10 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-shirt w-6 h-6 md:w-7 md:h-7 text-primary-foreground">
                                    <path
                                        d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z">
                                    </path>
                                </svg></div><span
                                class="text-primary-foreground font-medium text-sm md:text-base hover:text-primary-foreground/80 transition-colors cursor-default">Fashion-Clothes</span>
                        </div>
                        <div class="text-center py-4 animate-fade-in" style="animation-delay: 200ms;">
                            <div
                                class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-primary-foreground/30 flex items-center justify-center mx-auto mb-3 hover:border-primary-foreground/60 hover:bg-primary-foreground/10 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-car w-6 h-6 md:w-7 md:h-7 text-primary-foreground">
                                    <path
                                        d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2">
                                    </path>
                                    <circle cx="7" cy="17" r="2"></circle>
                                    <path d="M9 17h6"></path>
                                    <circle cx="17" cy="17" r="2"></circle>
                                </svg></div><span
                                class="text-primary-foreground font-medium text-sm md:text-base hover:text-primary-foreground/80 transition-colors cursor-default">Fleet-Management</span>
                        </div>
                        <div class="text-center py-4 animate-fade-in" style="animation-delay: 300ms;">
                            <div
                                class="w-14 h-14 md:w-16 md:h-16 rounded-full border-2 border-primary-foreground/30 flex items-center justify-center mx-auto mb-3 hover:border-primary-foreground/60 hover:bg-primary-foreground/10 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-house w-6 h-6 md:w-7 md:h-7 text-primary-foreground">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg></div><span
                                class="text-primary-foreground font-medium text-sm md:text-base hover:text-primary-foreground/80 transition-colors cursor-default">Real-Estate</span>
                        </div>
                    </div>
                    <div class="flex justify-center gap-2"><button
                            class="w-10 h-10 rounded-full border-2 border-primary-foreground/50 flex items-center justify-center text-primary-foreground hover:bg-primary-foreground/10 transition-colors"
                            aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg></button><button
                            class="w-10 h-10 rounded-full border-2 border-primary-foreground/50 flex items-center justify-center text-primary-foreground hover:bg-primary-foreground/10 transition-colors"
                            aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg></button></div>
                    <div class="flex justify-center gap-2 mt-4"><button
                            class="w-2 h-2 rounded-full transition-colors bg-primary-foreground"
                            aria-label="Page 1"></button><button
                            class="w-2 h-2 rounded-full transition-colors bg-primary-foreground/30 hover:bg-primary-foreground/50"
                            aria-label="Page 2"></button></div>
                </div>
            </div>
        </section>
        <section class="py-12 md:py-16 overflow-hidden bg-card border-t border-border">
            <div class="container-custom">
                <div class="text-center mb-8 md:mb-12"><span
                        class="inline-block px-4 py-2 rounded-full border border-primary/50 text-primary text-sm font-medium mb-4 md:mb-6 animate-fade-in">Our
                        Partners</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold animate-fade-in animation-delay-100">Trusted
                        By<br><span class="text-primary">Leading Companies</span></h2>
                </div>
                <div class="relative"><button
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 rounded-full bg-card border border-border/50 flex items-center justify-center text-foreground hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all duration-300 -translate-x-1/2 md:-translate-x-4"
                        aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-left w-5 h-5 md:w-6 md:h-6">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg></button><button
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 rounded-full bg-card border border-border/50 flex items-center justify-center text-foreground hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all duration-300 translate-x-1/2 md:translate-x-4"
                        aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right w-5 h-5 md:w-6 md:h-6">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg></button>
                    <div class="overflow-hidden mx-6 md:mx-16">
                        <div class="flex transition-transform duration-500 ease-out" style="transform: translateX(-100%);">
                            @foreach($partners as $partner)
                            <div class="flex-shrink-0 px-2 md:px-3" style="width: {{ 100 / max(6, count($partners)) }}%;">
                                @if($partner->website_url)
                                <a href="{{ $partner->website_url }}" target="_blank" rel="noopener noreferrer"
                                    class="block bg-white rounded-xl p-4 md:p-6 h-[80px] md:h-[100px] flex items-center justify-center hover:shadow-lg transition-shadow border border-border/30 hover:border-primary/50 hover:scale-105 transition-all duration-300">
                                    <img src="{{ $partner->logo }}" alt="{{ $partner->name }}"
                                        class="max-h-12 md:max-h-16 max-w-full w-auto object-contain" draggable="false">
                                </a>
                                @else
                                <div class="flex items-center justify-center p-4 md:p-6 h-[80px] md:h-[100px] rounded-xl bg-white border border-border/30 hover:border-primary/50 hover:scale-105 transition-all duration-300">
                                    <img src="{{ $partner->logo }}" alt="{{ $partner->name }}"
                                        class="max-h-12 md:max-h-16 max-w-full w-auto object-contain" draggable="false">
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex justify-center gap-2 mt-6"><button
                            class="w-2 h-2 rounded-full transition-all duration-300 bg-border hover:bg-primary/50"
                            aria-label="Go to slide 1"></button><button
                            class="w-2 h-2 rounded-full transition-all duration-300 bg-primary w-6"
                            aria-label="Go to slide 2"></button><button
                            class="w-2 h-2 rounded-full transition-all duration-300 bg-border hover:bg-primary/50"
                            aria-label="Go to slide 3"></button><button
                            class="w-2 h-2 rounded-full transition-all duration-300 bg-border hover:bg-primary/50"
                            aria-label="Go to slide 4"></button></div>
                </div>
            </div>
        </section>
    </main>
@endsection
