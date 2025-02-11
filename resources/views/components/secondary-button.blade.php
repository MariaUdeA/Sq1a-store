<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-6 py-4 bg-red-600 border border-red-600
                            rounded-md font-normal font-poppins text-base text-white capitalize tracking-widest shadow-none
                            hover:bg-[transparent] hover:text-red-600
                            focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:bg-red-600 focus:text-white
                            disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
