<x-guest-layout>
    <main class="main w-full min-h-[calc(100dvh-111px)] box-border flex items-center justify-start">
        @livewire('product-view-controller', [
                'selectedVariant' => $selectedVariant ,
                'product' => $product,
            ])
    </main>
</x-guest-layout>
