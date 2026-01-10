<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @php
        $siteTitle = \App\Helpers\SettingsHelper::site('title');
        $siteLogo = \App\Helpers\SettingsHelper::site('logo');
    @endphp
    <title>{{ $siteTitle }}</title>
    <meta name="description" content="{{ config('app.description', 'Grow Application') }}" />
    <meta name="author" content="{{ $siteTitle }}" />
    <link rel="stylesheet" crossorigin href="{{ asset('assets/index-I91yRjam.css') }}">
</head>

<body>
    <div class="min-h-screen flex flex-col">
        <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
            <div class="container-custom">
                <nav class="flex items-center justify-between h-20">
                    <a class="flex items-center gap-2"
                        href="/">
                        <img src="{{ asset($siteLogo) }}" alt="{{ $siteTitle }}" class="h-12 w-auto">
                    </a>
                    <div class="hidden md:flex items-center gap-8">
                        <a class="relative text-sm font-medium transition-colors animated-underline text-primary" href="/">{{ __('common.home') }}</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/about">{{ __('common.about') }}</a>
                        <div class="relative group pt-2 pb-2 -mt-2 -mb-2">
                            <button type="button" class="flex items-center gap-1 text-sm font-medium transition-colors text-foreground/80 hover:text-foreground">{{ __('common.services') }}
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-chevron-down w-4 h-4 transition-transform duration-200 group-hover:rotate-180">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="absolute top-full left-0 mt-2 pt-2 w-64 bg-card border border-border rounded-xl shadow-xl overflow-hidden transition-all duration-200 z-50 opacity-0  -translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                                <div class="p-2">
                                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-secondary/50 transition-colors" href="/services"><span class="text-sm font-medium hover:text-primary transition-colors">{{ __('common.all_services') }}</span></a>
                                    <div class="border-t border-border my-2"></div>
                                    @if(isset($services) && is_iterable($services))
                                        @foreach ($services as $service)
                                        <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-secondary/50 transition-colors" href="/services/{{ $service->slug ?? '#' }}">
                                            <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center hover:bg-primary/20 transition-colors">
                                                {!! $service->icon ?? '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>' !!}
                                            </div>
                                            <span class="text-sm font-medium hover:text-primary transition-colors">{{ $service->title ?? 'Service' }}</span>
                                        </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/projects">{{ __('common.projects') }}</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/blog">{{ __('common.blog') }}</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/career">{{ __('common.career') }}</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/contact">{{ __('common.contact') }}</a>
                    </div>
                    <div class="hidden md:flex items-center gap-4">
                        <a href="{{ route('lang.switch', ['locale' => app()->getLocale() === 'ar' ? 'en' : 'ar']) }}"
                           class="px-3 py-1.5 text-sm font-medium border border-border rounded-full hover:border-primary hover:text-primary transition-colors">
                            {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
                        </a>
                        <a class="btn-primary" href="/contact">{{ __('common.lets_talk') }}</a>
                    </div>
                    <button
                        class="md:hidden p-2 text-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-menu">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg></button>
                </nav>
            </div>
            <div
                class="md:hidden fixed inset-0 top-0 z-50 bg-background transition-all duration-300 opacity-0 invisible pointer-events-none">
                <div class="flex items-center justify-between h-20 px-4 border-b border-border"><a href="/"><img
                            src="{{ asset($siteLogo) }}" alt="{{ $siteTitle }}" class="h-10 w-auto"></a><button
                        class="p-2 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg></button></div>
                <div class="flex flex-col h-[calc(100vh-80px)] overflow-y-auto bg-background">
                    <div class="flex-1 px-6 py-6"><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-primary"
                            href="/">{{ __('common.home') }}</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/about">{{ __('common.about') }}</a>
                        <div class="border-b border-border"><button
                                class="flex items-center justify-between w-full py-4 text-base font-medium transition-colors text-foreground">{{ __('common.services') }}<svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down w-5 h-5 transition-transform">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg></button>
                            <div class="overflow-hidden transition-all duration-300 bg-background max-h-0 opacity-0">
                                <div class="pl-4 py-2 space-y-1 border-l-2 border-primary/30 ml-2 mb-2">
                                    <a class="block py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                        href="/services">{{ __('common.all_services') }}</a>
                                    @if(isset($services) && is_iterable($services))
                                        @foreach ($services as $service)
                                        <a class="flex items-center gap-2 py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                            href="/services/{{ $service->slug ?? '#' }}">
                                            <div class="w-4 h-4 flex items-center justify-center">
                                                {!! $service->icon ?? '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>' !!}
                                            </div>
                                            {{ $service->title ?? 'Service' }}
                                        </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/projects">{{ __('common.projects') }}</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/blog">{{ __('common.blog') }}</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/career">{{ __('common.career') }}</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/contact">{{ __('common.contact') }}</a>
                    </div>
                    <div class="px-6 py-6 border-t border-border space-y-6 bg-background">
                        <a href="{{ route('lang.switch', ['locale' => app()->getLocale() === 'ar' ? 'en' : 'ar']) }}"
                           class="flex items-center gap-2 text-sm text-muted-foreground hover:text-primary transition-colors">
                            <span class="w-6 h-6 rounded-full bg-secondary flex items-center justify-center text-xs">{{ app()->getLocale() === 'ar' ? 'EN' : 'ع' }}</span>
                            {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
                        </a>
                        <a class="btn-primary w-full justify-center" href="/contact">{{ __('common.lets_talk') }}</a>
                        <div>
                            <p class="text-sm text-muted-foreground mb-3">{{ __('common.follow_us') }}</p>
                            <div class="flex gap-4"><a href="https://facebook.com" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg></a><a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                                    class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter">
                                        <path
                                            d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                        </path>
                                    </svg></a><a href="https://linkedin.com" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-linkedin">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect width="4" height="12" x="2" y="9"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg></a><a href="https://instagram.com" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5"
                                            ry="5">
                                        </rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="bg-card border-t border-border relative">
            <div class="absolute top-8 right-8 hidden lg:block"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABRCAYAAABv/dCnAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIASURBVHhe7dvNTQJBGMbxWQ0mYAHc5UoPeqUFGsBE6MEe8CAFUANX7IErBivBPGRHje4Tlpl34rvJ8082zC4Jk/zYD7JA1e/fHoP601X9qH4lGJJgSIIhCYYkGJJgSIIhCYYkGFJnYRaL+WkplfYYkmBIgiG5gJnPn8LDw329Vi7Mgbna5AJmt9uF1eq1KA5eG3Ngrja5gNlu38Js9lgMJ6JgDszVJjfnmFI4KSjI1cnXGicVBbmCQVY4OSjIHQzKxclFQS5hUCqOBQpyC4MuxbFCQa5hUFscSxTkHgadw7FGQde93s1zPXbd4fDx9QkZj8Ph8LR9MOibo6DOfUUb947NZnNan0wm5ijoX2BybzCNRndhOp2GqqrCer0O+/17/Uxay+VLPfquE+eYpoByPJZ7T3UokTq1x/y8+uDwwYIxtjVdrXLqDAy7JGNcAqcTMAwlVgLHPcw5lJg1jmuYtigxSxy3MJeixKxwXMKkosQscNzB5KLEcnFcwVihxHJw3MBYo8RScVzAlEKJpeC4gBmPx8VQYhEHc7Wpsz+Zj7cumm4ZWOTuquQlwZAEQ9LfckjaY0iCIQmGJBiSYEiCIQmGJBiSYEiCIQmGJBiSYEiCIQmGJBiSYEiCIQmGJBiSYEiCIQmGJBiSYEiCIQmGJBiSYEiCIQmGJBiSYBoL4RMWTkEpzvUU8AAAAABJRU5ErkJggg=="
                    alt="" class="w-8 h-8 animate-spin" style="animation-duration: 8s;"></div>
            @php
                $siteAddress = \App\Helpers\SettingsHelper::site('address', '');
                $sitePhone = \App\Helpers\SettingsHelper::site('phone');
                $sitePhoneSecondary = \App\Helpers\SettingsHelper::site('phone_secondary');
                $siteEmail = \App\Helpers\SettingsHelper::site('email');
            @endphp
            <div class="container-custom py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                    <div class="space-y-4"><a class="inline-block" href="/"><img
                                src="{{ asset($siteLogo) }}" alt="{{ $siteTitle }}" class="h-12 w-auto"></a>
                        <p class="text-muted-foreground text-sm leading-relaxed">{{ $siteTitle }} delivers integrated business
                            solutions designed to drive measurable growth and sustainable innovation.</p>
                        <div class="flex gap-3 pt-2"><a href="https://www.facebook.com/Compactodco" target="_blank"
                                rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"
                                aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a><a href="https://x.com/compactodco" target="_blank"
                                rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"
                                aria-label="Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-twitter">
                                    <path
                                        d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                    </path>
                                </svg></a><a href="https://www.linkedin.com/company/compact-od" target="_blank"
                                rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"
                                aria-label="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-linkedin">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect width="4" height="12" x="2" y="9"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a><a href="https://www.instagram.com/compactodco" target="_blank"
                                rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-colors"
                                aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-instagram">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                    </rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg></a></div>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold">{{ __('common.quick_links') }}</h4>
                        <ul class="space-y-2">
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/">{{ __('common.home') }}</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/about">{{ __('common.about') }}</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/services">{{ __('common.services') }}</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/projects">{{ __('common.projects') }}</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/blog">{{ __('common.blog') }}</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/career">{{ __('common.career') }}</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/contact">{{ __('common.contact') }}</a></li>
                            <li><a href="https://drive.google.com/file/d/10z7YDshKngYTcqCIyvqZewuFFbijFrdY/view?usp=sharing"
                                    target="_blank" rel="noopener noreferrer"
                                    class="text-muted-foreground hover:text-primary transition-colors text-sm">{{ __('common.company_profile') }}</a></li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold">{{ __('common.services') }}</h4>
                        <ul class="space-y-2">
                            @if(isset($services) && is_iterable($services))
                                @foreach ($services->take(4) as $service)
                                <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                        href="/services/{{ $service->slug ?? '#' }}">{{ $service->title ?? 'Service' }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold">{{ __('common.contact_info') }}</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map-pin text-primary mt-0.5 flex-shrink-0">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg><span class="whitespace-pre-line">{{ $siteAddress }}</span></li>
                            <li class="flex items-center gap-3 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-phone text-primary flex-shrink-0">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg><a href="tel:{{ str_replace(' ', '', $sitePhone) }}" class="hover:text-primary transition-colors"
                                    dir="ltr">{{ $sitePhone }}</a></li>
                            @if($sitePhoneSecondary)
                            <li class="flex items-center gap-3 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-phone text-primary flex-shrink-0">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg><a href="tel:{{ str_replace(' ', '', $sitePhoneSecondary) }}" class="hover:text-primary transition-colors"
                                    dir="ltr">{{ $sitePhoneSecondary }}</a></li>
                            @endif
                            <li class="flex items-center gap-3 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-mail text-primary flex-shrink-0">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg><a href="mailto:{{ $siteEmail }}"
                                    class="hover:text-primary transition-colors">{{ $siteEmail }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-12 pt-8 border-t border-border text-center">
                    <p class="text-sm text-muted-foreground">© {{ date('Y') }} {{ $siteTitle }}. {{ __('common.rights_reserved') }}.<a
                            class="mx-2 text-muted-foreground/30 hover:text-primary transition-colors"
                            href="/admin">•</a></p>
                </div>
            </div>
        </footer>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile Menu
            const mobileMenuBtn = document.querySelector('header nav button.md\\:hidden');
            const mobileMenu = document.querySelector('.md\\:hidden.fixed.inset-0');
            const closeMobileMenuBtn = mobileMenu ? mobileMenu.querySelector('button') : null;

            if (mobileMenuBtn && mobileMenu && closeMobileMenuBtn) {
                const toggleMobileMenu = () => {
                    mobileMenu.classList.toggle('opacity-0');
                    mobileMenu.classList.toggle('invisible');
                    mobileMenu.classList.toggle('pointer-events-none');
                }
                mobileMenuBtn.addEventListener('click', toggleMobileMenu);
                closeMobileMenuBtn.addEventListener('click', toggleMobileMenu);
            }

            // Mobile Services Dropdown
            const mobileServicesBtn = Array.from(document.querySelectorAll('.md\\:hidden button')).find(btn => btn.textContent.trim().includes('Services'));
            if (mobileServicesBtn) {
                const dropdown = mobileServicesBtn.nextElementSibling;
                const icon = mobileServicesBtn.querySelector('svg');
                if (dropdown) {
                    mobileServicesBtn.addEventListener('click', () => {
                        dropdown.classList.toggle('max-h-0');
                        dropdown.classList.toggle('opacity-0');
                        if (icon) icon.classList.toggle('rotate-180');
                    });
                }
            }

            // Desktop Services Dropdown
            const desktopServicesGroup = document.querySelector('.hidden.md\\:flex .group');
            if (desktopServicesGroup) {
                const btn = desktopServicesGroup.querySelector('button');
                const dropdown = desktopServicesGroup.querySelector('.absolute');

                if (btn && dropdown) {
                    btn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        dropdown.classList.toggle('!opacity-100');
                        dropdown.classList.toggle('!visible');
                        dropdown.classList.toggle('!translate-y-0');
                    });

                    document.addEventListener('click', (e) => {
                        if (!desktopServicesGroup.contains(e.target)) {
                            dropdown.classList.remove('!opacity-100', '!visible', '!translate-y-0');
                        }
                    });
                }
            }
        });
    </script>
</body>

</html>
