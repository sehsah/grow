<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                        <a class="relative text-sm font-medium transition-colors animated-underline text-primary" href="/">Home</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/about">About</a>
                        <div class="relative group pt-2 pb-2 -mt-2 -mb-2">
                            <button type="button" class="flex items-center gap-1 text-sm font-medium transition-colors text-foreground/80 hover:text-foreground">Services
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-chevron-down w-4 h-4 transition-transform duration-200 group-hover:rotate-180">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="absolute top-full left-0 mt-2 pt-2 w-64 bg-card border border-border rounded-xl shadow-xl overflow-hidden transition-all duration-200 z-50 opacity-0 invisible -translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                                <div class="p-2">
                                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-secondary/50 transition-colors" href="/services"><span class="text-sm font-medium hover:text-primary transition-colors">All Services</span></a>
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
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/projects">Projects</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/blog">Blog</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/career">Career</a>
                        <a class="relative text-sm font-medium transition-colors animated-underline text-foreground/80 hover:text-foreground" href="/contact">Contact</a>
                    </div>
                    <div class="hidden md:flex items-center gap-4">
                        <button class="px-3 py-1.5 text-sm font-medium border border-border rounded-full hover:border-primary hover:text-primary transition-colors">العربية</button>
                        <a class="btn-primary" href="/contact">Let's Talk</a>
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
                            href="/">Home</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/about">About</a>
                        <div class="border-b border-border"><button
                                class="flex items-center justify-between w-full py-4 text-base font-medium transition-colors text-foreground">Services<svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down w-5 h-5 transition-transform">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg></button>
                            <div class="overflow-hidden transition-all duration-300 bg-background max-h-0 opacity-0">
                                <div class="pl-4 py-2 space-y-1 border-l-2 border-primary/30 ml-2 mb-2"><a
                                        class="block py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                        href="/services">All Services</a><a
                                        class="flex items-center gap-2 py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                        href="/services/organizational-development"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-4 h-4">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>Organizational Development</a><a
                                        class="flex items-center gap-2 py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                        href="/services/crm"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-users w-4 h-4">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>CRM Services</a><a
                                        class="flex items-center gap-2 py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                        href="/services/outsourcing"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-handshake w-4 h-4">
                                            <path d="m11 17 2 2a1 1 0 1 0 3-3"></path>
                                            <path
                                                d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4">
                                            </path>
                                            <path d="m21 3 1 11h-2"></path>
                                            <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path>
                                            <path d="M3 4h8"></path>
                                        </svg>Outsourcing</a><a
                                        class="flex items-center gap-2 py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                        href="/services/it-development"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-code w-4 h-4">
                                            <polyline points="16 18 22 12 16 6"></polyline>
                                            <polyline points="8 6 2 12 8 18"></polyline>
                                        </svg>IT Development</a><a
                                        class="flex items-center gap-2 py-2 text-sm text-muted-foreground hover:text-primary transition-colors"
                                        href="/services/dskghjshfdgjk"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-settings w-4 h-4">
                                            <path
                                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                                            </path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>gfdhlkfgl</a></div>
                            </div>
                        </div><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/projects">Projects</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/blog">Blog</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/career">Career</a><a
                            class="block py-4 text-base font-medium transition-colors border-b border-border text-foreground"
                            href="/contact">Contact</a>
                    </div>
                    <div class="px-6 py-6 border-t border-border space-y-6 bg-background"><button
                            class="flex items-center gap-2 text-sm text-muted-foreground"><span
                                class="w-6 h-6 rounded-full bg-secondary flex items-center justify-center text-xs">ع</span>العربية</button><a
                            class="btn-primary w-full justify-center" href="/contact">Let's Talk</a>
                        <div>
                            <p class="text-sm text-muted-foreground mb-3">Follow Us</p>
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
                        <h4 class="text-lg font-semibold">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/">Home</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/about">About</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/services">Services</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/projects">Projects</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/blog">Blog</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/career">Career</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/contact">Contact</a></li>
                            <li><a href="https://drive.google.com/file/d/10z7YDshKngYTcqCIyvqZewuFFbijFrdY/view?usp=sharing"
                                    target="_blank" rel="noopener noreferrer"
                                    class="text-muted-foreground hover:text-primary transition-colors text-sm">Company
                                    Profile</a></li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold">Services</h4>
                        <ul class="space-y-2">
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/services/organizational-development">Organizational Development</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/services/crm">CRM Solutions</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/services/outsourcing">Outsourcing Services</a></li>
                            <li><a class="text-muted-foreground hover:text-primary transition-colors text-sm"
                                    href="/services/it-development">IT Development</a></li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold">Contact Info</h4>
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
                    <p class="text-sm text-muted-foreground">© {{ date('Y') }} {{ $siteTitle }}. All rights reserved.<a
                            class="mx-2 text-muted-foreground/30 hover:text-primary transition-colors"
                            href="/admin">•</a></p>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
