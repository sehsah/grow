# HTML to Blade Template Conversion Guide

## Quick Reference: Converting Asset Paths

When you copy HTML from the website, you need to convert static paths to Laravel helpers:

### 1. Images
```html
<!-- Before (copied from website) -->
<img src="/assets/logo-DSroQpd9.png" alt="Logo">
<img src="/images/hero-image.jpg" alt="Hero">

<!-- After (Laravel Blade) -->
<img src="{{ asset('assets/logo-DSroQpd9.png') }}" alt="Logo">
<img src="{{ asset('images/hero-image.jpg') }}" alt="Hero">
```

### 2. CSS Files
```html
<!-- Before -->
<link rel="stylesheet" href="/assets/index-I91yRjam.css">

<!-- After -->
<link rel="stylesheet" href="{{ asset('assets/index-I91yRjam.css') }}">
```

### 3. JavaScript Files
```html
<!-- Before -->
<script src="/assets/index-B7fkAliT.js"></script>

<!-- After -->
<script src="{{ asset('assets/index-B7fkAliT.js') }}"></script>
```

### 4. Internal Links
```html
<!-- Before -->
<a href="/about">About</a>
<a href="/services">Services</a>

<!-- After (using routes) -->
<a href="{{ route('about') }}">About</a>
<a href="{{ route('services') }}">Services</a>

<!-- Or using url() -->
<a href="{{ url('/about') }}">About</a>
```

### 5. External Links (keep as is)
```html
<!-- External links stay the same -->
<a href="https://facebook.com" target="_blank">Facebook</a>
<a href="mailto:info@example.com">Email</a>
<a href="tel:+1234567890">Phone</a>
```

## File Structure

```
resources/views/
├── layouts/
│   └── app.blade.php          # Main layout (head, body tags)
├── partials/
│   ├── header.blade.php       # Header section
│   └── footer.blade.php       # Footer section
├── pages/
│   ├── example.blade.php      # Example page template
│   ├── about.blade.php        # Your static pages go here
│   └── services.blade.php
└── home.blade.php             # Homepage
```

## Steps to Add a New Static Page

1. **Copy HTML from website**
   - Right-click → Inspect Element
   - Copy the HTML code you need

2. **Create a new Blade file**
   ```bash
   # Create: resources/views/pages/about.blade.php
   ```

3. **Use the template structure**
   ```blade
   @extends('layouts.app')
   
   @section('title', 'Page Title')
   @section('description', 'Page Description')
   
   @section('content')
       {{-- Paste your HTML here --}}
       <div class="your-content">
           <!-- Your copied HTML -->
       </div>
   @endsection
   ```

4. **Convert all paths**
   - `/assets/` → `{{ asset('assets/') }}`
   - `/images/` → `{{ asset('images/') }}`
   - `/css/` → `{{ asset('css/') }}`
   - `/js/` → `{{ asset('js/') }}`
   - Internal links → `{{ route('name') }}` or `{{ url('/path') }}`

5. **Add route in routes/web.php**
   ```php
   Route::get('/about', function () {
       return view('pages.about');
   });
   ```

## Common Patterns

### Using Variables
```blade
{{-- In Blade, you can use variables --}}
<h1>{{ $pageTitle ?? 'Default Title' }}</h1>
<p>{{ $content ?? '' }}</p>
```

### Loops (if you have dynamic content later)
```blade
@foreach($items as $item)
    <div class="item">
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->description }}</p>
    </div>
@endforeach
```

### Conditionals
```blade
@if($showBanner)
    <div class="banner">...</div>
@endif
```

## Assets Location

All assets should be in `public/` directory:
- `public/assets/` - Main bundle files
- `public/images/` - Images
- `public/css/` - Additional CSS
- `public/js/` - Additional JavaScript

## Tips

1. **Test incrementally** - Convert one section at a time
2. **Keep original HTML** - Comment it out for reference
3. **Use Laravel helpers** - Always use `asset()`, `route()`, `url()`
4. **Check browser console** - Fix any 404 errors for missing assets
