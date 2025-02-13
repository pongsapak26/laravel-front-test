@props([
    'productdetail',
])
<article class="py-10">
    <div class="pb-5 border-b-2 w-full px-5">
        <h1 id="productname" class="text-2xl font-bold ">
            {{$productdetail['name']}}
        </h1>
        <div class="flex flex-col md:flex-row">
            <h2 id="price" class="text-2xl font-bold text-primary">
                {{number_format($productdetail['price'])}} บาท
            </h2>
            <div class="flex flex-col md:flex-row ml-0 md:ml-24">
                <div class="flex w-full items-center">
                    <img src="{{asset('assets/images/icon/carenda.svg')}}" alt="" srcset=""> 
                    <h3 class="md:ml-1"> ข้อมูล ณ วันที่ {{$productdetail['date']}}</h3>
                </div>
                <div class="flex items-center">
                    <img src="{{asset('assets/images/icon/eye.svg')}}" alt="" srcset="">
                    <h3 class="md:ml-1 md:mt-1"> {{number_format($productdetail['view'])}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-10 my-10">
        <div class="col-span-12 lg:col-span-6 relative w-[100vw] sm:w-auto px-5 lg:px-0">
            <div class="bg-[#EDFF00] px-3 sm:px-7 py-1 sm:py-3 absolute z-30 rounded-full left-8 md:left-4 top-4">
                SALE!
            </div>
            <x-thumbnail-slider :section="'productdetail'" >
                @foreach ($productdetail['image'] as $item)
                    <li class="splide__slide">
                        <img src="{{$item}}" class="object-cover" alt="" srcset="">
                    </li>
                @endforeach
            </x-thumbnail-slider>
        </div>
        <div class="col-span-12 lg:col-span-6  w-[100vw] sm:w-auto px-5 lg:px-0">
            <div>
                {!! $productdetail['detail'] !!}
            </div>
        </div>
    </div>
</article>