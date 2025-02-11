<button
    {{ $attributes->merge(['type' => 'button', 'class' => '
               "w-full border-none bg-transparent cursor-pointer p-0 text-lg text-black text-left
               after:content-arrowDownIcon after:h-4 after:w-4 after:float-right after:ml-1" ']) }}
>
    {{ $slot }}
</button>
