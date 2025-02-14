@props(["products"=>null])
<div {{ $attributes->merge(['class' => '
                product-grid w-full box-border grid ']) }}
    >
    @foreach($products as $product)
        <x-store.product-card :product="$product"/>
    @endforeach
</div>

<div class="mt-10 w-full ">
    {{ $products->appends(request()->query())->links('components.store.link-special') }}
</div>
