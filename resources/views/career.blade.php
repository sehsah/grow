@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="absolute top-20 left-10 w-20 h-20 border border-border/30 rotate-45"></div>
            <div class="absolute top-32 left-16 w-3 h-3 bg-primary rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in"><span class="">Career</span>
                        </h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center shrink-0 animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span class="">Join our exceptional team and
                                    start your career journey with us. We are looking for outstanding talents.</span></p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <span class="text-muted-foreground">COMPACT</span><span
                            class="text-muted-foreground">&gt;</span><span class="text-primary">Career</span></div>
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
                <div class="grid lg:grid-cols-2 gap-12">
                    <div class="animate-fade-in">
                        <div class="bg-primary rounded-3xl p-8 md:p-12 h-full">
                            <div
                                class="w-16 h-16 rounded-full bg-primary-foreground/20 flex items-center justify-center mb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-briefcase w-8 h-8 text-primary-foreground">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg></div>
                            <h2 class="text-3xl font-bold text-primary-foreground mb-4"><span class="">Why Join
                                    Us?</span></h2>
                            <p class="text-primary-foreground/80 mb-8"><span class="">We believe our employees are our
                                    greatest asset. We provide a motivating work environment and exceptional growth
                                    opportunities.</span></p>
                            <ul class="space-y-4">
                                <li class="flex items-center gap-3 text-primary-foreground"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-circle-check-big w-5 h-5 shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span><span class="">Competitive salary packages</span></span></li>
                                <li class="flex items-center gap-3 text-primary-foreground"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-circle-check-big w-5 h-5 shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span><span class="">Professional development opportunities</span></span>
                                </li>
                                <li class="flex items-center gap-3 text-primary-foreground"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-circle-check-big w-5 h-5 shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span><span class="">Flexible working environment</span></span></li>
                                <li class="flex items-center gap-3 text-primary-foreground"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big w-5 h-5 shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span><span class="">Health insurance benefits</span></span></li>
                                <li class="flex items-center gap-3 text-primary-foreground"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big w-5 h-5 shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span><span class="">Team building activities</span></span></li>
                                <li class="flex items-center gap-3 text-primary-foreground"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big w-5 h-5 shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span><span class="">Career growth path</span></span></li>
                            </ul>
                            <div class="mt-12 pt-8 border-t border-primary-foreground/20">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary-foreground/20 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-users w-6 h-6 text-primary-foreground">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg></div>
                                    <div>
                                        <p class="text-2xl font-bold text-primary-foreground">100+</p>
                                        <p class="text-primary-foreground/80 text-sm"><span class="">Happy
                                                Employees</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="animate-fade-in animation-delay-200">
                        <h2 class="text-3xl font-bold mb-2"><span class="">Submit Your CV</span></h2>
                        <p class="text-muted-foreground mb-8"><span class="">Fill out the form below and attach your
                                CV to join our team.</span></p>
                        <form class="space-y-6">
                            <div><label class="block text-sm font-medium mb-2">Name <span
                                        class="text-destructive">*</span></label><input
                                    class="flex w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-card border-border h-12"
                                    required="" value=""></div>
                            <div><label class="block text-sm font-medium mb-2">Email <span
                                        class="text-destructive">*</span></label><input type="email"
                                    class="flex w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-card border-border h-12"
                                    required="" value=""></div>
                            <div><label class="block text-sm font-medium mb-2">Phone Number <span
                                        class="text-destructive">*</span></label><input type="tel"
                                    class="flex w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-card border-border h-12"
                                    required="" value=""></div>
                            <div><label class="block text-sm font-medium mb-2">Career <span
                                        class="text-destructive">*</span></label><input
                                    class="flex w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-card border-border h-12"
                                    placeholder="e.g., Web Developer" required="" value=""></div>
                            <div><label class="block text-sm font-medium mb-2">Details (optional)</label>
                                <textarea
                                    class="flex w-full rounded-md border px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-card border-border min-h-[100px] resize-none"
                                    placeholder="Tell us more about yourself..."></textarea>
                            </div>
                            <div><label class="block text-sm font-medium mb-2">CV <span
                                        class="text-destructive">*</span></label>
                                <div class="relative"><input type="file" accept=".pdf,.doc,.docx,.png,.jpg,.jpeg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                    <div
                                        class="flex items-center gap-4 p-4 border border-dashed border-border rounded-xl bg-card hover:border-primary transition-colors">
                                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-upload w-6 h-6 text-primary">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="17 8 12 3 7 8"></polyline>
                                                <line x1="12" x2="12" y1="3" y2="15">
                                                </line>
                                            </svg></div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium">Choose file or drag here</p>
                                            <p class="text-xs text-muted-foreground">PDF, DOC, DOCX, PNG, JPG (Max 5MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 px-4 py-2 w-full h-14 text-lg font-semibold"
                                type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-send w-5 h-5 mr-2">
                                    <path
                                        d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                    </path>
                                    <path d="m21.854 2.147-10.94 10.939"></path>
                                </svg>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
