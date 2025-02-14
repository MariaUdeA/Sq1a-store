<button {{ $attributes->merge(['type' => 'button', 'class' => '
               "inline-flex items-center w-10 h-10 rounded-md border-solid border-[1px] border-neutral-400 bg-white cursor-pointer
               font-jost text-base
               hover:border-black hover:text-black" ']) }}
    >
    {{ $slot }}
</button>
