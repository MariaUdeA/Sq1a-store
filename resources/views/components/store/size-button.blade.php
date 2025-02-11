<button {{ $attributes->merge(['type' => 'button', 'class' => '
               "inline-flex items-center w-10 h-10 rounded-md border-solid border-[1px] border-neutral-400 bg-white cursor-pointer
               font-jost text-base text-neutral-400
               hover:border-black hover:text-black
               selected:text-white selected:bg-neutral-400" ']) }}
    >
    {{ $slot }}
</button>
