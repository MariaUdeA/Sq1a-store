<div class="more-info-buttons w-full box-border flex flex-row flex-wrap justify-start items-center gap-6">
    <button class="compare-btn info-btn font-jost text-base font-normal text-left
                    bg-transparent self-center border-none text-black hover:text-primary">{{__('Compare')}}</button>
    <button class="question-btn info-btn font-jost text-base font-normal text-left
                   bg-transparent self-center border-none text-black hover:text-primary">{{__('Ask a Question')}}</button>
    <button class="share-btn info-btn font-jost text-base font-normal text-left
    bg-transparent self-center border-none text-black hover:text-primary">{{__('Share')}}</button>
</div>


<div class="delivery-time w-full flex flex-row flex-wrap justify-start gap-4">
    <span class="delivery-time-text title-text text-base font-volkhov w-fit font-bold">Estimated delivery: </span>
    <span class="delivery-time-dates font-jost text-base text-left">Jul 30 - Aug 03</span>
</div>



<p class="Shipping-info title-text text-base font-volkhov w-fit font-normal"><b>Free Shipping & Returns:</b> On all orders over $75</p>

<img class="payment-methods w-full box-border object-contain max-h-6 mb-6" src="{{asset('images/payment-methods.png')}}"/>

<p class="guaranteed-checkout w-full title-text text-base font-volkhov font-normal text-center">Guarantee safe & secure checkout</p>

