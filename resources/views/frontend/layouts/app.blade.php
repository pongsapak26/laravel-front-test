<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="fzxy">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if(config('app.env') == 'local')
        <meta name="robots" content="noindex, nofollow">
    @endif
    @yield('metadata')
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite([
        'resources/css/app.css',
        'resources/sass/app.scss',
        'resources/js/app.js',
        ])

    @yield('style')
    @stack('style')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <style>
    html {
        scroll-behavior: smooth;
        font-family: "Noto Sans Thai", serif;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    @stack('splidestyle')
</head>

<body style="overflow:hidden">
    <div id="loading-screen" class="absolute bg-white z-50 h-full w-full flex items-center justify-center ">
        <div class="flex items-center position-relative LOADICON">
        
        </div>
    </div>
    @include('frontend.layouts.navbar')
    <div id="content">
        @yield('content')
    </div>
    @include('frontend.layouts.footer')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    {{-- axios --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- helper --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script id="app" type="text/javascript">
        const APP_URL = `{{ url('/') }}`;
        $(document).ready(function() {
            const COOKIE_CONSENT_KEY = 'cookies';
            const cookieConsentPopup = document.getElementById('cookie-consent-popup');
            const cookieConsent = $.cookie(COOKIE_CONSENT_KEY);
            // remove cookie consent
            if (cookieConsent && cookieConsentPopup) {
                cookieConsentPopup.style.display = 'none';
            } else {
                cookieConsentPopup.style.display = '';
            }
            // accept cookie.
            $("body").on('click', 'button#cookie-accept', function() {
                if (cookieConsentPopup) {
                    cookieConsentPopup.remove();
                }
                $.cookie(COOKIE_CONSENT_KEY, 'accept', {
                    expires: 365
                });
            })
            // reject cookie.
            $("body").on('click', 'button#cookie-reject', function() {
                if (cookieConsentPopup) {
                    cookieConsentPopup.remove();
                }
                $.cookie(COOKIE_CONSENT_KEY, 'reject', {
                    expires: 365
                });
            })
            // AOS init.
            let AOS = window?.AOS;
            if (AOS) {
                const anchorPlacement = ''; // ตำแหน่งที่ต้องการให้ AOS ทำงาน
                $('.aos-fade-up').attr('data-aos', 'fade-up').attr('data-aos-once', 'true').attr('data-aos-anchor-placement', anchorPlacement); // กำหนดค่า AOS ที่ต้องการ
                $('.aos-fade-left').attr('data-aos', 'fade-left').attr('data-aos-once', 'true').attr('data-aos-anchor-placement', anchorPlacement); // กำหนดค่า AOS ที่ต้องการ
                $('.aos-fade-down').attr('data-aos', 'fade-down').attr('data-aos-once', 'true').attr('data-aos-anchor-placement', anchorPlacement); // กำหนดค่า AOS ที่ต้องการ
                $('.aos-fade-right').attr('data-aos', 'fade-right').attr('data-aos-once', 'true').attr('data-aos-anchor-placement', anchorPlacement); // กำหนดค่า AOS ที่ต้องการ
                AOS.init();
            }

        });
        $('.LOADICON').append(
                `<div class="flex w-full justify-center items-center py-20 aos-fade-up" data-aos="fade-up">
            <div class="relative">
                <!-- Outer Ring-->
                <div class="w-12 h-12 rounded-full absolute
            border-2 border-solid border-gray-200"></div>
            
                <!-- Inner Ring -->
                <div class="w-12 h-12 rounded-full animate-spin absolute
            border-2 border-solid border-primary border-t-transparent"></div>
          </div>
          </div>`
              );
        $(window).on('load', function () {
            // เมื่อโหลดทุกอย่างเสร็จ
            $('.LOADICON').empty()
            $('#loading-screen').fadeOut(500, function () {
              // หลังจากหน้าโหลดปิด

              $('body').css('overflow', 'auto'); // อนุญาตให้เลื่อน
              $('#content').fadeIn(500); // แสดงเนื้อหา
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>    
    @stack('splideitem')
    @yield('script')
    @stack('script')
    @stack('owlcarousel')
    @stack('setCate')
</body>

</html>
