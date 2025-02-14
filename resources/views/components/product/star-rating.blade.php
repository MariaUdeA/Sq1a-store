<div class="star-rating flex flex-row flex-wrap justify-start items-end gap-0 text-black content-end">
    @for($i=1;$i<=5;$i++)
        @if($i<=$rating)
            <span class="w-4 h-4 bg-cover bg-center"
                  style="background-image: url('data:image/svg+xml,%3Csvg width=\'15\' height=\'15\' viewBox=\'0 0 15 15\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M15 5.54538L9.54964 5.18705L7.49701 0.0303345L5.44439 5.18705L0 5.54538L4.1758 9.09107L2.80553 14.4697L7.49701 11.5042L12.1885 14.4697L10.8183 9.09107L15 5.54538Z\' fill=\'black\'/%3E%3C/svg%3E')"
            >
            </span>
        @else
            <span class="w-4 h-4 bg-cover bg-center"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'15\' height=\'15\' viewBox=\'0 0 15 16\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg clip-path=\'url(%23clip0_1_5529)\'%3E%3Cpath d=\'M15 6.54547L9.55274 6.18723L7.5 1.0304L5.44726 6.18726L0 6.5455L4.17943 10.0884L2.80828 15.4696L7.5 12.5043L12.1917 15.4696L10.8206 10.0886L15 6.54547ZM7.5 11.4646L4.20516 13.547L5.16688 9.77264L2.22155 7.27992L6.05859 7.02788L7.5 3.40684L8.94141 7.0279L12.7829 7.27992L9.83306 9.77241L10.7948 13.547L7.5 11.4646Z\' fill=\'black\'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id=\'clip0_1_5529\'%3E%3Crect width=\'15\' height=\'15\' fill=\'white\' transform=\'translate(0 0.75)\'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E')"
            ></span>
        @endif
    @endfor
    <span class="value font-jost text-base leading-none font-normal ml-2">({{$rating}})</span>
</div>
