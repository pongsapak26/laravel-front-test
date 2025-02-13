@props([
    'section',
])

@push('splidestyle')
<!-- รวมสไตล์ของ Splide -->
<style>
    .{{$section}} .splide__arrows {
        display: none !important;
    }
    .{{$section}} .splide__pagination {
        bottom: -2.5em !important;
    }
    .{{$section}} .splide__pagination__page {
        background: transparent !important;
        border: 1px solid black !important;
    }
    .{{$section}} .splide__pagination__page {
        background: #FFFFFF !important;
        border: 1px solid #FFFFFF !important;
        box-shadow: 0px 2px 4px 0px #00000040;
        margin: 0 0.5em;

    }
    .{{$section}} .splide__pagination__page.is-active {
        background: #163665 !important;
        border: 1px solid #163665 !important;
    }
</style>
@endpush

<!-- ส่วนของ Carousel สำหรับมือถือ -->
<section class="lg:hidden block splide {{$section}}" id="{{$section}}">
    <div class="splide__track">
        <ul class="splide__list">
            {{$slot}}
        </ul>
    </div>
</section>

@push('splideitem')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // สร้างอินสแตนซ์ของ Splide
        var splides = {}; // Create an object to store instances
        splides['{{$section}}'] = new Splide('#{{$section}}', {
            type   : 'loop', // ตั้งค่าให้ Carousel เป็นแบบ loop
            padding: '2rem', // ตั้งค่า padding
            pagination: false,
        });
        splides['{{$section}}'].mount(); // เริ่มการทำงานของ Splide
    });
</script>
@endpush