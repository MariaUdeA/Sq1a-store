@props(['id'])

<span class="sold-out-banner absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]
             text-white text-[10px]/[12px] font-jost font-black text-center
             flex items-center justify-center w-12 aspect-square bg-[#B1B1B1] rounded-full"
             x-show="variantStock[currentVariant] == 0" >
    {{__("SOLD OUT")}}
</span>
