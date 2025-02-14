

<div class="ub-bg w-full flex flex-1 bg-stone-300 box-border">
    <div class="ub-img relative w-full sm:h-auto transition-all ease-in duration-300 box-border
                sm:flex sm:flex-1 sm:flex-row max-w-7xl inline-block
                justify-center content-start overflow-y-visible sm:gap-14 p-8"
         style="height: calc(0.75* (100dvh - 111px));"
    >
        <div class="sm:w-auto w-full sm:h-auto top-0 sm:top-auto left-0 sm:left-auto
                    max-h-[1280px] box-border absolute sm:static h-[calc(0.7*100dvh-111px)] md:h-auto"
                    >
            <img class="w-full h-full block my-auto opacity-75
                        sm:opacity-100 sm:relative sm:w-auto aspect-auto
                        object-contain object-center scale-y-100 -scale-x-100 box-border"
                 src="{{ asset('images/banners/banner_man.png') }}"
                 alt="{{__("Classy man on banner")}}"
            />
        </div>

        <div class="img-text relative box-border my-auto w-auto flex flex-col items-center sm:items-start
                    sm:justify-center justify-around h-full
                    gap-8 text-pretty text-zinc-800 break-words font-roboto transition-all ease-in duration-300 z-10">
            <p class="font-normal text-lg sm:text-left text-center}
            [text-shadow:_0_0_5px_rgb(255_255_255_/_1)] sm:[text-shadow:none]">{{__("HOT DEALS THIS WEEK")}}</p>
            <h1 class="font-bold text-5xl sm:text-left text-center text-[#A86A3D]
                       [text-shadow:_0_0_5px_rgb(255_255_255_/_1)] sm:[text-shadow:none]">{{__("SALE UP 50%")}}<br>{{__("MODERN FURNITURE")}}</h1>
            <a href="{{ route('store',['category' => 'discounts']) }}"><x-secondary-button
                class="font-[700] font-roboto bg-white sm:bg-transparent border-zinc-800 text-zinc-800
                hover:text-red-600 hover:border-red-600 hover:bg-white hover:sm:bg-transparent"
                >
                {{__("View now")}}
            </x-secondary-button></a>
        </div>
    </div>
</div>

<div class="py-8 w-full box-border">
    <div class="wrapper hidden w-full lg:flex justify-between items-center gap-4">
        @foreach(collect(File::allFiles('images/brands'))->shuffle() as $image)
            <img src="{{ $image }}" alt="" class="w-full h-auto max-w-[196px]">
        @endforeach
    </div>

    <x-home.marquee class="lg:hidden">
        @foreach(collect(File::allFiles('images/brands')) as $image)
            <img src="{{ $image }}" alt="" class="w-full h-auto max-w-[120px]">
        @endforeach
    </x-home.marquee>
</div>