{{--

.info-btn::before{
content: "";
display: inline-block;
width: 2rem;
height: 2rem;
margin-right: 0.5rem;
background-size: contain;
background-repeat: no-repeat;
}

.compare-btn::before{
background-image: url("data:image/svg+xml,%3Csvg width='14' height='19' viewBox='0 0 14 19' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.90601 14.5H4.18726V1.375C4.18726 1.20924 4.12141 1.05027 4.0042 0.933058C3.88699 0.815848 3.72802 0.75 3.56226 0.75H2.93726C2.7715 0.75 2.61253 0.815848 2.49532 0.933058C2.37811 1.05027 2.31226 1.20924 2.31226 1.375V14.5H0.593509C0.501916 14.5 0.412315 14.5267 0.335777 14.5771C0.25924 14.6274 0.199119 14.699 0.162843 14.7831C0.126567 14.8672 0.115726 14.9601 0.131658 15.0503C0.147591 15.1405 0.1896 15.224 0.252494 15.2906L2.90874 18.1031C2.95255 18.1495 3.00536 18.1864 3.06393 18.2116C3.1225 18.2368 3.1856 18.2498 3.24937 18.2498C3.31314 18.2498 3.37624 18.2368 3.43481 18.2116C3.49338 18.1864 3.54618 18.1495 3.58999 18.1031L6.24624 15.2906C6.30909 15.2241 6.35109 15.1406 6.36704 15.0505C6.383 14.9604 6.37223 14.8675 6.33605 14.7835C6.29987 14.6994 6.23987 14.6277 6.16345 14.5774C6.08703 14.527 5.99754 14.5001 5.90601 14.5ZM13.7466 3.70938L11.0904 0.896875C11.0466 0.850534 10.9938 0.813621 10.9352 0.788392C10.8766 0.763164 10.8135 0.750152 10.7498 0.750152C10.686 0.750152 10.6229 0.763164 10.5643 0.788392C10.5057 0.813621 10.4529 0.850534 10.4091 0.896875L7.75288 3.70938C7.69001 3.77594 7.64801 3.85945 7.63207 3.94962C7.61612 4.03978 7.62693 4.13263 7.66316 4.21672C7.69938 4.30081 7.75944 4.37245 7.83592 4.42279C7.9124 4.47313 8.00195 4.49997 8.09351 4.5H9.81226V17.625C9.81226 17.7908 9.87811 17.9497 9.99532 18.0669C10.1125 18.1842 10.2715 18.25 10.4373 18.25H11.0623C11.228 18.25 11.387 18.1842 11.5042 18.0669C11.6214 17.9497 11.6873 17.7908 11.6873 17.625V4.5H13.406C13.4976 4.49997 13.5871 4.47313 13.6636 4.42279C13.7401 4.37245 13.8001 4.30081 13.8364 4.21672C13.8726 4.13263 13.8834 4.03978 13.8675 3.94962C13.8515 3.85945 13.8095 3.77594 13.7466 3.70938Z' fill='currentColor'/%3E%3C/svg%3E");
}

.question-btn::before{
background-image: url("data:image/svg+xml,%3Csvg width='21' height='21' viewBox='0 0 21 21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10.48 13.7812C9.87592 13.7812 9.38623 14.2709 9.38623 14.875C9.38623 15.4791 9.87592 15.9688 10.48 15.9688C11.084 15.9688 11.5737 15.4791 11.5737 14.875C11.5737 14.2709 11.084 13.7812 10.48 13.7812ZM10.7796 12.8438H10.1546C9.89572 12.8438 9.68584 12.6339 9.68584 12.375V12.3601C9.68584 9.61234 12.7108 9.875 12.7108 8.16449C12.7108 7.38262 12.0171 6.59375 10.4671 6.59375C9.32865 6.59375 8.73799 6.97066 8.15416 7.71453C8.0015 7.90906 7.72236 7.94871 7.51947 7.80734L7.00643 7.44992C6.7867 7.29684 6.73846 6.99012 6.90311 6.77894C7.73225 5.71539 8.716 5.03125 10.4671 5.03125C12.5108 5.03125 14.2733 6.1934 14.2733 8.16449C14.2733 10.7979 11.2483 10.6586 11.2483 12.3601V12.375C11.2483 12.6339 11.0385 12.8438 10.7796 12.8438ZM10.48 2.0625C15.1136 2.0625 18.9175 5.81543 18.9175 10.5C18.9175 15.1598 15.1437 18.9375 10.48 18.9375C5.82201 18.9375 2.04248 15.1655 2.04248 10.5C2.04248 5.84363 5.816 2.0625 10.48 2.0625ZM10.48 0.8125C5.1301 0.8125 0.79248 5.15168 0.79248 10.5C0.79248 15.8514 5.1301 20.1875 10.48 20.1875C15.8299 20.1875 20.1675 15.8514 20.1675 10.5C20.1675 5.15168 15.8299 0.8125 10.48 0.8125Z' fill='black' stroke='black' stroke-width='0.0390625'/%3E%3C/svg%3E%0A");
}

.share-btn::before{
background-image: url("data:image/svg+xml,%3Csvg width='18' height='21' viewBox='0 0 18 21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14.1802 13C15.2218 13 16.1073 13.3646 16.8364 14.0938C17.5655 14.8229 17.9302 15.7084 17.9302 16.75C17.9302 17.7916 17.5655 18.6771 16.8364 19.4062C16.1073 20.1354 15.2218 20.5 14.1802 20.5C13.1386 20.5 12.2531 20.1354 11.5239 19.4062C10.7948 18.6771 10.4302 17.7916 10.4302 16.75C10.4302 16.3594 10.4823 15.9817 10.5864 15.6172L6.7583 13.2344C6.02914 13.9115 5.16976 14.25 4.18018 14.25C3.13851 14.25 2.25309 13.8854 1.52393 13.1562C0.79476 12.4271 0.430176 11.5417 0.430176 10.5C0.430176 9.45834 0.79476 8.57291 1.52393 7.84375C2.25309 7.11459 3.13851 6.75 4.18018 6.75C5.16976 6.75 6.02914 7.08854 6.7583 7.76562L10.5864 5.38281C10.4823 5.01823 10.4302 4.64062 10.4302 4.25C10.4302 3.20834 10.7948 2.32291 11.5239 1.59375C12.2531 0.864584 13.1386 0.5 14.1802 0.5C15.2218 0.5 16.1073 0.864584 16.8364 1.59375C17.5655 2.32291 17.9302 3.20834 17.9302 4.25C17.9302 5.29166 17.5655 6.17709 16.8364 6.90625C16.1073 7.63541 15.2218 8 14.1802 8C13.1906 8 12.3312 7.66146 11.6021 6.98438L7.77393 9.36719C8.0083 10.1224 8.0083 10.8776 7.77393 11.6328L11.6021 14.0156C12.3312 13.3385 13.1906 13 14.1802 13ZM15.5083 2.92188C15.1437 2.55729 14.7011 2.375 14.1802 2.375C13.6593 2.375 13.2167 2.55729 12.8521 2.92188C12.4875 3.28646 12.3052 3.72916 12.3052 4.25C12.3052 4.77084 12.4875 5.21354 12.8521 5.57812C13.2167 5.94271 13.6593 6.125 14.1802 6.125C14.7011 6.125 15.1437 5.94271 15.5083 5.57812C15.8729 5.21354 16.0552 4.77084 16.0552 4.25C16.0552 3.72916 15.8729 3.28646 15.5083 2.92188ZM2.85205 11.8281C3.21664 12.1927 3.65934 12.375 4.18018 12.375C4.70101 12.375 5.14371 12.1927 5.5083 11.8281C5.87289 11.4635 6.05518 11.0208 6.05518 10.5C6.05518 9.97916 5.87289 9.53646 5.5083 9.17188C5.14371 8.80729 4.70101 8.625 4.18018 8.625C3.65934 8.625 3.21664 8.80729 2.85205 9.17188C2.48746 9.53646 2.30518 9.97916 2.30518 10.5C2.30518 11.0208 2.48746 11.4635 2.85205 11.8281ZM12.8521 18.0781C13.2167 18.4428 13.6593 18.625 14.1802 18.625C14.7011 18.625 15.1437 18.4428 15.5083 18.0781C15.8729 17.7135 16.0552 17.2709 16.0552 16.75C16.0552 16.2291 15.8729 15.7865 15.5083 15.4219C15.1437 15.0573 14.7011 14.875 14.1802 14.875C13.6593 14.875 13.2167 15.0573 12.8521 15.4219C12.4875 15.7865 12.3052 16.2291 12.3052 16.75C12.3052 17.2709 12.4875 17.7135 12.8521 18.0781Z' fill='black'/%3E%3C/svg%3E%0A");
}

--}}
