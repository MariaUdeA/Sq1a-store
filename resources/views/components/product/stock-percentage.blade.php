@props(['stock'])
<div class="items-in-stock w-full box-border flex flex-col flex-nowrap justify-start items-start gap-2">
    <p class="stock-text font-jost font-normal text-left text-base">Only
        <span class="font-bold">{{$stock}}</span> item(s) left in stock!</p>
    <div class="w-full bg-[#DEDEDE] rounded-[2px] h-2">
        <div class=" bg-primary rounded-[2px] h-2" style="width:{{$stock}}%"></div>
    </div>
</div>
