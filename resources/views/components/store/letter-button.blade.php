<button {{ $attributes->merge(['type' => 'button', 'class' => '
               "border-none bg-none cursor-pointer p-0 font-poppins text-base font-normal
                hover:text-black focus:text-black" ']) }}
>
    {{ $slot }}
</button>
