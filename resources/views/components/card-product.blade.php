@props([
    'item',
])
<div class="border-2 p-4 rounded-lg">
    <img class="object-cover h-36 w-full rounded-lg" src="{{asset($item['image'])}}" alt="" srcset="">
    <div class="font-bold text-[20px] mt-3 text-ellipsis">
        {{$item['name']}}
    </div>
    <div class="text-sm font-light">
        {{$item['type']}}
    </div>
    <div class="font-semibold text-primary text-2xl my-3">
        {{ number_format($item['price']) }} บาท
    </div>
    <button class="text-white bg-primary w-full rounded-lg text-center py-3">
        ใส่ตะกร้า
    </button>
</div>

