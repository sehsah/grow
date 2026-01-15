@extends('layouts.app')

@section('content')
    <main class="flex-1">
        <section class="pt-32 pb-20 relative border-b border-border">
            <div class="absolute top-20 left-10 w-20 h-20 border border-border/30 rotate-45"></div>
            <div class="absolute top-32 left-16 w-3 h-3 bg-primary rounded-full"></div>
            <div class="container-custom relative z-10">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in"><span class="">@trans('contact.title')</span>
                        </h1>
                        <div class="flex items-start gap-4 animate-fade-in animation-delay-100">
                            <div class="w-12 h-12 flex items-center justify-center shrink-0 animate-spin"
                                style="animation-duration: 8s;"><svg viewBox="0 0 40 40" class="w-10 h-10 text-foreground">
                                    <path d="M20 0 L20 40 M0 20 L40 20 M5 5 L35 35 M35 5 L5 35" stroke="currentColor"
                                        stroke-width="1" fill="none"></path>
                                </svg></div>
                            <p class="text-muted-foreground max-w-md"><span class="">@trans('contact.subtitle')</span></p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-2 text-sm bg-secondary/50 px-4 py-2 rounded-full animate-fade-in animation-delay-200">
                        <span class="text-muted-foreground">COMPACT</span><span
                            class="text-muted-foreground">&gt;</span><span class="text-primary">@trans('contact.title')</span></div>
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
                    <div class="bg-primary rounded-3xl p-8 md:p-12 animate-fade-in">
                        <div class="mb-10">
                            <div
                                class="w-12 h-12 rounded-full bg-primary-foreground/20 flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-mail w-6 h-6 text-primary-foreground">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg></div>
                            <h3 class="text-sm uppercase tracking-wider text-primary-foreground/80 mb-2">@trans('contact.label_email')</h3><a
                                href="mailto:{{ $siteEmail }}"
                                class="text-primary-foreground hover:underline text-lg">{{ $siteEmail }}</a>
                        </div>
                        <div class="mb-10">
                            <div
                                class="w-12 h-12 rounded-full bg-primary-foreground/20 flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-phone w-6 h-6 text-primary-foreground">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg></div>
                            <h3 class="text-sm uppercase tracking-wider text-primary-foreground/80 mb-2">@trans('contact.label_phone')</h3>
                            <div class="space-y-1"  dir="ltr">
                                <a href="tel:{{ $sitePhone }}"
                                    class="block text-primary-foreground hover:underline text-lg" style="@if(app()->getLocale() == 'ar') text-align: end; @else text-align: start; @endif">{{ $sitePhone }}</a>
                                    <a href="tel:{{ $sitePhoneSecondary }}"
                                    class="block text-primary-foreground hover:underline text-lg" style="@if(app()->getLocale() == 'ar') text-align: end; @else text-align: start; @endif">{{ $sitePhoneSecondary }}</a>
                                    </div>
                        </div>
                        <div>
                            <div
                                class="w-12 h-12 rounded-full bg-primary-foreground/20 flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin w-6 h-6 text-primary-foreground">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg></div>
                            <h3 class="text-sm uppercase tracking-wider text-primary-foreground/80 mb-2">@trans('contact.label_address')</h3>
                            <div class="space-y-4">
                                <p class="text-primary-foreground text-lg leading-relaxed whitespace-pre-line">{{ $siteAddress }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="animate-fade-in animation-delay-200">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6"><span class="">@trans('contact.form_title')</span></h2>
                        <p class="text-muted-foreground mb-8 text-lg"><span class="">@trans('contact.form_subtitle')</span></p>
                        <form class="space-y-6"><input
                                class="flex w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-card border-border h-14 text-foreground placeholder:text-muted-foreground"
                                placeholder="@trans('contact.name')" required="" value=""><input type="email"
                                class="flex w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-card border-border h-14 text-foreground placeholder:text-muted-foreground"
                                placeholder="@trans('contact.email')" required="" value=""><input type="tel"
                                class="flex w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-card border-border h-14 text-foreground placeholder:text-muted-foreground"
                                placeholder="@trans('contact.phone')" value="">
                            <div class="space-y-3">
                                <p class="text-sm text-muted-foreground">@trans('contact.service_label')</p>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3"><button type="button" role="checkbox"
                                            aria-checked="false" data-state="unchecked" value="on"
                                            class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                            id="organizational-development"></button><input type="checkbox"
                                            aria-hidden="true" tabindex="-1" value="on"
                                            style="position: absolute; pointer-events: none; opacity: 0; margin: 0px; transform: translateX(-100%); width: 16px; height: 16px;"><label
                                            for="organizational-development"
                                            class="text-sm text-muted-foreground cursor-pointer hover:text-foreground transition-colors">@trans('contact.service_od')</label></div>
                                    <div class="flex items-center gap-3"><button type="button" role="checkbox"
                                            aria-checked="false" data-state="unchecked" value="on"
                                            class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                            id="crm"></button><input type="checkbox" aria-hidden="true"
                                            tabindex="-1" value="on"
                                            style="position: absolute; pointer-events: none; opacity: 0; margin: 0px; transform: translateX(-100%); width: 16px; height: 16px;"><label
                                            for="crm"
                                            class="text-sm text-muted-foreground cursor-pointer hover:text-foreground transition-colors">@trans('contact.service_crm')</label></div>
                                    <div class="flex items-center gap-3"><button type="button" role="checkbox"
                                            aria-checked="false" data-state="unchecked" value="on"
                                            class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                            id="outsourcing"></button><input type="checkbox" aria-hidden="true"
                                            tabindex="-1" value="on"
                                            style="position: absolute; pointer-events: none; opacity: 0; margin: 0px; transform: translateX(-100%); width: 16px; height: 16px;"><label
                                            for="outsourcing"
                                            class="text-sm text-muted-foreground cursor-pointer hover:text-foreground transition-colors">@trans('contact.service_outsourcing')</label>
                                    </div>
                                    <div class="flex items-center gap-3"><button type="button" role="checkbox"
                                            aria-checked="false" data-state="unchecked" value="on"
                                            class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                            id="it-development"></button><input type="checkbox" aria-hidden="true"
                                            tabindex="-1" value="on"
                                            style="position: absolute; pointer-events: none; opacity: 0; margin: 0px; transform: translateX(-100%); width: 16px; height: 16px;"><label
                                            for="it-development"
                                            class="text-sm text-muted-foreground cursor-pointer hover:text-foreground transition-colors">@trans('contact.service_it')</label></div>
                                </div>
                            </div>
                            <textarea
                                class="flex w-full rounded-md border px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-card border-border min-h-[120px] text-foreground placeholder:text-muted-foreground resize-none"
                                placeholder="@trans('contact.message')"></textarea><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 px-4 py-2 w-full h-14 text-lg font-semibold"
                                type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-send w-5 h-5 mr-2">
                                    <path
                                        d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                    </path>
                                    <path d="m21.854 2.147-10.94 10.939"></path>
                                </svg>@trans('common.submit')</button>
                        </form>
                        <div class="mt-12">
                            <h3 class="text-xl font-semibold mb-6"><span class="">@trans('common.follow_us')</span></h3>
                            <div class="flex gap-4"><a href="https://www.facebook.com/Compactodco" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-12 h-12 rounded-full bg-secondary border border-border flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all duration-300"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg></a><a href="https://www.instagram.com/compactodco" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-12 h-12 rounded-full bg-secondary border border-border flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all duration-300"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                        </rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                    </svg></a><a href="https://www.linkedin.com/company/compact-od" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-12 h-12 rounded-full bg-secondary border border-border flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all duration-300"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect width="4" height="12" x="2" y="9"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg></a><a href="https://x.com/compactodco" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-12 h-12 rounded-full bg-secondary border border-border flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all duration-300"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter">
                                        <path
                                            d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                        </path>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
