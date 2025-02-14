@php
    $stockVariants=$product->variants->pluck('stock_quantity','id')->toArray();
    $stockVariants=json_encode($stockVariants);
    $stockVariants=str_replace('"',"'",$stockVariants);
@endphp

<article x-data="{ currentVariant: {{ count($product->variants) > 0 ? $product->variants[0]->id : 'null' }},
                    variantStock:  {{$stockVariants}} }"
         class="product-card flex flex-col items-center justify-center w-full max-w-[20rem] rounded-none border-none justify-self-center p-5 gap-8">
    <a class="w-full cursor-pointer"  @click="window.location.href = 'product/'+currentVariant ">
        <div class="product-card_image-box block max-w-[30rem] w-full overflow-hidden h-auto
                    rounded-none aspect-[3/4] relative">

            <img class="product-card_image aspect-[3/4] h-auto w-full object-cover transition-all duration-500 ease-in-out
                        hover:w-full hover:scale-110"
                 src="{{$product->images[0]}}"
                 alt="{{$product->name}}"/>


            <div><x-store.sold-out-banner /></div>
        </div>
    </a>

    <div class="product-card_content w-full h-full flex flex-1 flex-col box-border gap-3">
        <a href="" class="no-underline"><h3 class="product-card_title
                w-full font-volkhov font-base text-base text-black text-left text-pretty capitalize">
                {{$product->name}}</h3></a>


        <div class="product-card_prices flex flex-row justify-start flex-wrap items-baseline gap-2 font-jost font-normal text-base">
            <span class="product-card_discount-price sm:text-base text-base text-black">$ {{$product->real_price}}</span>  <!--Descuento-->
            @isset($product->sale_price)
                <span class="product-card_original-price text-black line-through">$ {{$product->price}}</span>  <!--Original-->
            @endisset
        </div>
        @isset($product->variants)
            <div class="product-card_colors flex-1 flex flex-row flex-wrap gap-2"><!--Colores-->
                @foreach($product->variants->unique('color') as $variant)
                    <x-product.color-button
                        @click="currentVariant = {{$variant->id}} "
                        style="background-color: {{$variant->color}};"
                        x-bind:x-init="selected = currentVariant == {{$variant->id}} ? true : false "
                    />
                @endforeach

            </div>

            {{--THIS IS HERE FOR DEBUGGING REASONS, FEEL FREE TO UNCOMMENT IT IN CASE OF TESTING--}}
{{--            <div class="flex flex-row justify-start gap-1">--}}
{{--                @foreach($product->sizes as $size)--}}
{{--                    <div>{{$size}}</div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div>{{$product->brand}}</div>--}}
{{--            <div class="flex flex-row flex-wrap">--}}
{{--                @foreach($product->categories as $cat)--}}
{{--                    <div>{{$cat->name}}</div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

        @endisset
    </div>
</article>
