<button {{ $attributes->merge(['type' => 'button', 'class' => '"h-5 w-5 border-solid border-[1px] border-transparent rounded-full
                md:border-[1.5px] md:h-6 md:w-6
               aspect-square cursor-pointer transition-all duration-300
               hover:shadow-[2px_2px_16px_0px_rgba(0,_0,_0,_0.4)]
               selected:shadow-[0px_0px_0px_1px_rgba(0,_0,_0,_1)] selected:border-[3px] selected:border-white']) }}>
    {{ $slot }}
</button>
