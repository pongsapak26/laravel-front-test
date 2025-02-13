<!-- SEO Meta Tags -->
<title>{{ config('app.name', 'test laravel') }} - {{ $metadata['title'] ?? '' }}</title>
<meta name="description" content="{{ $metadata['description'] ?? config('app.meta_dec') }}">
<meta name="keywords" content="{{ $metadata['keywords'] ?? config('app.meta_keyword') }}">
{{-- <meta name="robots" content="index, follow"> --}}
<!-- Open Graph Meta Tags for Facebook -->
<meta property="og:title" content="{{ $metadata['title'] ?? 'test laravel' }}">
<meta property="og:description" content="{{ $metadata['description'] ?? config('app.meta_dec') }}">
<meta property="og:image" content="{{ $metadata['image']  ?? asset('assets/images/logos/logo.webp') }}">
<meta property="og:url" content="{{ $metadata['url'] ?? url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="test laravel">
<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $metadata['title'] ?? 'test laravel' }}">
<meta name="twitter:description" content="{{ $metadata['description'] ?? config('app.meta_dec') }}">
<meta name="twitter:image" content="{{ $metadata['image'] ?? asset('assets/images/logos/logo.webp') }}">
<!-- Additional Meta Tags for other platforms -->
<link rel="apple-touch-icon" href="{{ asset(config('app.favicon')) }}">