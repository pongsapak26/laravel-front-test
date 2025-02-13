@props([
    'section',
])

@push('splidestyle')
<!-- รวมสไตล์ของ Splide -->
<style>
    /* .{{$section}} .splide__arrows {
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
    } */
     #{{$section}}-thumbnail .splide__slide {
        border-radius: 8px;
        
     }
     #{{$section}}-thumbnail .splide__slide.is-active {
        border-radius: 8px;
        border: 3px solid #4285f4;
     }
</style>
@endpush

<!-- ส่วนของ Carousel สำหรับมือถือ -->
<section class="block splide {{$section}}" id="{{$section}}-main">
    <div class="splide__track">
        <ul class="splide__list">
            {{$slot}}
        </ul>
    </div>
</section>
<section class="block splide {{$section}} mt-5 sm:mt-10 px-5" id="{{$section}}-thumbnail">
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
        var main = new Splide( '#{{$section}}-main', {
          type       : 'fade',
          heightRatio : 0.5,
          pagination : false,
          arrows     : true,
          cover      : true,
        } );

        var thumbnails = new Splide( '#{{$section}}-thumbnail', {
          rewind          : true,
          fixedWidth      : 104,
          fixedHeight     : 58,
          isNavigation    : true,
          gap             : 10,
          pagination      : false,
          arrows     : false,
          cover           : true,
          dragMinThreshold: {
            mouse: 4,
            touch: 10,
          },
          breakpoints : {
            640: {
              fixedWidth  : 66,
              fixedHeight : 38,
            },
          },
        } );

        main.sync( thumbnails );
        main.mount();
        thumbnails.mount();
    });
</script>
@endpush