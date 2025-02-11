<div {{ $attributes->merge(['class' => '
                product-grid w-full box-border grid ']) }}
    >
    @for($i=0;$i<5;$i++)
        <x-store.product-card></x-store.product-card>
    @endfor
</div>

<div class="page-selector">
    <button class="page-number active">1</button>
    <button class="page-number">2</button>
    <button class="page-number">3</button>
    <button class="page-number">»</button>
</div>
