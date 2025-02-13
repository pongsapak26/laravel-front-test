@extends('frontend.layouts.app')

@php
    $metadata = [
        'title' => 'Home',
    ];
    $product_detail = [
        'name' => 'Work Louder: Nomad [E] Mechanical Keyboard ',
        'price' => 11799,
        'date' => '1 พ.ย. 67',
        'view' => 45959,
        'image' => [
            asset('assets/images/home/product (10).png'),
            asset('assets/images/home/product (9).png'),
            asset('assets/images/home/product (11).png'),
            asset('assets/images/home/product (12).png'),
            asset('assets/images/home/product (13).png'),
        ],
        'detail'=>'<div class="text-[22px] font-semibold">Nomad [E]</div>
                <div class="text-lg">
                    Know Productivity - Efficiency - Passion - Creativity with no limits. A crisp IPS display boasts everything from pomodoro timer, to a playful Tamagotchi-style companion, a trusty clock and much more.
                </div>
                <div class="text-[22px] font-semibold">Backed by science</div>
                <div class="text-lg">
                    The integrated pomodoro timer leverages a scientifically proven work/rest methodology that is adaptable to any workflow – empowering you to accomplish more in less time.
                </div>
                <div class="text-[22px] font-semibold">Mechanical & hotswap</div>
                <div class="text-lg">
                    We redesigned our custom keycaps to hug your fingertips even more perfectly than before. Mounted on our custom tuned “Atomic” MX Gateron hotswap switches, so you can try different switches without needing to desolder them.
                </div>'
    ];
    $other_products = [
        [
            'name'=>'Figma Creator Micro',
            'type'=>'Mechanical Keyboard',
            'price'=>5375,
            'image'=>asset('assets/images/home/product (2).png')
        ],
        [
            'name'=>'Knob1',
            'type'=>'Mechanical Keyboard',
            'price'=>14999,
            'image'=>asset('assets/images/home/product (3).png')
        ],
        [
            'name'=>'Creator Board',
            'type'=>'Mechanical Keyboard',
            'price'=>13828,
            'image'=>asset('assets/images/home/product (4).png')
        ],
        [
            'name'=>'Creator Board XL',
            'type'=>'Mechanical Keyboard',
            'price'=>18900,
            'image'=>asset('assets/images/home/product (1).png')
        ],
    ];
    $related_products = [
        [
            'name'=>'RAZER Pro Type Ultra',
            'type'=>'Mechanical Keyboard',
            'price'=>5590,
            'image'=>asset('assets/images/home/product (8).png')
        ],
        [
            'name'=>'Diavalet Phantom 2',
            'type'=>'Stereo Speaker',
            'price'=>50642,
            'image'=>asset('assets/images/home/product (5).png')
        ],
        [
            'name'=>'Bose QuietComfort Ultra',
            'type'=>'Headphone',
            'price'=>15900,
            'image'=>asset('assets/images/home/product (6).png')
        ],
        [
            'name'=>'Lewitt Pure Tube',
            'type'=>'Studio Microphone',
            'price'=>43999,
            'image'=>asset('assets/images/home/product (7).png')
        ],
];
@endphp

@section('metadata')
    @include('meta' , ['data'=>$metadata ?? []])
@endsection

@section('style')
<style>
    .breadcrumb-item {
        display: inline-block;
        position: relative;
    }

    .breadcrumb-item:hover::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: currentColor;
        bottom: -2px;
        left: 0;
    }
</style>
@endsection
@section('content')
    <main>
        <div class="px-5 md:px-10 mt-10 text-xs text-abbey">
            <span class="breadcrumb-item cursor-pointer">หน้าหลัก</span> > 
            <span class="breadcrumb-item cursor-pointer">อุปกรณ์ไอที</span> > 
            <span class="breadcrumb-item cursor-pointer">คีย์บอร์ด</span> > 
            <span class="breadcrumb-item cursor-pointer">Work Louder</span> > 
            <span class="breadcrumb-item cursor-pointer">Work Louder: Nomad [E] Mechanical Keyboard</span>
        </div>
        <div class="container mx-auto my-10">
            <x-searchinput />
            <x-productdetail :productdetail='$product_detail'/>
            <section class="py-10 px-5">
                <div class="text-xl mb-5">
                    ผลิตภัณฑ์อื่นๆ จาก Work Louder
                </div>
                <div class="sm:grid grid-cols-12 gap-5 hidden">
                    @push('item-2')
                        @foreach ($other_products as $item)
                        <li class="col-span-12 sm:col-span-6 xl:col-span-3 list-none splide__slide px-3 sm:px-0">
                            <x-card-product :item="$item"/>
                        </li>
                        @endforeach
                    @endpush
                    @stack('item-2')
                </div>
                <div class="sm:hidden">
                    <x-splidejs :section="'product2'">
                        @stack('item-2')
                    </x-splidejs>
                </div>
            </section>
            <section class="py-10 px-5">
                <div class="text-xl mb-5">
                    ผลิตภัณฑ์อื่นๆ จาก Work Louder
                </div>
                <div class="sm:grid grid-cols-12 gap-5 hidden">
                    @push('item')
                        @foreach ($related_products as $item)
                        <li class="col-span-12 sm:col-span-6 xl:col-span-3 list-none splide__slide px-3 sm:px-0">
                            <x-card-product :item="$item"/>
                        </li>
                        @endforeach
                    @endpush
                    @stack('item')
                </div>
                <div class="sm:hidden">
                    <x-splidejs :section="'product'">
                        @stack('item')
                    </x-splidejs>
                </div>
            </section>
        </div>
    </main>
@endsection

@push('script')
    <script id="push2" type="text/javascript"></script>
@endpush

@section('script')
@endsection
