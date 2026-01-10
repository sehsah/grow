@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="absolute top-20 left-10 w-20 h-20 border border-border/30 rotate-45"></div>
            <div class="absolute top-32 left-16 w-3 h-3 bg-primary rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in"><span class="">Organizational
                                Development</span></h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center shrink-0 animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span class="">Transform your organization with
                                    strategic planning and process optimization.</span></p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <a class="text-muted-foreground hover:text-primary transition-colors"
                            href="/services">Services</a><span class="text-muted-foreground">&gt;</span><span
                            class="text-primary">Organizational Development</span></div>
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
                <div class="text-center mb-16 animate-fade-in"><span
                        class="inline-block px-4 py-1.5 text-sm border border-border rounded-full mb-6">Our Services</span>
                    <h2 class="text-3xl md:text-4xl font-bold">What We Offer</h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 0ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-book-open w-7 h-7 text-primary">
                                <path d="M12 7v14"></path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg></div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">Business
                            Consultancy</h3>
                        <p class="text-muted-foreground text-sm mb-4">Help organizations solve issues, create value,
                            maximize growth and improve business performance.</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Expert advice, analysis and solutions</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Business Plan development</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Business process optimization</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Work instructions creation</span></li>
                        </ul>
                    </div>
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 100ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-primary">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg></div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                            Corporate Training</h3>
                        <p class="text-muted-foreground text-sm mb-4">Providing professional development and training to
                            employees in a corporate setting.</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Increasing company productivity</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Teaching new skills and knowledge</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Leadership development programs</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Team building workshops</span></li>
                        </ul>
                    </div>
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 200ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-briefcase w-7 h-7 text-primary">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                            </svg></div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">Career
                            Development</h3>
                        <p class="text-muted-foreground text-sm mb-4">Comprehensive career development solutions for
                            organizational growth.</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Employee career paths planning</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Employees KPIs development</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Job description creation</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Performance appraisals system</span></li>
                        </ul>
                    </div>
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 300ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-refresh-cw w-7 h-7 text-primary">
                                <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                                <path d="M21 3v5h-5"></path>
                                <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                                <path d="M8 16H3v5"></path>
                            </svg></div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">Change
                            Management</h3>
                        <p class="text-muted-foreground text-sm mb-4">Expert change management to navigate organizational
                            transitions.</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Planning and strategy development</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Crafting change initiatives</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Implementation support</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Review &amp; analysis of outcomes</span></li>
                        </ul>
                    </div>
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 400ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clipboard-check w-7 h-7 text-primary">
                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <path d="m9 14 2 2 4-4"></path>
                            </svg></div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">
                            Assessments and Surveys</h3>
                        <p class="text-muted-foreground text-sm mb-4">In-depth assessments and surveys for data-driven
                            decisions.</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Question management</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Survey design and development</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Distribution strategies</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Evaluation &amp; Reporting</span></li>
                        </ul>
                    </div>
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 500ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-laptop w-7 h-7 text-primary">
                                <path
                                    d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16">
                                </path>
                            </svg></div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">Digital
                            Transformation Consultancy</h3>
                        <p class="text-muted-foreground text-sm mb-4">Assist businesses in their digital transition
                            efforts.</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Increase efficiency and competitiveness</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Transitioning businesses to digital technology</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Digital strategy development</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Technology implementation support</span></li>
                        </ul>
                    </div>
                    <div class="group p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 animate-fade-in"
                        style="animation-delay: 600ms;">
                        <div
                            class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-award w-7 h-7 text-primary">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                </path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg></div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">ISO
                            Consulting &amp; Certification</h3>
                        <p class="text-muted-foreground text-sm mb-4">We help your businesses achieve ISO 9001
                            certification.</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>ISO 9001 certification support</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Tools and training for certification</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Maintaining certification compliance</span></li>
                            <li class="flex items-start gap-2 text-muted-foreground text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-primary shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Quality management system implementation</span></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mt-16 animate-fade-in"><a
                        class="inline-flex items-center gap-2 bg-primary text-primary-foreground px-8 py-4 rounded-full font-semibold hover:bg-primary/90 transition-colors"
                        href="/contact">Let's Talk<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></a></div>
            </div>
        </section>
    </main>
@endsection
