<div class="images-product w-full max-h-[calc(100dvh-111px)] box-border flex flex-col-reverse flex-nowrap justify-start
            items-center flex-grow overflow-hidden p-6 gap-3 md:w-[30%] md:flex-row md:flex-nowrap md:justify-start
            md:items-start"
    x-data="{image:'{{$product->images[0]}}',onMainImageLoad() {
            if (window.innerWidth > 760) {
                let targetElement = document.querySelector('.main-img');
                let elElement = document.querySelector('.preview-images');

                if (targetElement && elElement) {
                    let targetHeight = targetElement.offsetHeight;
                    elElement.style.height = targetHeight + 'px';
                }
            }
        }
    }">

    <div class="preview-images h-30 w-full box-border flex flex-row flex-nowrap justify-start items-center
                overflow-x-scroll overflow-y-hidden snap-mandatory snap-x scroll-p-[0_16px] gap-2
                md:w-24 md:h-auto md:max-h-full md:flex-col md:flex-nowrap md:justify-start md:items-center
                md:overflow-y-scroll md:overflow-x-hidden md:snap-y }">

        @foreach($product->images as $image)
            <img class="w-[72px] h-[88px] box-border snap-start mini-img block object-cover object-center cursor-pointer"
                       x-on:click="image='{{$image}}'"        src="{{asset($image)}}" alt="{{$product->name}}"/>
        @endforeach

    </div>
        <img class="main-img block box-border max-h-[calc(100dvh-300px)] h-auto w-auto max-w-full object-contain
                    object-[top_center] aspect-auto md:h-full md:w-auto md:max-w-[calc(100%-120px)] md:max-h-full"
             :src="image" alt="{{$product->name}}" @load="onMainImageLoad()"/>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        const a = '.main-img';
        const b = '.preview-images';

        //this is the case for big screens
        //small screens use a different model
        function onMainImageLoad() {
            if (window.innerWidth > 760) {
                matchHeight(a, b); // Set height once the image is loaded
            }
        }

        if (window.innerWidth > 760) {
            matchHeight(a, b); // Set height once the image is loaded
        }

        window.addEventListener('resize', function() {
            if(window.innerWidth > 760){
                matchHeight(a, b); // Reset on window resize
            }
        });

        // Set height of one element to another
        // target: height to match
        // el: element to match to target height
        function matchHeight(target, el) {
            let targetElement = document.querySelector(target);
            let elElement = document.querySelector(el);

            if (targetElement && elElement) {
                let targetHeight = targetElement.offsetHeight;
                elElement.style.height = targetHeight + 'px';
            }
        }
    });

</script>

