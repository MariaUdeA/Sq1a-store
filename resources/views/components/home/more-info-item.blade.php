@props(['ImgUrl','alt','h3','p'])

<div {{ $attributes->merge(['class' => 'flex flex-row justify-end items-stretch gap-3 p-4
                                         w-full xs:w-[45%] lg:w-[22%]']) }}>
    <img class="more-info-picture w-auto h-auto object-contain object-center aspect-square "
         src="{{$ImgUrl}}"
         alt="{{__($alt)}}"/>
    <div class="more-info-text flex flex-1 h-full flex-col justify-start items-start
                font-poppins text-neutral-700 gap-2 overflow-hidden text-pretty text-left">
        <h3 class="text-base font-medium sm:text-xl">{{__($h3)}}</h3>
        <p class="text-sm font-normal sm:text-base">{{__($p)}}</p>
    </div>
</div>
