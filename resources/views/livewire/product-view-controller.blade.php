<div class="w-full min-h-[calc(100dvh-111px)] box-border my-auto flex flex-col items-center justify-start">
    <section class="upper-product max-w-7xl w-full box-border my-auto flex flex-col items-center justify-center
                    md:flex-row md:items-start md:justify-start">

        <x-product.image-view :product="$product" />

        <div class="desc-product flex-1 w-full box-border flex flex-col flex-nowrap justify-start items-start gap-5 p-6
                    font-volkhov font-normal text-base text-left">

            <p class="brand title-text w-full text-sm text-[#8A8A8A] uppercase">{{$product->brand}}</p>
            <h1 class="product-name title-text w-full text-3xl capitalize">{{$product->name}}</h1>

            @isset($product->rating)
                <x-product.star-rating :rating="$product->rating"/>
            @endisset

            <div class="product-card_prices flex flex-row justify-start items-center gap-2">
                <span class="product-card_discount-price font-volkhov text-black font-normal text-2xl">$ {{ $product->sale_price ?? $product->price }}</span>  <!--Descuento-->
                @isset($product->sale_price)
                    <span class="product-card_original-price font-jost font-normal text-base text-neutral-400 line-through">$ {{$product->price}}</span>  <!--Original-->
                    <span class="save-percent font-jost font-medium text-xs text-center uppercase text-white
                             py-1 px-3 rounded-[11px] bg-primary
                ">Save {{round(100*(1-($product->sale_price/$product->price)),0)}}%</span> {{--Esto es un cálculo ez--}}
                @endisset
            </div>
            @isset($product->sale_price)
                <x-product.sale-timer/>
            @endisset

            {{--If there are less tha 15, show this--}}
            @if($selectedVariant->stock_quantity<21)
                <x-product.stock-percentage stock='{{$selectedVariant->stock_quantity}}' />
            @endif
            <div class="product-param">
                <h3 class="title-text mb-2"><b>Color:</b> {{$color_name}} </h3>
                <div class="filter-options filter-buttons-colors flex flex-row flex-wrap justify-start align-center gap-2">
                    @foreach($product->colors as $color)
                        <x-product.color-button style="background-color: {{$color}};"
                                                x-bind:x-init="selected = '{{$color}}' == '{{$selectedColor}}' ? true : false "
                                                wire:click="changeVariant('{{$color}}')"
                        />
                    @endforeach
                </div>
            </div>

            <div class="product-param w-full flex flex-col flex-nowrap justify-start items-start gap-3">
                <h3 class="title-text"><b>Size:</b> M</h3>
                <div class="filter-options filter-buttons-size flex flex-row flex-wrap justify-start align-center gap-2">
                    @foreach($colorSizes as $size)
                        <x-store.size-button wire:click="changeVariant(null,'{{$size}}')"
                            @class([
                                'text-neutral-400 hover:text-black' => $selectedSize !== $size,
                                'text-black border-[#000000]' => $selectedSize === $size,
                                ]) >{{$size}}</x-store.size-button>
                    @endforeach
                </div>
            </div>

            <div class="product-param">
                <h3 class="title-text">Quantity</h3>


                <div class="more-and-cart-buttons w-full box-border flex flex-row flex-wrap justify-around items-center
                            gap-5">
                    <div class="more-item-button">
                        <button>-</button>
                        <input type="numeric" placeholder="01" maxlength="2">
                        <button>+</button>
                    </div>
                    <button class="add-to-cart-button flex-grow block text-black border-[1px] border-solid
                                    border-black no-underline cursor-pointer font-volkhov
                                    font-normal text-base p-3 rounded-[5px] ">Add to Cart</button>
                    {{--


.add-to-cart-button:hover{
    color: var(--color-white);
    background-color: var(--color-primary);
    border-color: var(--color-primary);
}

                    --}}
                </div>
            </div>
        </div>
    </section>
    <section class="information-product w-full self-end box-border flex flex-col flex-nowrap justify-center items-start py-14
                    px-10 gap-6 md:w-[40%]">
        <x-product.lower-prod/>
    </section>

    {{--
    <section class="mini-cart">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="mini-cart-content">
            <h1>Shopping Cart</h1>
            <p class="buy-more-text">Buy <span>$122.35</span> more and get <span>free shipping</span></p>
            <article class="product-mini-card">
                <img class="product_image"
                     src="./assets/images/cashmere3.avif"
                     alt="Mini Dress With Ruffled Straps"/>
                <div class="product-details">
                    <h3>Wool and Cashemere Top</h3>
                    <p>Color: Grey</p>
                    <p class="product-price-text">$1600</p>
                    <div class="more-item-button">
                        <button>-</button>
                        <input type="numeric" placeholder="01" maxlength="2">
                        <button>+</button>
                    </div>
                </div>
            </article>

            <section class="product-checkout">
                <div class="complete-checkbox">
                    <input type="checkbox" id="wrap-checkbox" class="square">
                    <label for="wrap-checkbox">For <span>$10.00</span> Please Wrap The Product</label>
                </div>
                <div class="subtotal">
                    <p>Subtotal</p>
                    <p>$100.00</p>
                </div>
                <a class="checkout-btn" role="button" href="./checkout.html">Checkout</button>
                    <a class="view-cart" href="./cart.html">View Cart</a>
            </section>
        </div>
    </section>--}}
</div>
