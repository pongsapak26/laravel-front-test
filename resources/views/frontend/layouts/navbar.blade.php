<nav class="navbar-app shadow-lg sticky">
    <div class="nav-app-container h-32 px-5 md:px-10 flex justify-between">

        <button id="menu" type="button" class="my-auto inline-flex items-center p-2 w-10 h-10 justify-center rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary dark:text-primary ">
            <span class="sr-only">Open main menu</span>
            <svg width="40" height="40" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10H26M2 2H26M2 18H26" stroke="#4285F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
        </button>

        <a href="/" class="nav-app-logo my-auto ">
            <img class="w-[221px] hidden md:block" alt="logo" src="{{ asset(Config::get('app.logo')) }}" />
            <img class="w-[40px]  md:hidden block" alt="logo" src="{{ asset(Config::get('app.logo-mb')) }}" />
        </a>

        <div class="px-5 lg:px-0 hidden transition-all w-full lg:bg-transparent bg-white lg:block lg:w-auto absolute z-10 top-32 left-0" id="navbar-multi-level">
            <ul class="nav-app-menu  flex-col lg:flex-row md:hidden flex">
                <li class="smooth-scroll rounded-full text-primary p-5 content-center block underline underline-offset-2">
                    <a href="" class="nav-app-link">
                        <span>หน้าหลัก</span>
                    </a>
                </li>
                <li class="smooth-scroll rounded-full text-primary p-5 content-center block underline underline-offset-2">
                    <a href="" class="nav-app-link">
                        <span>สินค้าใหม่</span>
                    </a>
                </li>
                <li class="smooth-scroll rounded-full text-primary p-5 content-center block underline underline-offset-2">
                    <a href="" class="nav-app-link">
                        <span>อุปกรณ์ไอที</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="m-auto hidden md:block">
            <div class="rounded-full bg-primary-50 flex h-fit my-auto align-middle items-center">
                <div class="text-base p-5 m-1">
                    หน้าหลัก
                </div>
                <div class="text-base p-5 m-1">
                    สินค้าใหม่
                </div>
                <div class="text-base p-5 m-1 text-white bg-primary rounded-full ">
                    อุปกรณ์ไอที
                </div>
            </div>
        </div>
        <div class="flex h-fit my-auto align-middle items-center justify-end">
            <div class="text-white bg-primary rounded-full m-1 p-5">
                <img src="{{asset('assets/images/icon/cart.svg')}}" alt="cart" srcset="">
            </div>
        </div>
    </div>
</nav>
@push('script')
    <script>
            $('#menu').click(function() {
                $('#navbar-multi-level').toggleClass('hidden');
            });
    </script>
@endpush