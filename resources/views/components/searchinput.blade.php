<div class="bg-primary-50 rounded-lg px-5 hidden md:block fixed md:static z-50 md:w-full w-[90%] left-[5%]" id="searchinput">
    <div class="flex flex-col justify-center align-middle w-full items-center content-center py-5">
        <div class="font-semibold text-center text-xl">ค้นหาผลิตภัณฑ์</div>
        <div class="py-5 flex flex-col md:flex-row w-full md:w-auto ">
            <div class="relative mb-5 mx-2">
                <select name="band" id="band" class="inputselect w-full">
                    <option value="">เลือกแบรนด์</option>
                </select>
                <div class="absolute top-[12px] left-[15px]">
                    <img src="{{asset('assets/images/icon/band.svg')}}" alt="" srcset="">
                </div>
            </div>
            <div class="relative mb-5 mx-2">
                <select name="band" id="band" class="inputselect disabled w-full" disabled>
                    <option value="">เลือกผลิตภัณฑ์</option>
                </select>
                <div class="absolute top-[12px] left-[15px]">
                    <img src="{{asset('assets/images/icon/filter.svg')}}" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row ">
            <button class="bg-primary py-3 px-32 md:px-40 text-white rounded-lg font-bold">
                ค้นหา
            </button>
            <button class="text-abbey py-3 px-5">
                <div class="flex align-middle justify-center items-center">
                    รีเซ็ต
                <img class="mx-2" src="{{asset('assets/images/icon/reset.svg')}}" alt="" srcset="">
                </div>
            </button>
        </div>
    </div>
</div>
<div class="flex flex-col md:flex-row px-5 md:hidden">
    <button class="bg-primary py-3 px-4 text-white rounded-lg font-bold w-full clicktosearch">
        ค้นหารถยนต์แบบละเอียด
    </button>
</div>

<!-- Backdrop -->
<div id="backdrop" class="fixed inset-0 bg-black opacity-50 hidden z-40"></div>

@push('script')
    <script>
        $(document).ready(function() {
            $('.clicktosearch').click(function() {
                $('#searchinput').slideToggle('slow');
                $('#backdrop').fadeToggle('slow');
            });

            $('#backdrop').click(function() {
                $('#searchinput').fadeOut('slow');
                $('#backdrop').fadeOut('slow');
            });
        });
    </script>
@endpush