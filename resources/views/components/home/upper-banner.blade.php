<div class="ub-bg  w-full flex flex-1 bg-stone-300 box-border">
    <div class="ub-img w-full transition-all ease-in duration-300 box-border flex flex-1 flex-row max-w-7xl
                justify-around content-start overflow-hidden gap-4 p-4">
        <img class="block my-auto w-auto max-h-[1280px] aspect-[308/646]
                    object-cover scale-y-100 -scale-x-100 box-border"
             style="height: calc(0.7 * (100dvh - 111px));"
             src="{{ asset('images/banners/banner_man.png') }}"
             alt="{{__("Classy man on banner")}}"
        />

        <div class="img-text box-border my-auto w-auto flex flex-col items-start justify-center
                    gap-16 text-pretty text-zinc-800 break-words font-roboto transition-all ease-in duration-300">
            <p class="font-normal text-[2rem] text-left ">{{__("HOT DEALS THIS WEEK")}}</p>
            <h1 class="font-bold text-5xl text-left text-[#A86A3D]">{{__("SALE UP 50%")}}<br>{{__("MODERN FURNITURE")}}</h1>
            <x-secondary-button
                class="font-[700] font-roboto text-3xl bg-transparent border-zinc-800 text-zinc-800
                hover:text-red-600 hover:border-red-600 hover:bg-[transparent]">
                {{__("View now")}}
            </x-secondary-button>
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
