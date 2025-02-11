<section class="filters w-3/12 box-border flex flex-col flex-nowrap gap-4 p-4 pt-10 font-volkhov font-normal text-black"
         x-data="{ reportsOpen1: false ,reportsOpen2: false}">

    <h2 class="filter-title text-3xl mb-6">{{__("Filters")}}</h2>

    <h3 class="text-lg">{{__("Size")}}</h3>

    <div class="filter-options filter-buttons-size w-full flex flex-row flex-wrap items-start justify-start gap-2 mb-2">
        @foreach(["XS","S","M","L","XL"] as $size)
            <x-store.size-button class="size-buttons">{{$size}}</x-store.size-button>
        @endforeach
    </div>

    <h3 class="text-lg">{{__("Colors")}}</h3>
    <div class="filter-options filter-buttons-colors w-full flex flex-row flex-wrap items-start justify-start gap-2 mb-2">
        @foreach(["#FF6C6C","#FF7629","#FFF06C","#9BFF6C","#6CFF9E","#6CFFDC","#6CB9FF",
                  "#6CF6FF","#6CA7FF","#6C7BFF","#8A6CFF","#B66CFF","#FC6CFF","#FF6C6C"] as $color)
            <x-product.color-button class="product-color" style="background-color: {{$color}};"></x-product.color-button>
        @endforeach
    </div>

    <h3 class="text-lg">Prices</h3>
    <div class="filter-options filter-buttons-prices w-full flex flex-col flex-nowrap items-start justify-start gap-2 mb-2">
        <x-store.letter-button class="letter-buttons">$0-$50</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">$50-$100</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">$100-$150</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">$150-$200</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">$200-$250</x-store.letter-button>
    </div>

    <x-store.collapsible @click="reportsOpen1 = !reportsOpen1" class="header-button-collapsible"
                         x-bind:class="reportsOpen1 ? 'after:content-arrowUpIcon' : 'after:content-arrowDownIcon'">
        {{__("Brands")}}</x-store.collapsible>
    <div class="filter-options filter-buttons-brand  w-full flex flex-row flex-wrap items-start justify-start gap-2 mb-2"
         x-cloak x-show="reportsOpen1" x-collapse x-collapse.duration.300ms>
        <x-store.letter-button class="letter-buttons">Minimog</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">Retrolie</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">Brook</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">Learts</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">Vagabond</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">Abby</x-store.letter-button>
    </div>

    <x-store.collapsible @click="reportsOpen2 = !reportsOpen2"
                         class="header-button-collapsible"
                         x-bind:class="reportsOpen2 ? 'after:content-arrowUpIcon' : 'after:content-arrowDownIcon'">
        {{ __("Collections") }}
    </x-store.collapsible>
    <div class="filter-options filter-buttons-collections  w-full flex flex-col flex-nowrap items-start justify-start gap-2 mb-2"
         x-cloak x-show="reportsOpen2" x-collapse x-collapse.duration.300ms >
        <x-store.letter-button class="letter-buttons">All products</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">Best Sellers</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">New Arrivals</x-store.letter-button>
        <x-store.letter-button class="letter-buttons">Accessories</x-store.letter-button>
    </div>
</section>
