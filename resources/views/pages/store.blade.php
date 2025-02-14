<x-guest-layout>
    <main class="w-full flex flex-1 justify-start items-start max-w-7xl min-h-[calc(100dvh-111px)] box-border mx-auto
                md:flex-row flex-col">
        @livewire('store.filters', [
            'sizeSelected' => $size ,
            'priceSelected' => $price,
            'brandSelected' => $brand,
            'colorSelected' => $color,
            'selectedCategory' => $category
        ])

        @livewire('store.products', [
            'size' => $size,
            'price_range'=>$price,
            'color'=>$color,
            'brand'=>$brand,
            'category' => $category,
            'name' => $name
        ])

    </main>
</x-guest-layout>
