@php
    function singleQuote($inputString) {
        // Replace all single quotes with a backslash before them
        return str_replace("'", "\\'", $inputString);
    }

    // If there is a brand or category selected, these filters will expand
    $initial_state1= (bool)$brandSelected;
    $initial_state2= (bool)$selectedCategory;



@endphp

<section class="filters w-full md:w-3/12 box-border flex flex-col flex-nowrap gap-4 md:p-4 p-6 pt-10 font-volkhov font-normal text-black
                items-start"
         x-data="{ reportsOpen1: '{{$initial_state1}}' ,reportsOpen2: '{{$initial_state2}}', filterOpen: window.innerWidth > 768 }"
         x-init="window.addEventListener('resize', () => filterOpen = window.innerWidth > 768)"
         >

    <div class="hidden md:flex w-full flex-row justify-between flex-wrap items-end gap-1 py-6">
        <h2 class="filter-title text-3xl">{{__("Filters")}}</h2>
        <button wire:click="clearFilters()" class="text-base text- black font-jost underline hover:text-primary">{{__('Clear Filters')}}</button>
    </div>

    <div class="w-full md:hidden flex items-center justify-center">
        <x-store.collapsible @click="filterOpen = !filterOpen"
                             :class="'text-[30px] md:hidden'"
                             x-bind:class="filterOpen ? 'after:content-arrowUpIcon' : 'after:content-arrowDownIcon'">
            {{ __("Filters") }}
        </x-store.collapsible>
    </div>

    <div class="box-border w-full flex flex-col flex-nowrap gap-4 font-volkhov font-normal text-black"
    x-cloak x-show="filterOpen" x-collapse x-collapse.duration.300ms>
        <button wire:click="clearFilters()" class="md:hidden text-base text- black font-jost underline hover:text-primary">{{__('Clear Filters')}}</button>

        <h3 class="text-lg">{{__("Size")}}</h3>
        {{--Change size--}}
        <div
            class="filter-options filter-buttons-size w-full flex flex-row flex-wrap items-start justify-start gap-2 mb-2">
            @foreach(["XS","S","M","L","XL"] as $size)
                <x-store.size-button wire:click="changeFilter('{{$size}}')"
                    @class([
                        'text-neutral-400 hover:text-black' => $sizeSelected !== $size,
                        'text-black border-black' => $sizeSelected === $size,
                        ]) >{{$size}}</x-store.size-button>
            @endforeach
        </div>

        {{--Color Selection!!--}}
        <h3 class="text-lg">{{__("Colors")}}</h3>
        <div
            class="filter-options filter-buttons-colors w-full flex flex-row flex-wrap items-start justify-start gap-2 mb-2">
            @isset($colorCounts)
                @foreach($colorCounts as $color => $count)
                    <x-product.color-button style="background-color: {{$color}};"
                                            x-bind:x-init="selected = '{{$color}}' == '{{$colorSelected}}' ? true : false "
                                            wire:click="changeFilter(null,null,null,'{{$color}}')"
                    />
                @endforeach
            @endisset
        </div>

        <h3 class="text-lg">Prices</h3>

        {{--Change price--}}
        <div
            class="filter-options filter-buttons-prices w-full flex flex-col flex-nowrap items-start justify-start gap-2 mb-2">
            <x-store.letter-button wire:click="changeFilter(null,[0,50])"
                @class([
                    'text-neutral-400 hover:text-black' => $priceSelected !== ["0","50"],
                    'text-black' => $priceSelected === ["0","50"],
                       ])>$0-$50
            </x-store.letter-button>
            <x-store.letter-button wire:click="changeFilter(null,[50,100])"
                @class([
                       'text-neutral-400 hover:text-black' => $priceSelected !== ["50","100"],
                       'text-black' => $priceSelected === ["50","100"],
                        ])>$50-$100
            </x-store.letter-button>
            <x-store.letter-button wire:click="changeFilter(null,[100,150])"
                @class([
                           'text-neutral-400 hover:text-black' => $priceSelected !== ["100","150"],
                           'text-black' => $priceSelected === [100,150],
                            ])>$100-$150
            </x-store.letter-button>
            <x-store.letter-button wire:click="changeFilter(null,[150,200])"
                @class([
                                       'text-neutral-400 hover:text-black' => $priceSelected !== ["150","200"],
                                       'text-black' => $priceSelected === [150,200],
                                        ])>$150-$200
            </x-store.letter-button>

            <x-store.letter-button wire:click="changeFilter(null,[200,250])"
                @class([
                       'text-neutral-400 hover:text-black' => $priceSelected !== ["200","250"],
                       'text-black' => $priceSelected === ["200","250"],
                        ])>$200-$250
            </x-store.letter-button>

            <x-store.letter-button wire:click="changeFilter(null,[250,null])"
                @class([
     'text-neutral-400 hover:text-black' => $priceSelected !== ["250"],
     'text-black' => $priceSelected === ["250"],
     ])>$250-
            </x-store.letter-button>

        </div>

        {{--Brand selection--}}
        <x-store.collapsible @click="reportsOpen1 = !reportsOpen1" class="header-button-collapsible"
                             x-bind:class="reportsOpen1 ? 'after:content-arrowUpIcon' : 'after:content-arrowDownIcon'">
            {{__("Brands")}}</x-store.collapsible>
        <div
            class="filter-options filter-buttons-brand  w-full flex flex-row flex-wrap items-start justify-start gap-2 mb-2"
            x-cloak x-show="reportsOpen1" x-collapse x-collapse.duration.300ms>
            @isset($brandCounts)
                @foreach($brandCounts as $brand => $count)
                    <x-store.letter-button wire:click="changeFilter(null,null,'{{$brand}}')" @class([
                    'capitalize text-neutral-400 hover:text-black' => $brandSelected !== $brand,
                    'capitalize text-black' => $brandSelected === $brand,
               ])>
                        {{$brand}}</x-store.letter-button>
                @endforeach
            @endisset
        </div>

        {{--Categories Selection--}}
        <x-store.collapsible @click="reportsOpen2 = !reportsOpen2"
                             class="header-button-collapsible"
                             x-bind:class="reportsOpen2 ? 'after:content-arrowUpIcon' : 'after:content-arrowDownIcon'">
            {{ __("Collections") }}
        </x-store.collapsible>

        <div
            class="filter-options filter-buttons-collections  w-full flex flex-col flex-nowrap items-start justify-start gap-2 mb-2"
            x-cloak x-show="reportsOpen2" x-collapse x-collapse.duration.300ms>
            @isset($categories)
                @foreach($categories as $category)
                    <x-store.letter-button
                        wire:click="changeFilter(null,null,null,null,'{{singleQuote($category->name)}}')" @class([
                    'capitalize text-neutral-400 hover:text-black text-left' => $selectedCategory !== $category->name,
                    'capitalize text-black text-left' => $selectedCategory === $category->name,
                ])>{{$category->name}}</x-store.letter-button>
                @endforeach
            @endisset
        </div>
    </div>
</section>

<script>
    isWideScreen: window.innerWidth > 768;
</script>
