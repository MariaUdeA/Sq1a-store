@if($products->count()>0)
    <section class="products w-full box-border flex flex-col items-start justify-start p-6"
            x-data="{columns:4}"
             x-init="()=>{
            // Set initial column value based on window width
            if (window.innerWidth < 640) {
                columns = 1;
            } else if (window.innerWidth < 768) {
                columns = 3;
            } else {
                columns = 4;
            }

            // Listen for resize event and adjust columns
            window.addEventListener('resize', () => {
                if (window.innerWidth < 640) {
                    columns = 1;
                } else if (window.innerWidth < 768) {
                    columns = 3;
                } else {
                    columns = 4;
                }
            });
        }">

        <div class="products-header w-full box-border flex flex-row justify-between pb-6">
            {{--<select class=" form-select input-collection border-none bg-transparent font-volkhov font-normal
                            text-base text-left appearance-none !accent-red-600 rounded-none">
                <option disabled>{{__("Select collection")}}</option>
                <option class="font-poppins" value="BS" selected>{{__("Best Selling")}}</option>
                <option class="font-poppins" value="AP">{{__("All products")}}</option>
                <option class="font-poppins" value="NA">{{__("New Arrivals")}}</option>
                <option class="font-poppins" value="AC">{{__("Accessories")}}</option>
            </select>--}}

            {{--Esto aguanta ponerlo en un componente aparte--}}
            <div class="buttons-column-selection w-full flex flex-row flex-nowrap items-start justify-end gap-[6px]">
                <x-store.column-button @click="columns=1" class="col-button hidden sm:block"
                                       x-bind:class="columns!=1 ? 'hover:text-primary bg-offWhite' : 'bg-neutral-200 hover:text-[#000000]'">
                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.16C11.9975 1.35019 11.9209 1.53188 11.7864 1.66637C11.6519 1.80086 11.4702 1.87752 11.28 1.88H0.72C0.529817 1.87752 0.348124 1.80086 0.213633 1.66637C0.0791416 1.53188 0.00248637 1.35019 0 1.16C0.00248637 0.96982 0.0791416 0.788126 0.213633 0.653635C0.348124 0.519144 0.529817 0.442489 0.72 0.440002H11.28C11.4702 0.442489 11.6519 0.519144 11.7864 0.653635C11.9209 0.788126 11.9975 0.96982 12 1.16Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.9975 5.19018 11.9209 5.37188 11.7864 5.50637C11.6519 5.64086 11.4702 5.71751 11.28 5.72H0.72C0.529817 5.71751 0.348124 5.64086 0.213633 5.50637C0.0791416 5.37188 0.00248637 5.19018 0 5C0.00248637 4.80982 0.0791416 4.62812 0.213633 4.49363C0.348124 4.35914 0.529817 4.28249 0.72 4.28H11.28C11.4702 4.28249 11.6519 4.35914 11.7864 4.49363C11.9209 4.62812 11.9975 4.80982 12 5Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.84C11.9975 9.03018 11.9209 9.21187 11.7864 9.34636C11.6519 9.48085 11.4702 9.55751 11.28 9.56H0.72C0.529817 9.55751 0.348124 9.48085 0.213633 9.34636C0.0791416 9.21187 0.00248637 9.03018 0 8.84C0.00248637 8.64981 0.0791416 8.46812 0.213633 8.33363C0.348124 8.19914 0.529817 8.12248 0.72 8.12H11.28C11.4702 8.12248 11.6519 8.19914 11.7864 8.33363C11.9209 8.46812 11.9975 8.64981 12 8.84Z" fill="currentColor"/>
                    </svg>
                </x-store.column-button>
                <x-store.column-button @click="columns=2" class="col-button hidden sm:block"
                                       x-bind:class="columns!=2 ? 'hover:text-primary bg-offWhite' : 'bg-neutral-200 hover:text-[#000000]'">
                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.08011 0C1.27029 0.00248637 1.45198 0.0791416 1.58647 0.213633C1.72097 0.348124 1.79762 0.529817 1.80011 0.72V11.28C1.79762 11.4702 1.72097 11.6519 1.58647 11.7864C1.45198 11.9209 1.27029 11.9975 1.08011 12C0.889925 11.9975 0.708231 11.9209 0.57374 11.7864C0.439249 11.6519 0.362594 11.4702 0.360107 11.28L0.360107 0.72C0.362594 0.529817 0.439249 0.348124 0.57374 0.213633C0.708231 0.0791416 0.889925 0.00248637 1.08011 0Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.9202 0C5.11038 0.00248637 5.29207 0.0791416 5.42656 0.213633C5.56105 0.348124 5.63771 0.529817 5.6402 0.72V11.28C5.63771 11.4702 5.56105 11.6519 5.42656 11.7864C5.29207 11.9209 5.11038 11.9975 4.9202 12C4.73001 11.9975 4.54832 11.9209 4.41383 11.7864C4.27934 11.6519 4.20268 11.4702 4.2002 11.28V0.72C4.20268 0.529817 4.27934 0.348124 4.41383 0.213633C4.54832 0.0791416 4.73001 0.00248637 4.9202 0Z" fill="currentColor"/>
                    </svg>
                </x-store.column-button>
                <x-store.column-button @click="columns=3" class="col-button hidden sm:block"
                                       x-bind:class="columns!=3 ? 'hover:text-primary bg-offWhite' : 'bg-neutral-200 hover:text-[#000000]'">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_4941)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.15994 0C2.35012 0.00248637 2.53182 0.0791416 2.66631 0.213633C2.8008 0.348124 2.87745 0.529817 2.87994 0.72V11.28C2.87745 11.4702 2.8008 11.6519 2.66631 11.7864C2.53182 11.9209 2.35012 11.9975 2.15994 12C1.96976 11.9975 1.78806 11.9209 1.65357 11.7864C1.51908 11.6519 1.44243 11.4702 1.43994 11.28V0.72C1.44243 0.529817 1.51908 0.348124 1.65357 0.213633C1.78806 0.0791416 1.96976 0.00248637 2.15994 0Z" fill="currentColor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00003 0C6.19021 0.00248637 6.37191 0.0791416 6.5064 0.213633C6.64089 0.348124 6.71754 0.529817 6.72003 0.72V11.28C6.71754 11.4702 6.64089 11.6519 6.5064 11.7864C6.37191 11.9209 6.19021 11.9975 6.00003 12C5.80985 11.9975 5.62815 11.9209 5.49366 11.7864C5.35917 11.6519 5.28252 11.4702 5.28003 11.28V0.72C5.28252 0.529817 5.35917 0.348124 5.49366 0.213633C5.62815 0.0791416 5.80985 0.00248637 6.00003 0Z" fill="currentColor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.83987 0C10.0301 0.00248637 10.2117 0.0791416 10.3462 0.213633C10.4807 0.348124 10.5574 0.529817 10.5599 0.72V11.28C10.5574 11.4702 10.4807 11.6519 10.3462 11.7864C10.2117 11.9209 10.0301 11.9975 9.83987 12C9.64969 11.9975 9.468 11.9209 9.33351 11.7864C9.19901 11.6519 9.12236 11.4702 9.11987 11.28V0.72C9.12236 0.529817 9.19901 0.348124 9.33351 0.213633C9.468 0.0791416 9.64969 0.00248637 9.83987 0Z" fill="currentColor"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1_4941">
                                <rect width="12" height="12" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </x-store.column-button>
                <x-store.column-button @click="columns=4" class="col-button hidden md:block"
                                       x-bind:class="columns!=4 ? 'hover:text-primary bg-offWhite' : 'bg-neutral-200 hover:text-[#000000]'">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.666667 0.444443C0.842762 0.446745 1.011 0.517722 1.13553 0.642251C1.26005 0.766779 1.33103 0.935014 1.33333 1.11111V10.8889C1.33103 11.065 1.26005 11.2332 1.13553 11.3577C1.011 11.4823 0.842762 11.5533 0.666667 11.5556C0.490572 11.5533 0.322337 11.4823 0.197808 11.3577C0.0732792 11.2332 0.00230219 11.065 0 10.8889L0 1.11111C0.00230219 0.935014 0.0732792 0.766779 0.197808 0.642251C0.322337 0.517722 0.490572 0.446745 0.666667 0.444443Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22233 0.444443C4.39843 0.446745 4.56666 0.517722 4.69119 0.642251C4.81572 0.766779 4.8867 0.935014 4.889 1.11111V10.8889C4.8867 11.065 4.81572 11.2332 4.69119 11.3577C4.56666 11.4823 4.39843 11.5533 4.22233 11.5556C4.04624 11.5533 3.878 11.4823 3.75347 11.3577C3.62894 11.2332 3.55797 11.065 3.55566 10.8889V1.11111C3.55797 0.935014 3.62894 0.766779 3.75347 0.642251C3.878 0.517722 4.04624 0.446745 4.22233 0.444443Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77775 0.444443C7.95385 0.446745 8.12208 0.517722 8.24661 0.642251C8.37114 0.766779 8.44212 0.935014 8.44442 1.11111V10.8889C8.44212 11.065 8.37114 11.2332 8.24661 11.3577C8.12208 11.4823 7.95385 11.5533 7.77775 11.5556C7.60166 11.5533 7.43342 11.4823 7.30889 11.3577C7.18436 11.2332 7.11339 11.065 7.11108 10.8889V1.11111C7.11339 0.935014 7.18436 0.766779 7.30889 0.642251C7.43342 0.517722 7.60166 0.446745 7.77775 0.444443Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3334 0.444443C11.5095 0.446745 11.6777 0.517722 11.8023 0.642251C11.9268 0.766779 11.9978 0.935014 12.0001 1.11111V10.8889C11.9978 11.065 11.9268 11.2332 11.8023 11.3577C11.6777 11.4823 11.5095 11.5533 11.3334 11.5556C11.1573 11.5533 10.9891 11.4823 10.8646 11.3577C10.74 11.2332 10.6691 11.065 10.6667 10.8889V1.11111C10.6691 0.935014 10.74 0.766779 10.8646 0.642251C10.9891 0.517722 11.1573 0.446745 11.3334 0.444443Z" fill="currentColor"/>
                    </svg>
                </x-store.column-button>
                <x-store.column-button @click="columns=5" class="col-button hidden lg:block"
                                       x-bind:class="columns==5 ? 'bg-neutral-200 hover:text-[#000000]':'hover:text-primary bg-offWhite'">
                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.514286 0.714279C0.650131 0.716055 0.779912 0.770809 0.875977 0.866874C0.972042 0.962939 1.0268 1.09272 1.02857 1.22856V8.77142C1.0268 8.90727 0.972042 9.03705 0.875977 9.13311C0.779912 9.22918 0.650131 9.28393 0.514286 9.28571C0.378441 9.28393 0.24866 9.22918 0.152595 9.13311C0.0565297 9.03705 0.00177598 8.90727 0 8.77142L0 1.22856C0.00177598 1.09272 0.0565297 0.962939 0.152595 0.866874C0.24866 0.770809 0.378441 0.716055 0.514286 0.714279Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25721 0.714279C3.39305 0.716055 3.52283 0.770809 3.6189 0.866874C3.71496 0.962939 3.76972 1.09272 3.77149 1.22856V8.77142C3.76972 8.90727 3.71496 9.03705 3.6189 9.13311C3.52283 9.22918 3.39305 9.28393 3.25721 9.28571C3.12136 9.28393 2.99158 9.22918 2.89551 9.13311C2.79945 9.03705 2.7447 8.90727 2.74292 8.77142V1.22856C2.7447 1.09272 2.79945 0.962939 2.89551 0.866874C2.99158 0.770809 3.12136 0.716055 3.25721 0.714279Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99988 0.714279C6.13573 0.716055 6.26551 0.770809 6.36157 0.866874C6.45764 0.962939 6.51239 1.09272 6.51417 1.22856V8.77142C6.51239 8.90727 6.45764 9.03705 6.36157 9.13311C6.26551 9.22918 6.13573 9.28393 5.99988 9.28571C5.86404 9.28393 5.73426 9.22918 5.63819 9.13311C5.54213 9.03705 5.48737 8.90727 5.4856 8.77142V1.22856C5.48737 1.09272 5.54213 0.962939 5.63819 0.866874C5.73426 0.770809 5.86404 0.716055 5.99988 0.714279Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.7428 0.714279C8.87865 0.716055 9.00843 0.770809 9.10449 0.866874C9.20056 0.962939 9.25531 1.09272 9.25709 1.22856V8.77142C9.25531 8.90727 9.20056 9.03705 9.10449 9.13311C9.00843 9.22918 8.87865 9.28393 8.7428 9.28571C8.60696 9.28393 8.47718 9.22918 8.38111 9.13311C8.28505 9.03705 8.23029 8.90727 8.22852 8.77142V1.22856C8.23029 1.09272 8.28505 0.962939 8.38111 0.866874C8.47718 0.770809 8.60696 0.716055 8.7428 0.714279Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4857 0.714279C11.6216 0.716055 11.7513 0.770809 11.8474 0.866874C11.9435 0.962939 11.9982 1.09272 12 1.22856V8.77142C11.9982 8.90727 11.9435 9.03705 11.8474 9.13311C11.7513 9.22918 11.6216 9.28393 11.4857 9.28571C11.3499 9.28393 11.2201 9.22918 11.124 9.13311C11.028 9.03705 10.9732 8.90727 10.9714 8.77142V1.22856C10.9732 1.09272 11.028 0.962939 11.124 0.866874C11.2201 0.770809 11.3499 0.716055 11.4857 0.714279Z" fill="currentColor"/>
                    </svg>
                </x-store.column-button>
            </div>
        </div>

        <x-store.product-grid :products="$products"
            x-bind:class=" columns == 1 ? 'grid-cols-1' : columns == 2 ? 'grid-cols-2' :
                           columns == 3 ? 'grid-cols-3' : columns == 4 ? 'grid-cols-4' :
                           'grid-cols-5' "
        />
    </section>
@else

    <section class="products w-full h-full box-border flex items-center justify-center p-6 md:min-h-[calc(100dvh-300px)] min-h-0 ">
        <h2 class="filter-title w-full text-3xl font-volkhov font-normal text-black text-center">{{__("No products found.")}}</h2>
    </section>

@endif
