<button {{ $attributes->merge(['type' => 'button', 'class' => '
                w-[32px] h-[32px] box-border rounded-sm border-none cursor-pointer
                transition-all ease-linear duration-300 aspect-square
                [&>svg]:w-auto [&>svg]:h-auto [&>svg]:m-auto [&>svg]:object-cover ']) }}
>
    {{ $slot }}
</button>
