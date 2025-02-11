<x-guest-layout>
    <main class="flex flex-1 flex-col justify-center items-center">
        <div class="w-full flex-1 flex-col justify-items-center min-h-[calc(100dvh-111px)]">
            <x-home.upper-banner/>
        </div>

        <div class="bg-neutral-50 py-20 box-border">
            <livewire:recommended-products-section/>
        </div>

        <section class="lower-banner w-full relative flex box-border justify-center items-center">
            <x-home.lower-banner/>
        </section>

        <section class="more-info flex flex-row flex-wrap justify-start items-center py-10 gap-4 w-full max-w-7xl sm:justify-center xs:gap-6 xs:py-20">
            <x-home.more-info/>
        </section>
    </main>
</x-guest-layout>
