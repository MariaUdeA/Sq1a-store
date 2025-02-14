<button x-data="{ selected: false }"
        x-bind:class="{
        'shadow-[0px_0px_0px_1px_rgba(0,_0,_0,_1)] md:border-[1.5px] border-[3px] border-white': selected == true,
        'hover:shadow-[2px_2px_16px_0px_rgba(0,_0,_0,_0.4)]': selected == false,
    }"
        {{ $attributes->merge(['type' => 'button', 'class' => 'h-5 w-5 border-solid rounded-full md:h-6 md:w-6 aspect-square cursor-pointer transition-all duration-300',
])}}
>
{{ $slot }}
</button>
