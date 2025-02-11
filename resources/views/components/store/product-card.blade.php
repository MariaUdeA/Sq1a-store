<article class="product-card flex flex-col items-center justify-center w-full max-w-[20rem] rounded-none border-none justify-self-center p-5 gap-8">
    <a class="w-full " href="">
        <div class="product-card_image-box block max-w-[30rem] w-full overflow-hidden h-auto
                    rounded-none aspect-[3/4] relative">

            <img class="product-card_image aspect-[3/4] h-auto w-full object-cover transition-all duration-500 ease-in-out
                        hover:w-full hover:scale-110"
                 src="https://media.gucci.com/style/DarkGray_Center_0_0_800x800/1722322881/810341_XKEFL_1185_001_100_0000_Light-Wool-and-cashmere-top.jpg"
                 alt="Wool and cashmere top"/>
            <x-store.sold-out-banner/>
        </div>
    </a>

    <div class="product-card_content w-full h-full flex flex-1 flex-col box-border gap-3">
        <a href="" class="no-underline"><h3 class="product-card_title
                w-full font-volkhov font-base text-base text-black text-left text-pretty">
                Wool and cashmere top</h3></a>

        <div class="product-card_prices flex flex-row justify-start flex-wrap items-baseline gap-2 font-jost font-normal text-base">
            <span class="product-card_discount-price sm:text-base text-base text-black">$955.50</span>  <!--Descuento-->

            <span class="product-card_original-price text-black line-through">$ 1,700</span>  <!--Original-->

        </div>
        <div class="product-card_colors flex-1 flex flex-row flex-wrap gap-2"><!--Colores-->
            <x-product.color-button style="background-color: #EB5709;"/>
            <x-product.color-button style="background-color: #D9D9D9;"/>
        </div>
    </div>
</article>
