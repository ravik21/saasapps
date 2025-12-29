<section id=information
    class="relative grid grid-cols-12 grid-rows-auto gap-x-6 gap-y-8 md:gap-y-18 py-16 md:py-28 border-t border-gray-300"
    x-data="features(4)">
    <h2 class="col-span-12 flex items-center text-heading-mobile-sm md:text-heading-md font-sans-heading">
        <svg class="mr-4 size-12 flex-shrink-0 rounded-12 p-2 bg-gray-900 text-gray-100" viewBox="0 0 32 32" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_20164_3404)">
                <path
                    d="M12.1251 6.70953C13.5523 6.07985 14.266 5.76501 15.0074 5.64064C15.6645 5.53041 16.3355 5.53041 16.9926 5.64064C17.734 5.76501 18.4477 6.07985 19.8749 6.70953L26.3638 9.57226C28.4634 10.4986 29.5133 10.9617 29.8353 11.6083C30.115 12.1699 30.115 12.8301 29.8353 13.3917C29.5133 14.0383 28.4634 14.5014 26.3638 15.4277L19.8749 18.2905C18.4477 18.9201 17.734 19.235 16.9926 19.3594C16.3355 19.4696 15.6645 19.4696 15.0074 19.3594C14.266 19.235 13.5523 18.9201 12.1251 18.2905L5.6362 15.4277C3.53656 14.5014 2.48675 14.0383 2.16469 13.3917C1.88498 12.8301 1.88498 12.1699 2.16469 11.6083C2.48675 10.9617 3.53656 10.4986 5.6362 9.57226L12.1251 6.70953Z"
                    stroke="currentColor" stroke-width="2" />
                <path d="M7 16V21C7 23.7614 11.0294 26 16 26C20.9706 26 25 23.7614 25 21V16" stroke="currentColor"
                    stroke-width="2" />
                <path d="M1 18C1 18.5523 1.44772 19 2 19C2.55228 19 3 18.5523 3 18H1ZM1 13V18H3V13H1Z"
                    fill="currentColor" />
            </g>
            <defs>
                <clipPath id="clip0_20164_3404">
                    <rect width="32" height="32" fill="white" />
                </clipPath>
            </defs>
        </svg>
        Information &amp; Training
    </h2>
    <nav class="hidden lg:block lg:col-span-3">
        <ul class="sticky top-24 pb-24">
            <li>
                <a href="features.html#onboarding"
                    class="block transition ease-out duration-150 relative w-full text-left py-3 text-heading-2xs font-sans-heading border-b"
                    :class="{'border-gray-900 before:transition-colors before:ease-out before:duration-150 before:absolute before:h-4 before:w-px before:-bottom-[3px] before:right-[64px] before:bg-gray-900 before:rotate-[45deg] after:transition-colors after:ease-out after:duration-150 after:absolute after:h-4 after:w-px after:-bottom-[14px] after:right-[32px] after:bg-gray-900 after:-rotate-[45deg]': activeIndex == 0, 'text-gray-700 border-gray-100 hover:text-gray-800': activeIndex != 0 }">
                    Onboarding
                </a>
            </li>
            <li>
                <a href="features.html#courses"
                    class="block transition ease-out duration-150 relative w-full text-left py-3 text-heading-2xs font-sans-heading border-b"
                    :class="{'border-gray-900 before:transition-colors before:ease-out before:duration-150 before:absolute before:h-4 before:w-px before:-bottom-[3px] before:right-[64px] before:bg-gray-900 before:rotate-[45deg] after:transition-colors after:ease-out after:duration-150 after:absolute after:h-4 after:w-px after:-bottom-[14px] after:right-[32px] after:bg-gray-900 after:-rotate-[45deg]': activeIndex == 1, 'text-gray-700 border-gray-100 hover:text-gray-800': activeIndex != 1 }">
                    Courses
                </a>
            </li>
            <li>
                <a href="features.html#handbooks"
                    class="block transition ease-out duration-150 relative w-full text-left py-3 text-heading-2xs font-sans-heading border-b"
                    :class="{'border-gray-900 before:transition-colors before:ease-out before:duration-150 before:absolute before:h-4 before:w-px before:-bottom-[3px] before:right-[64px] before:bg-gray-900 before:rotate-[45deg] after:transition-colors after:ease-out after:duration-150 after:absolute after:h-4 after:w-px after:-bottom-[14px] after:right-[32px] after:bg-gray-900 after:-rotate-[45deg]': activeIndex == 2, 'text-gray-700 border-gray-100 hover:text-gray-800': activeIndex != 2 }">
                    Handbooks
                </a>
            </li>
            <li>
                <a href="features.html#news"
                    class="block transition ease-out duration-150 relative w-full text-left py-3 text-heading-2xs font-sans-heading border-b"
                    :class="{'border-gray-900 before:transition-colors before:ease-out before:duration-150 before:absolute before:h-4 before:w-px before:-bottom-[3px] before:right-[64px] before:bg-gray-900 before:rotate-[45deg] after:transition-colors after:ease-out after:duration-150 after:absolute after:h-4 after:w-px after:-bottom-[14px] after:right-[32px] after:bg-gray-900 after:-rotate-[45deg]': activeIndex == 3, 'text-gray-700 border-gray-100 hover:text-gray-800': activeIndex != 3 }">
                    News
                </a>
            </li>
        </ul>
    </nav>
    <ul class="col-span-12 lg:col-span-8 lg:col-start-5 space-y-20 md:space-y-32">
        <li id="onboarding" x-ref="item0" data-index="0">
            <h3 class="mb-4 text-heading-xs md:text-heading-sm font-sans-heading">
                Onboarding. <span class="text-gray-700">Automated.</span>
            </h3>
            <p class="text-body-md md:text-body-lg md:w-3/5 mb-7">
                Set up once and our powerful targeting system will automatically generate onboarding flows that
                perfectly
                match each employee&#039;s specific role.
            </p>
            <ul class="py-7 md:py-9 space-y-5 border-t border-gray-300">
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2H12M15 2H12M12 2V5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 8.5V14L15.5 17.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M18.5 7.7749C16.8618 6.06474 14.5552 4.99987 12 4.99987C7.02944 4.99987 3 9.02931 3 13.9999C3 18.9704 7.02944 22.9999 12 22.9999C16.9706 22.9999 21 18.9704 21 13.9999C21 11.5845 20.0485 9.39143 18.5 7.7749ZM18.5 7.7749L21 5.2749M21 5.2749L22 6.2749M21 5.2749L20 4.2749"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Set onboarding deadlines
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 13.9999V13.9999C12 12.3431 10.6569 11 9.00014 11L5 11C3.34317 11 2.00006 12.3432 2.00013 14V14"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7 8C8.38071 8 9.5 6.88071 9.5 5.5C9.5 4.11929 8.38071 3 7 3C5.61929 3 4.5 4.11929 4.5 5.5C4.5 6.88071 5.61929 8 7 8Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M22 13.9999V13.9999C22 12.3431 20.6569 11 19.0001 11L15 11C13.3432 11 12.0001 12.3432 12.0001 14V14"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M17 8C18.3807 8 19.5 6.88071 19.5 5.5C19.5 4.11929 18.3807 3 17 3C15.6193 3 14.5 4.11929 14.5 5.5C14.5 6.88071 15.6193 8 17 8Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 21L5 21M22 21L15 21M5 21L8 18M5 21L15 21M15 21L18 18" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Tailor onboarding for each role or departments
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.1111 4H18C20.2091 4 22 5.79086 22 8V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V11"
                            stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path
                            d="M8 18H16C17.1046 18 18 17.1046 18 16C18 14.8954 17.1046 14 16 14H8C6.89543 14 6 14.8954 6 16C6 17.1046 6.89543 18 8 18Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M14.5753 4.94822C14.84 5.27239 14.84 5.72761 14.5753 6.05178C13.5939 7.2534 11.0203 10 8 10C4.97968 10 2.40614 7.2534 1.42475 6.05178C1.15999 5.72761 1.15999 5.27239 1.42475 4.94822C2.40614 3.7466 4.97968 1 8 1C11.0203 1 13.5939 3.7466 14.5753 4.94822Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M9 5.5C9 6.05228 8.55228 6.5 8 6.5C7.44772 6.5 7 6.05228 7 5.5C7 4.94772 7.44772 4.5 8 4.5C8.55228 4.5 9 4.94772 9 5.5Z"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        HQ and managers have full overview of everyone&#039;s status and progress
                    </p>
                </li>
            </ul>
            <ul
                class="relative h-128 md:h-140 flex md:grid grid-cols-2 grid-rows-2 -mx-8 md:mx-0 px-8 md:px-0 overflow-x-scroll snap-x snap-mandatory md:rounded-24 md:bg-gray-200 md:overflow-hidden md:border-hairline md:border-gray-400 scrollbar-none">
                <li
                    class="w-full flex-shrink-0 snap-center col-span-1 row-span-2 rounded-l-24 bg-gray-200 border-y-hairline border-l-hairline border-gray-400 md:border-none overflow-hidden before:absolute before:inset-y-0 before:left-full before:bg-gray-200 before:w-[calc(100%-4rem)] before:-ml-8 before:border-y-hairline before:border-r-hairline before:border-gray-400 before:rounded-r-24 md:before:hidden">
                    <div
                        class="relative w-60 md:w-68 mx-auto flex flex-col bg-gray-100 h-full rounded-t-32 md:rounded-t-36 mt-10 md:mt-16 card-bumped-highlighted">
                        <span class="relative block mt-2.5 w-22 h-6 flex-shrink-0 mx-auto bg-gray-300 rounded-full"
                            aria-hidden="true">
                        </span>
                        <div class="p-4 mt-5 border-b-hairline border-gray-300">
                            <h3 class="text-ui-17-semibold tracking-[-2%] mb-2.5" title="Onboarding">
                                Onboarding
                            </h3>
                            <div class="flex items-center">
                                <div class="flex items-center border-hairline border-gray-400 rounded-full p-0.25">
                                    <p class="pl-1.5 pr-1 text-ui-8 text-gray-700">
                                        0 / 4
                                    </p>
                                    <svg class="size-4 p-0.5 rounded-full text-gray-900 bg-gray-300 "
                                        viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.6665 15.4667L13.6665 22.6667L25.3332 10.6667" stroke="currentColor"
                                            stroke-width="2.28571" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <p class="flex ml-1 text-ui-10 text-gray-700">
                                    <span>
                                        Completed
                                    </span>
                                    <span class="mx-1">
                                        •
                                    </span>
                                    <span>
                                        7 days left
                                    </span>
                                </p>
                            </div>
                            <div class="flex space-x-4 mt-4">
                                <svg class="size-7 flex-shrink-0 text-gray-900 " viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.9262 23.1416L29.4262 13.6153C29.9784 12.6587 29.6507 11.4355 28.6941 10.8832V10.8832C27.7375 10.3309 26.5143 10.6587 25.9621 11.6153L20.4621 21.1416M21.9621 18.5435L27.4621 9.01721C28.0143 8.06062 27.6866 6.83744 26.73 6.28516V6.28516C25.7734 5.73287 24.5502 6.06062 23.998 7.01721L18.998 15.6775M17.498 18.2755L21.998 10.4813C22.5502 9.52472 22.2225 8.30154 21.2659 7.74926V7.74926C20.3093 7.19697 19.0861 7.52472 18.5339 8.48131L12.4089 19.0901M24.9262 21.4095L27.9262 16.2134C28.4784 15.2568 29.7016 14.929 30.6582 15.4813V15.4813C31.6148 16.0336 31.9425 17.2568 31.3903 18.2134L25.8903 27.7396L24.4146 30.8195C22.1936 35.4546 16.4431 37.1396 12.0719 34.4361L11.8546 34.3018C8.38225 32.1542 6.36942 28.2735 6.61404 24.198V24.198C6.66178 23.4027 6.77794 22.6129 6.96124 21.8376L7.43446 19.8358C7.73463 18.5661 7.86361 17.2619 7.81795 15.9579L7.7934 15.2569C7.7531 14.1058 8.61527 13.1219 9.76175 13.0108V13.0108C10.9876 12.8919 12.0684 13.8113 12.1477 15.0403L12.4089 19.0901M12.5829 21.7887L12.4089 19.0901"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M7.62354 7.3784C8.82888 5.95735 12.0092 2.98225 15.0876 2.4502"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M34.3859 27.7516C35.4465 26.2195 37.4971 22.3776 37.2143 19.2663"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                                <p class="text-ui-11-normal leading-[15px]">
                                    Welcome <strong class="font-semibold">Martin</strong>, here is your
                                    personalized onboarding flow.
                                </p>
                            </div>
                        </div>
                        <ol class="onboarding-list px-4">
                            <li>
                                <p class="onboarding-item flex items-center pt-4 pb-3 text-ui-12">
                                    Read the handbook
                                </p>
                                <div
                                    class="relative flex -mx-7 md:-mx-10 p-1 rounded-12 card-hovering bg-gray-100 z-10">
                                    <div
                                        class="w-2/5 aspect-[1/1] md:aspect-[128/148] flex-shrink-0 rounded-8 border-hairline border-gray-900/10 bg-gray-300 overflow-hidden">
                                        <picture>
                                            <source media="(min-width: 768px)"
                                                srcset="/assets/imgs/features_onboarding_highlighted_md@1x.webp 1x, /assets/imgs/features_onboarding_highlighted_md@2x.webp 2x, /assets/imgs/features_onboarding_highlighted_md@3x.webp 3x">
                                            <img src="assets/imgs/features_onboarding_highlighted_sm.webp.html"
                                                srcset="assets/imgs/features_onboarding_highlighted_sm@1x.webp 1x, assets/imgs/features_onboarding_highlighted_sm@2x.webp 2x, assets/imgs/features_onboarding_highlighted_sm@3x.webp 3x"
                                                class="object-cover w-full h-full select-none" loading="lazy"
                                                draggable="false" alt="">
                                        </picture>
                                    </div>
                                    <div class="flex-1 flex flex-col pl-3 md:pl-4 pr-1 py-1.5">
                                        <h4 class="flex flex-col mb-1.5">
                                            <span class="mb-2.5 text-ui-8 text-gray-700 tracking-[8%] uppercase">
                                                Handbook
                                            </span>
                                            <span class="text-ui-13-semibold">
                                                Employee handbook
                                            </span>
                                        </h4>
                                        <p class="flex-1 text-ui-11-normal text-gray-800 leading-[15px]">
                                            Read about our history and values
                                        </p>
                                        <p class="text-ui-11-normal text-gray-600">
                                            ~ 6 mins of reading
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="onboarding-item flex items-center py-4 text-ui-12">
                                    Pass the course
                                </p>
                                <div
                                    class="relative flex p-1.5 h-32 rounded-12 bg-gray-100 border-hairline border-gray-900/10">
                                    <div class="w-2/5 aspect-[128/148] rounded-8 bg-gray-300">
                                    </div>
                                    <div class="flex-1 ml-3 py-1.5">
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2.5 flex-1" aria-hidden="true">
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 40%;">
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2 flex-1" aria-hidden="true">
                                            <span
                                                class="relative h-3 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 55%;">
                                            </span>
                                            <span
                                                class="relative h-3 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 45%;">
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 flex-1" aria-hidden="true">
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 20%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 40%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 20%;">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        <div class="absolute bottom-10 md:bottom-16 -left-1 -right-1 h-48 -mb-1 bg-gradient-to-b from-transparent to-gray-200 from-0% to-90%"
                            aria-hidden="true">
                        </div>
                    </div>
                </li>
                <li
                    class="w-full h-1/2 md:size-auto flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mr-hairline isolate z-10">
                    <div class="w-60 md:w-65 mt-4">
                        <div class="flex items-center bg-gray-100 rounded-12 px-3 py-4 card-hovering">
                            <div
                                class="flex-1 relative bg-gray-400 rounded-full h-1.5 before:absolute before:left-0 before:inset-y-0 before:w-[25%] before:bg-gray-800 before:rounded-full">
                            </div>
                            <div class="ml-2 text-ui-11 text-gray-800">
                                2 / 8 Completed
                            </div>
                        </div>
                        <ul
                            class="relative mt-3 px-3 gradient-overlay-to-b before:from-[45%] before:to-[95%] before:z-10">
                            <li class="flex items-center space-x-2 py-2">
                                <svg class="size-5 flex-shrink-0 p-0.5 rounded-6 flex-shrink-0 text-brand-over-500 bg-brand-500"
                                    viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.6665 15.4667L13.6665 22.6667L25.3332 10.6667" stroke="currentColor"
                                        stroke-width="2.28571" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="flex-1 text-ui-13-normal">
                                    Our values and approach
                                </p>
                                <svg class="size-3 flex-shrink-0 text-gray-500" viewBox="0 0 7 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 11.5L6 6.5L1 1.5" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </li>
                            <li class="flex items-center space-x-2 py-2 border-t-hairline border-gray-300">
                                <svg class="size-5 flex-shrink-0 p-0.5 rounded-6 flex-shrink-0 text-brand-over-500 bg-brand-500"
                                    viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.6665 15.4667L13.6665 22.6667L25.3332 10.6667" stroke="currentColor"
                                        stroke-width="2.28571" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="flex-1 text-ui-13-normal">
                                    Your first day
                                </p>
                                <svg class="size-3 flex-shrink-0 text-gray-500" viewBox="0 0 7 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 11.5L6 6.5L1 1.5" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </li>
                            <li class="flex items-center space-x-2 py-2 border-t-hairline border-gray-300">
                                <div class="size-5 flex-shrink-0 rounded-6 border border-gray-500">
                                </div>
                                <p class="flex-1 text-ui-13-normal">
                                    Working together
                                </p>
                                <svg class="size-3 flex-shrink-0 text-gray-500" viewBox="0 0 7 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 11.5L6 6.5L1 1.5" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </li>
                            <li class="flex items-center space-x-2 py-2 border-t-hairline border-gray-300">
                                <div class="size-5 flex-shrink-0 rounded-6 bg-gray-300">
                                </div>
                                <div class="flex flex-wrap gap-y-1.5 -mx-0.5 w-full" aria-hidden="true">
                                    <span
                                        class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                        style="width: 21%;">
                                    </span>
                                    <span
                                        class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                        style="width: 18%;">
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li
                    class="absolute md:static bottom-0 left-full h-[calc(50%+0.5px)] w-[calc(100%-4rem)] md:size-auto -ml-8 mr-16 md:mx-0 flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mb-hairline md:-mr-hairline isolate z-10">
                    <div class="flex flex-col items-center">
                        <div class="grid grid-cols-2 rounded-16 card-bumped-highlighted">
                            <div class="col-span-1 p-3 md:p-4">
                                <p class="flex items-center mb-2 text-ui-10 md:text-ui-11 text-gray-700 tracking-[-1%]">
                                    <svg class="size-5 mr-1.5 flex-shrink-0 text-gray-700" viewBox="0 0 18 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="0.500488" width="16" height="16" rx="8" stroke="currentColor" />
                                        <path d="M5.5625 8.37549L8.14062 11.0005L12.4375 6.62549" stroke="currentColor"
                                            stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Completed
                                </p>
                                <p class="text-ui-20">
                                    256
                                </p>
                            </div>

                            <div class="col-span-1 p-3 md:p-4 border-l-hairline border-gray-400">
                                <p class="flex items-center mb-2 text-ui-10 md:text-ui-11 text-gray-700 tracking-[-1%]">
                                    <svg class="size-5 mr-1.5 flex-shrink-0 text-gray-700" viewBox="0 0 18 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="0.500488" width="16" height="16" rx="8" stroke="currentColor" />
                                        <path d="M5.5625 8.37549L8.14062 11.0005L12.4375 6.62549" stroke="currentColor"
                                            stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Not Completed
                                </p>
                                <p class="text-ui-20">
                                    32
                                </p>
                            </div>
                        </div>

                        <ul class="flex mt-8 -space-x-2 items-center">
                            <li class="-rotate-2 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-10 rounded-10"
                                    src="assets/imgs/avatars/female7_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="rotate-2 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-10 rounded-10"
                                    src="assets/imgs/avatars/male1_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="-rotate-3 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-10 rounded-10"
                                    src="assets/imgs/avatars/female2_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="rotate-1 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-10 rounded-10"
                                    src="assets/imgs/avatars/male6_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="-rotate-2 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-10 rounded-10"
                                    src="assets/imgs/avatars/female6_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="rotate-2 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-10 rounded-10"
                                    src="assets/imgs/avatars/male8_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="-rotate-3 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 hidden md:block size-10 rounded-10"
                                    src="assets/imgs/avatars/female8_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="rotate-1 flex-shrink-0">
                                <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 hidden md:block size-10 rounded-10"
                                    src="assets/imgs/avatars/male4_40@2x.png" loading="lazy" draggable="false"
                                    alt="avatar">
                            </li>
                            <li class="pl-8 md:pl-5 text-ui-sm text-gray-800">
                                + 248
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>

        <li id="courses" x-ref="item1" data-index="1">
            <h3 class="mb-4 text-heading-xs md:text-heading-sm font-sans-heading">
                Courses. <span class="text-gray-700">AI driven.</span>
            </h3>
            <p class="text-body-md md:text-body-lg md:w-3/5 mb-7">
                Ensure employees are up to date and well-trained on important company matters.
            </p>
            <ul class="py-7 md:py-9 space-y-5 border-t border-gray-300">
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 8H5C3.34315 8 2 9.34315 2 11V19C2 20.6569 3.34315 22 5 22H15C16.6569 22 18 20.6569 18 19V13"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M9 13C9 14.1046 8.10457 15 7 15C5.89543 15 5 14.1046 5 13C5 11.8954 5.89543 11 7 11C8.10457 11 9 11.8954 9 13Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M14 13H20C21.6569 13 23 11.6569 23 10V4C23 2.34315 21.6569 1 20 1H14C12.3431 1 11 2.34315 11 4V10C11 11.6569 12.3431 13 14 13Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 4V10M17 4H14V5.09091M17 4H20V5.09091M17 10H18M17 10H16" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M18 18H14C13.4864 18 12.9926 18.1975 12.6207 18.5517L9.57931 21.4483C9.20743 21.8025 8.71355 22 8.2 22H6"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Media rich courses - use images, videos and quizzes
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.5 22H5.5C4.39543 22 3.5 21.1046 3.5 20V20C3.5 18.8954 4.39543 18 5.5 18H20.5"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2.7 20C2.7 20.4418 3.05817 20.8 3.5 20.8C3.94183 20.8 4.3 20.4418 4.3 20H2.7ZM20.5 18L20.9438 18.6656C21.1663 18.5172 21.3 18.2675 21.3 18H20.5ZM20.0562 22.6656C20.4239 22.9107 20.9206 22.8114 21.1656 22.4437C21.4107 22.0761 21.3114 21.5794 20.9438 21.3343L20.0562 22.6656ZM21.3 11.5C21.3 11.0582 20.9418 10.7 20.5 10.7C20.0582 10.7 19.7 11.0582 19.7 11.5H21.3ZM20.0562 17.3343C18.0813 18.651 18.0813 21.349 20.0562 22.6656L20.9438 21.3343C19.9187 20.651 19.9187 19.349 20.9438 18.6656L20.0562 17.3343ZM4.3 20V6H2.7V20H4.3ZM6.5 3.8H9V2.2H6.5V3.8ZM19.7 11.5V18H21.3V11.5H19.7ZM4.3 6C4.3 4.78497 5.28497 3.8 6.5 3.8V2.2C4.40132 2.2 2.7 3.90132 2.7 6H4.3Z"
                            fill="currentColor" />
                        <path d="M15 6.5H20M17.5 9L17.5 4" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="17.5" cy="6.5" r="5.5" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Re-use handbooks to create courses faster
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.6063 4.19793C14.685 3.75864 15.315 3.75864 15.3937 4.19793L16.0153 7.66786C16.4414 10.0462 18.2524 11.9369 20.6103 12.4649L22.9564 12.9902C22.9668 12.9926 22.9668 13.0074 22.9564 13.0098L20.6103 13.5351C18.2524 14.0631 16.4414 15.9538 16.0153 18.3321L15.3937 21.8021C15.315 22.2414 14.685 22.2414 14.6063 21.8021L13.9847 18.3321C13.5586 15.9538 11.7476 14.0631 9.38975 13.5351L7.04358 13.0098C7.03316 13.0074 7.03316 12.9926 7.04358 12.9902L9.38975 12.4649C11.7476 11.9369 13.5586 10.0462 13.9847 7.66786L14.6063 4.19793Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M5.73402 1.46745C5.7877 1.17131 6.2123 1.17131 6.26598 1.46745V1.46745C6.56747 3.13077 7.86923 4.43253 9.53255 4.73402V4.73402C9.82869 4.7877 9.82869 5.2123 9.53255 5.26598V5.26598C7.86923 5.56747 6.56747 6.86923 6.26598 8.53255V8.53255C6.2123 8.82869 5.7877 8.82869 5.73402 8.53255V8.53255C5.43253 6.86923 4.13077 5.56747 2.46745 5.26598V5.26598C2.17131 5.2123 2.17131 4.7877 2.46745 4.73402V4.73402C4.13077 4.43253 5.43253 3.13077 5.73402 1.46745V1.46745Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 18H2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M9 21H2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        One-click AI quiz generation
                    </p>
                </li>
            </ul>
            <ul
                class="relative h-128 md:h-140 flex md:grid grid-cols-2 grid-rows-2 -mx-8 md:mx-0 px-8 md:px-0 overflow-x-scroll snap-x snap-mandatory md:rounded-24 md:bg-gray-200 md:overflow-hidden md:border-hairline md:border-gray-400 scrollbar-none">
                <li
                    class="w-full flex-shrink-0 snap-center col-span-1 row-span-2 rounded-l-24 bg-gray-200 border-y-hairline border-l-hairline border-gray-400 md:border-none overflow-hidden before:absolute before:inset-y-0 before:left-full before:bg-gray-200 before:w-[calc(100%-4rem)] before:-ml-8 before:border-y-hairline before:border-r-hairline before:border-gray-400 before:rounded-r-24 md:before:hidden">
                    <div
                        class="relative w-60 md:w-68 mx-auto flex flex-col bg-gray-100 h-full rounded-t-32 md:rounded-t-36 mt-10 md:mt-16 card-bumped-highlighted">
                        <span class="relative block mt-2.5 w-22 h-6 flex-shrink-0 mx-auto bg-gray-300 rounded-full"
                            aria-hidden="true">
                        </span>
                        <div class="isolate relative min-h-40 flex flex-col justify-end p-4 rounded-t-20 overflow-hidden mt-2.5"
                            url="features_course_sm.webp" urlMd="features_course_md.webp" pill="Course"
                            title="Working in the kitchen">
                            <div class="absolute inset-0">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="/assets/imgs/features_course_md@1x.webp 1x, /assets/imgs/features_course_md@2x.webp 2x, /assets/imgs/features_course_md@3x.webp 3x">
                                    <img src="assets/imgs/features_course_sm.webp.html"
                                        srcset="assets/imgs/features_course_sm@1x.webp 1x, assets/imgs/features_course_sm@2x.webp 2x, assets/imgs/features_course_sm@3x.webp 3x"
                                        class="object-cover w-full h-full select-none" loading="lazy" draggable="false"
                                        alt="">
                                </picture>
                            </div>
                            <p
                                class="self-start relative py-0.75 px-1.5 rounded-full uppercase tracking-[8%] bg-gray-900/20 text-ui-6.5-semibold text-gray-100">
                                Course
                            </p>
                            <h3 class="mt-1.5 relative text-ui-17-semibold text-gray-100">
                                Working in the kitchen
                            </h3>
                        </div>
                        <div class="flex-1 bg-gray-100">
                            <ol class="pl-3 pr-3 py-3 space-y-2">
                                <li class="flex items-center">
                                    <svg class="size-5 mx-0.5 p-1 rounded-6 flex-shrink-0 text-brand-over-500 bg-brand-500 border-hairline border-gray-900/10"
                                        viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.6665 15.4667L13.6665 22.6667L25.3332 10.6667" stroke="currentColor"
                                            stroke-width="2.28571" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div
                                        class="min-w-0 flex-1 ml-3 px-3 py-2.5 bg-gray-100 rounded-14 ring-hairline ring-gray-900/10 shadow-100">
                                        <h4 class="flex flex-col mb-1.5">
                                            <span class="mb-2 text-ui-8 text-gray-700 tracking-[8%] uppercase">
                                                Chapter 1
                                            </span>
                                            <span class="text-ui-13-semibold">
                                                Safety first
                                            </span>
                                        </h4>
                                        <p class="flex-1 text-ui-11-normal text-gray-800 truncate">
                                            How we look after each other.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div
                                        class="size-6 p-1 rounded-6 flex items-center justify-center flex-shrink-0 text-ui-10 text-gray-800 bg-gray-100 ring-hairline ring-gray-900/10 shadow-100">
                                        2
                                    </div>
                                    <div
                                        class="min-w-0 flex-1 ml-3 px-3 py-2.5 bg-gray-100 rounded-14 ring-hairline ring-gray-900/10 shadow-100">
                                        <h4 class="flex flex-col mb-1.5">
                                            <span class="mb-2 text-ui-8 text-gray-700 tracking-[8%] uppercase">
                                                Chapter 2
                                            </span>
                                            <span class="text-ui-13-semibold">
                                                Basic hygiene
                                            </span>
                                        </h4>
                                        <p class="flex-1 text-ui-11-normal text-gray-800 truncate">
                                            How we keep everything clean.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="size-5 mx-0.5 rounded-6 bg-gray-400">
                                    </div>
                                    <div
                                        class="min-w-0 flex-1 ml-3 px-3 py-2.5 bg-gray-100 rounded-14 ring-hairline ring-gray-900/10">
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2.5" aria-hidden="true">
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 28%;">
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-1.5" aria-hidden="true">
                                            <span
                                                class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 14%;">
                                            </span>
                                            <span
                                                class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 31%;">
                                            </span>
                                            <span
                                                class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 22%;">
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 " aria-hidden="true">
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 21%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 9%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 31%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 17%;">
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex items-center">
                                    <div class="size-5 mx-0.5 rounded-6 bg-gray-400">
                                    </div>
                                    <div
                                        class="min-w-0 flex-1 ml-3 px-3 py-2.5 bg-gray-100 rounded-14 ring-hairline ring-gray-900/10">
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2.5" aria-hidden="true">
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 28%;">
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-1.5" aria-hidden="true">
                                            <span
                                                class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 14%;">
                                            </span>
                                            <span
                                                class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 31%;">
                                            </span>
                                            <span
                                                class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 22%;">
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap gap-y-1.5 -mx-0.5 " aria-hidden="true">
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 21%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 9%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 31%;">
                                            </span>
                                            <span
                                                class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                                style="width: 17%;">
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <aside
                                class="-mt-26 relative flex items-center px-3 py-4 -mx-3 md:-mx-6 rounded-12 card-hovering bg-gray-100 z-10">
                                <div
                                    class="flex-1 relative bg-gray-400 rounded-full h-1.5 before:absolute before:left-0 before:inset-y-0 before:w-[25%] before:bg-gray-800 before:rounded-full">
                                </div>
                                <div class="ml-2 text-ui-11 text-gray-800">
                                    1 / 4 Completed
                                </div>
                            </aside>
                        </div>
                        <div class="absolute bottom-10 md:bottom-16 -left-1 -right-1 h-48 -mb-1 bg-gradient-to-b from-transparent to-gray-200 from-0% to-90%"
                            aria-hidden="true">
                        </div>
                    </div>
                </li>
                <li
                    class="w-full h-1/2 md:size-auto flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mr-hairline isolate z-10">
                    <ul class="space-y-5 mt-12">
                        <li>
                            <p class="mb-3 ml-3 text-ui-10 uppercase tracking-[4%]">
                                Passed • 2
                            </p>
                            <ul class="flex space-x-2">
                                <li
                                    class="isolate relative w-30 aspect-[120/88] flex flex-col justify-end p-3 rounded-12 overflow-hidden">
                                    <div class="absolute inset-0">
                                        <picture>
                                            <img src="assets/imgs/features_course_list_1.webp.html"
                                                srcset="assets/imgs/features_course_list_1@1x.webp 1x, assets/imgs/features_course_list_1@2x.webp 2x, assets/imgs/features_course_list_1@3x.webp 3x"
                                                class="object-cover w-full h-full select-none" loading="lazy"
                                                draggable="false" alt="">
                                        </picture>
                                    </div>
                                    <h3 class="relative text-ui-13 text-gray-100">
                                        Restaurant setup
                                    </h3>
                                </li>
                                <li
                                    class="isolate relative w-30 aspect-[120/88] flex flex-col justify-end p-3 rounded-12 overflow-hidden">
                                    <div class="absolute inset-0">
                                        <picture>
                                            <img src="assets/imgs/features_course_list_2.webp.html"
                                                srcset="assets/imgs/features_course_list_2@1x.webp 1x, assets/imgs/features_course_list_2@2x.webp 2x, assets/imgs/features_course_list_2@3x.webp 3x"
                                                class="object-cover w-full h-full select-none" loading="lazy"
                                                draggable="false" alt="">
                                        </picture>
                                    </div>
                                    <h3 class="relative text-ui-13 text-gray-100">
                                        The coffee course
                                    </h3>
                                </li>
                            </ul>
                        </li>
                        <li class="relative gradient-overlay-to-b before:to-[70%] before:z-10">
                            <p class="mb-3 ml-3 text-ui-10 uppercase tracking-[4%]">
                                Not Passed • 4
                            </p>
                            <ul class="flex space-x-2">
                                <li
                                    class="relative w-30 aspect-[120/88] rounded-12 bg-gray-300 border-hairline border-gray-900/10">
                                </li>
                                <li
                                    class="relative w-30 aspect-[120/88] rounded-12 bg-gray-300 border-hairline border-gray-900/10">
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li
                    class="absolute md:static bottom-0 left-full h-[calc(50%+0.5px)] w-[calc(100%-4rem)] md:size-auto -ml-8 mr-16 md:mx-0 flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mb-hairline md:-mr-hairline isolate z-10">
                    <div class="relative">
                        <ul class="w-42 rounded-12 card-bumped-highlighted">
                            <li class="flex items-center p-2">
                                <svg class="size-6 mr-2 flex-shrink-0 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 18.6667H19.5M15.75 4.91669C16.0815 4.58517 16.5312 4.39893 17 4.39893C17.2321 4.39893 17.462 4.44465 17.6765 4.53349C17.891 4.62233 18.0858 4.75254 18.25 4.91669C18.4142 5.08084 18.5444 5.27572 18.6332 5.4902C18.722 5.70467 18.7678 5.93455 18.7678 6.16669C18.7678 6.39884 18.722 6.62871 18.6332 6.84319C18.5444 7.05766 18.4142 7.25254 18.25 7.41669L7.83333 17.8334L4.5 18.6667L5.33333 15.3334L15.75 4.91669Z"
                                        stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="text-ui-13-normal text-gray-700">
                                    Edit
                                </p>
                            </li>
                            <li class="flex items-center px-2 py-2.5 -mx-2 rounded-8 bg-brand-100 card-hovering">
                                <svg class="size-6 mr-2 flex-shrink-0 text-gray-800" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_21584_6021)">
                                        <path
                                            d="M14.4022 6.45812C14.4247 6.35262 14.5753 6.35262 14.5978 6.45812L15.2014 9.28557C15.6223 11.2573 17.1863 12.7834 19.1678 13.1557L20.9564 13.4918C20.9655 13.4935 20.9655 13.5065 20.9564 13.5082L19.1678 13.8443C17.1863 14.2166 15.6223 15.7427 15.2014 17.7144L14.5978 20.5419C14.5753 20.6474 14.4247 20.6474 14.4022 20.5419L13.7986 17.7144C13.3777 15.7427 11.8137 14.2166 9.83217 13.8443L8.04359 13.5082C8.03453 13.5065 8.03453 13.4935 8.04359 13.4918L9.83217 13.1557C11.8137 12.7834 13.3777 11.2573 13.7986 9.28557L14.4022 6.45812Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M6.42624 3.40691C6.44113 3.3248 6.55887 3.3248 6.57376 3.40691C6.85242 4.94434 8.05566 6.14758 9.59309 6.42624C9.6752 6.44113 9.6752 6.55887 9.59309 6.57376C8.05566 6.85242 6.85242 8.05566 6.57376 9.59309C6.55887 9.6752 6.44113 9.6752 6.42624 9.59309C6.14758 8.05566 4.94434 6.85242 3.40691 6.57376C3.3248 6.55887 3.3248 6.44113 3.40691 6.42624C4.94434 6.14758 6.14758 4.94434 6.42624 3.40691Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_21584_6021">
                                            <rect width="20" height="20" fill="white" transform="translate(2 2)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="flex-1 text-ui-14 text-gray-800">
                                    Generate Quiz
                                </p>
                                <svg class="size-3 mr-0.5 flex-shrink-0 text-gray-500" stroke="currentColor"
                                    viewBox="0 0 7 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.09856 13.718L5.67871 7.30583L1.09856 0.893616" stroke-width="1.46565"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </li>
                            <li class="flex items-center p-2">
                                <svg class="size-6 mr-2 flex-shrink-0 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 20H18C19.6569 20 21 18.6569 21 17V7C21 5.34315 19.6569 4 18 4H6C4.34315 4 3 5.34315 3 7V17C3 18.6569 4.34315 20 6 20Z"
                                        stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.5 16L10.5 10" stroke="currentColor" stroke-width="1.33333"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5 16L7.5 14" stroke="currentColor" stroke-width="1.33333"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 16L13.5 12" stroke="currentColor" stroke-width="1.33333"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.5 16L16.5 10" stroke="currentColor" stroke-width="1.33333"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="text-ui-13-normal text-gray-700">
                                    Stats
                                </p>
                            </li>
                            <li class="flex items-center py-2 mx-2 border-t-hairline border-gray-300">
                                <svg class="size-6 mr-2 flex-shrink-0 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 17L12 12M12 12L7 7M12 12L17 7M12 12L7 17" stroke="currentColor"
                                        stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="text-ui-13-normal text-gray-700">
                                    Remove
                                </p>
                            </li>
                        </ul>
                        <aside
                            class="absolute left-full top-0 ml-4 size-28 bg-gray-300 rounded-12 border-4 border-gray-100 ring-hairline ring-gray-900/10 gradient-overlay-to-r before:to-75%"
                            aria-hidden="true">
                        </aside>
                        <aside
                            class="absolute right-full top-0 mr-4 size-28 px-4 flex items-center rounded-12 border-4 border-gray-100 ring-hairline ring-gray-900/10 gradient-overlay-to-l before:to-75% before:z-10"
                            aria-hidden="true">
                            <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-1 flex-1" aria-hidden="true">
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 70%;">
                                </span>
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 30%;">
                                </span>
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 30%;">
                                </span>
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 50%;">
                                </span>
                            </div>
                        </aside>
                    </div>
                </li>
            </ul>
        </li>

        <li id="handbooks" x-ref="item2" data-index="2">
            <h3 class="mb-4 text-heading-xs md:text-heading-sm font-sans-heading">
                Handbooks. <span class="text-gray-700">All information in one place.</span>
            </h3>
            <p class="text-body-md md:text-body-lg md:w-3/5 mb-7">
                Ensure all information is readily accessible and easily searchable for everyone.
            </p>
            <ul class="py-7 md:py-9 space-y-5 border-t border-gray-300">
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.5 22H5.5C4.39543 22 3.5 21.1046 3.5 20V20C3.5 18.8954 4.39543 18 5.5 18H20.5"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2.7 20C2.7 20.4418 3.05817 20.8 3.5 20.8C3.94183 20.8 4.3 20.4418 4.3 20H2.7ZM20.5 18L20.9438 18.6656C21.1663 18.5172 21.3 18.2675 21.3 18H20.5ZM20.0562 22.6656C20.4239 22.9107 20.9206 22.8114 21.1656 22.4437C21.4107 22.0761 21.3114 21.5794 20.9438 21.3343L20.0562 22.6656ZM21.3 11.5C21.3 11.0582 20.9418 10.7 20.5 10.7C20.0582 10.7 19.7 11.0582 19.7 11.5H21.3ZM20.0562 17.3343C18.0813 18.651 18.0813 21.349 20.0562 22.6656L20.9438 21.3343C19.9187 20.651 19.9187 19.349 20.9438 18.6656L20.0562 17.3343ZM4.3 20V6H2.7V20H4.3ZM6.5 3.8H9V2.2H6.5V3.8ZM19.7 11.5V18H21.3V11.5H19.7ZM4.3 6C4.3 4.78497 5.28497 3.8 6.5 3.8V2.2C4.40132 2.2 2.7 3.90132 2.7 6H4.3Z"
                            fill="currentColor" />
                        <path d="M15 6.5H20M17.5 9L17.5 4" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="17.5" cy="6.5" r="5.5" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Give employees instant access to product info, guides and company policies
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5 2H14.5C12.567 2 11 3.567 11 5.5V5.5C11 7.433 12.567 9 14.5 9H15.5M18.5 9H19.5C21.433 9 23 7.433 23 5.5V5.5C23 3.567 21.433 2 19.5 2H18.5"
                            stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path d="M15 5.5H19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M20.5 22H5.5C4.39543 22 3.5 21.1046 3.5 20V20C3.5 18.8954 4.39543 18 5.5 18H20.5"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2.70011 19.9999C2.70011 20.4417 3.05829 20.7999 3.50011 20.7999C3.94194 20.7999 4.30011 20.4417 4.30011 19.9999H2.70011ZM20.5001 17.9999L20.9439 18.6656C21.1664 18.5172 21.3001 18.2674 21.3001 17.9999H20.5001ZM20.0564 22.6656C20.424 22.9106 20.9207 22.8113 21.1658 22.4437C21.4108 22.076 21.3115 21.5794 20.9439 21.3343L20.0564 22.6656ZM6.50009 2L6.50009 2.8H6.50009V2ZM21.3001 9C21.3001 8.55817 20.9419 8.2 20.5001 8.2C20.0583 8.2 19.7001 8.55817 19.7001 9H21.3001ZM3.50011 16.9999H4.30011V16.9999L3.50011 16.9999ZM3.5 4.99993H2.7V4.99994L3.5 4.99993ZM20.0564 17.3343C18.0814 18.6509 18.0814 21.3489 20.0564 22.6656L20.9439 21.3343C19.9189 20.6509 19.9189 19.3489 20.9439 18.6656L20.0564 17.3343ZM19.7001 9V17.9999H21.3001V9H19.7001ZM6.50009 2.8H8.5V1.2H6.50009V2.8ZM6.5001 1.2C4.40145 1.19998 2.7 2.90119 2.7 4.99993H4.3C4.3 3.78495 5.28501 2.79999 6.50009 2.8L6.5001 1.2ZM4.30011 19.9999V16.9999H2.70011V19.9999H4.30011ZM2.7 4.99994L2.70011 16.9999L4.30011 16.9999L4.3 4.99993L2.7 4.99994Z"
                            fill="currentColor" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Reuse and link to handbooks from everywhere in the app
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.5 4H5C3.34315 4 2 5.34315 2 7V18C2 19.6569 3.34315 21 5 21H19C20.6569 21 22 19.6569 22 18V13"
                            stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path d="M6 17L6 11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M9 17L9 15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M15 17L15 16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 17L12 13" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M18 3C17.2089 3 16.4355 3.2346 15.7777 3.67412C15.1199 4.11365 14.6072 4.73836 14.3045 5.46927C14.0017 6.20017 13.9225 7.00444 14.0769 7.78036C14.2312 8.55629 14.6122 9.26902 15.1716 9.82843C15.731 10.3878 16.4437 10.7688 17.2196 10.9231C17.9956 11.0775 18.7998 10.9983 19.5307 10.6955C20.2616 10.3928 20.8864 9.88008 21.3259 9.22228C21.7654 8.56448 22 7.79113 22 7H18L18 3Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        HQ has access to detailed stats on most searched and used handbooks
                    </p>
                </li>
            </ul>
            <ul
                class="relative h-128 md:h-140 flex md:grid grid-cols-2 grid-rows-2 -mx-8 md:mx-0 px-8 md:px-0 overflow-x-scroll snap-x snap-mandatory md:rounded-24 md:bg-gray-200 md:overflow-hidden md:border-hairline md:border-gray-400 scrollbar-none">
                <li
                    class="w-full flex-shrink-0 snap-center col-span-1 row-span-2 rounded-l-24 bg-gray-200 border-y-hairline border-l-hairline border-gray-400 md:border-none overflow-hidden before:absolute before:inset-y-0 before:left-full before:bg-gray-200 before:w-[calc(100%-4rem)] before:-ml-8 before:border-y-hairline before:border-r-hairline before:border-gray-400 before:rounded-r-24 md:before:hidden">
                    <div
                        class="relative w-60 md:w-68 mx-auto flex flex-col bg-gray-100 h-full rounded-t-32 md:rounded-t-36 mt-10 md:mt-16 card-bumped-highlighted">
                        <span class="relative block mt-2.5 w-22 h-6 flex-shrink-0 mx-auto bg-gray-300 rounded-full"
                            aria-hidden="true">
                        </span>
                        <div class="relative p-4 mt-5 flex items-end border-b-hairline border-gray-300">
                            <h3 class="text-ui-17-semibold tracking-[-2%]" title="Handbooks">
                                Handbooks
                            </h3>
                            <p class="relative ml-1.5 bottom-0.5 flex-1 text-ui-9 text-gray-600">
                                15
                            </p>
                            <svg class="absolute right-4 bottom-4 size-5 text-gray-900" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.1394 16.1394C13.3624 18.9165 8.85986 18.9165 6.0828 16.1394C3.30573 13.3624 3.30573 8.85986 6.0828 6.0828C8.85986 3.30573 13.3624 3.30573 16.1394 6.0828C18.9165 8.85986 18.9165 13.3624 16.1394 16.1394ZM16.1394 16.1394L20 20"
                                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <ul class="flex-1 py-3 px-2.5 bg-gray-100">
                            <li class="isolate flex p-0.75 bg-gray-100 rounded-14 -mx-5 md:-mx-6 card-hovering">
                                <div
                                    class="w-[34%] aspect-[1/1] flex-shrink-0 rounded-11 border-hairline border-gray-900/10 bg-gray-300 overflow-hidden">
                                    <picture>
                                        <source media="(min-width: 768px)"
                                            srcset="/assets/imgs/features_handbook_highlighted_md@1x.webp 1x, /assets/imgs/features_handbook_highlighted_md@2x.webp 2x, /assets/imgs/features_handbook_highlighted_md@3x.webp 3x">
                                        <img src="assets/imgs/features_handbook_highlighted_sm.webp.html"
                                            srcset="assets/imgs/features_handbook_highlighted_sm@1x.webp 1x, assets/imgs/features_handbook_highlighted_sm@2x.webp 2x, assets/imgs/features_handbook_highlighted_sm@3x.webp 3x"
                                            class="object-cover w-full h-full select-none" loading="lazy"
                                            draggable="false" alt="">
                                    </picture>
                                </div>
                                <div class="flex-1 flex flex-col ml-3 mr-2 py-2 min-w-0">
                                    <h4 class="flex flex-col mb-1.5">
                                        <span class="mb-2.5 text-ui-8 text-gray-700 tracking-[8%] uppercase">
                                            Handbook
                                        </span>
                                        <span class="text-ui-13-semibold">
                                            Employee handbook
                                        </span>
                                    </h4>
                                    <p class="flex-1 text-ui-11-normal text-gray-800 leading-[15px] truncate">
                                        Read about our history and values
                                    </p>
                                    <p class="text-ui-11-normal text-gray-600">
                                        ~ 6 mins of reading
                                    </p>
                                </div>
                            </li>
                            <li
                                class="flex p-0.75 bg-gray-100 rounded-14 ring-hairline ring-gray-900/10 -mt-4 shadow-100">
                                <div
                                    class="w-[30%] aspect-[1/1] flex-shrink-0 rounded-11 border-hairline border-gray-900/10 bg-gray-300 overflow-hidden">
                                    <picture>
                                        <source media="(min-width: 768px)"
                                            srcset="/assets/imgs/features_handbook_1_md@1x.webp 1x, /assets/imgs/features_handbook_1_md@2x.webp 2x, /assets/imgs/features_handbook_1_md@3x.webp 3x">
                                        <img src="assets/imgs/features_handbook_1_sm.webp.html"
                                            srcset="assets/imgs/features_handbook_1_sm@1x.webp 1x, assets/imgs/features_handbook_1_sm@2x.webp 2x, assets/imgs/features_handbook_1_sm@3x.webp 3x"
                                            class="object-cover w-full h-full select-none" loading="lazy"
                                            draggable="false" alt="">
                                    </picture>
                                </div>
                                <div class="flex-1 flex flex-col mx-3 py-2 min-w-0">
                                    <h4 class="flex flex-col mb-1">
                                        <span class="mb-2 text-ui-6.5 text-gray-700 tracking-[8%] uppercase opacity-0">
                                            Handbook
                                        </span>
                                        <span class="text-ui-10-semibold">
                                            Machine manuals
                                        </span>
                                    </h4>
                                    <p class="flex-1 text-ui-9-normal text-gray-800 leading-[15px] truncate">
                                        All info you could need is here
                                    </p>
                                    <p class="text-ui-9-normal text-gray-600">
                                        ~ 24 mins of reading
                                    </p>
                                </div>
                            </li>
                            <li
                                class="flex p-0.75 bg-gray-100 rounded-14 ring-hairline ring-gray-900/10 mt-1.5 shadow-100">
                                <div
                                    class="w-[30%] aspect-[1/1] flex-shrink-0 rounded-11 border-hairline border-gray-900/10 bg-gray-300 overflow-hidden">
                                    <picture>
                                        <source media="(min-width: 768px)"
                                            srcset="/assets/imgs/features_handbook_2_md@1x.webp 1x, /assets/imgs/features_handbook_2_md@2x.webp 2x, /assets/imgs/features_handbook_2_md@3x.webp 3x">
                                        <img src="assets/imgs/features_handbook_2_sm.webp.html"
                                            srcset="assets/imgs/features_handbook_2_sm@1x.webp 1x, assets/imgs/features_handbook_2_sm@2x.webp 2x, assets/imgs/features_handbook_2_sm@3x.webp 3x"
                                            class="object-cover w-full h-full select-none" loading="lazy"
                                            draggable="false" alt="">
                                    </picture>
                                </div>
                                <div class="flex-1 flex flex-col mx-3 py-2 min-w-0">
                                    <h4 class="flex flex-col mb-1">
                                        <span class="mb-2 text-ui-6.5 text-gray-700 tracking-[8%] uppercase">
                                            Handbook
                                        </span>
                                        <span class="text-ui-10-semibold">
                                            Company benefits
                                        </span>
                                    </h4>
                                    <p class="flex-1 text-ui-9-normal text-gray-800 leading-[15px] truncate">
                                        All our partner deals
                                    </p>
                                    <p class="text-ui-9-normal text-gray-600">
                                        ~ 12 mins of reading
                                    </p>
                                </div>
                            </li>
                            <li
                                class="flex p-0.75 bg-gray-100 rounded-14 ring-hairline ring-gray-900/10 mt-1.5 shadow-100 ">
                                <div class="w-[30%] aspect-[1/1] flex-shrink-0 rounded-11 bg-gray-300">
                                </div>
                                <div class="flex-1 mx-3 py-2 min-w-0">
                                    <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-3" aria-hidden="true">
                                        <span
                                            class="relative h-1.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 36%;">
                                        </span>
                                    </div>
                                    <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2" aria-hidden="true">
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 25%;">
                                        </span>
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 32%;">
                                        </span>
                                    </div>
                                    <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-1" aria-hidden="true">
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 30%;">
                                        </span>
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 22%;">
                                        </span>
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 32%;">
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="absolute bottom-10 md:bottom-16 -left-1 -right-1 h-48 -mb-1 bg-gradient-to-b from-transparent to-gray-200 from-0% to-90%"
                            aria-hidden="true">
                        </div>
                    </div>
                </li>
                <li
                    class="w-full h-1/2 md:size-auto flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mr-hairline isolate z-10">
                    <div class="w-60 md:w-62 mt-8">
                        <div class="flex items-center p-2 rounded-10 card-hovering bg-gray-100">
                            <svg class="size-6 text-gray-900" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.1394 16.1394C13.3624 18.9165 8.85986 18.9165 6.0828 16.1394C3.30573 13.3624 3.30573 8.85986 6.0828 6.0828C8.85986 3.30573 13.3624 3.30573 16.1394 6.0828C18.9165 8.85986 18.9165 13.3624 16.1394 16.1394ZM16.1394 16.1394L20 20"
                                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="ml-2 text-ui-14">
                                Espresso|
                            </p>
                        </div>
                        <div
                            class="relative mt-2 px-3 rounded-10 shadow-card-bumped gradient-overlay-to-b before:from-[60%] before:to-[80%] before:z-10">
                            <h3 class="py-3 text-ui-8-semibold uppercase tracking-[4%]">
                                Found 4 results
                            </h3>
                            <ul>
                                <li class="pt-3 pb-4 border-t-hairline border-gray-300">
                                    <p class="text-ui-11-normal text-gray-600 mb-2.5">
                                        Manuals / Bar stand
                                    </p>
                                    <p class="text-ui-14 leading-[16px]">
                                        The <span
                                            class="relative bg-brand-500 px-0.75 pt-0.25 pb-0.75 rounded-4 -z-10">espresso</span>
                                        machine manual
                                    </p>
                                </li>
                                <li class="py-3 border-t-hairline border-gray-300">
                                    <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2 flex-1" aria-hidden="true">
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 15%;">
                                        </span>
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 20%;">
                                        </span>
                                    </div>
                                    <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2 flex-1" aria-hidden="true">
                                        <span
                                            class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 45%;">
                                        </span>
                                        <span
                                            class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 25%;">
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li
                    class="absolute md:static bottom-0 left-full h-[calc(50%+0.5px)] w-[calc(100%-4rem)] md:size-auto -ml-8 mr-16 md:mx-0 flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mb-hairline md:-mr-hairline isolate z-10">
                    <div
                        class="relative w-60 md:w-62 p-4 rounded-16 shadow-card-bumped gradient-overlay-to-b before:from-[60%] before:to-[90%] before:z-10">
                        <h4 class="flex flex-col mb-4">
                            <span class="mb-1 text-ui-13">
                                Most used handbooks
                            </span>
                            <span class="text-ui-11-normal text-gray-700">
                                By requests
                            </span>
                        </h4>
                        <ul class="space-y-2">
                            <li class="relative flex items-center space-x-2">
                                <div
                                    class="size-8 flex items-center justify-center rounded-8 border-hairline border-gray-400 text-ui-13">
                                    ☕️
                                </div>
                                <div
                                    class="relative flex-1 flex justify-between pb-2.5 after:absolute after:bottom-0 after:inset-x-0 after:h-1 after:rounded-full after:bg-gray-900">
                                    <h5 class="text-ui-11">
                                        Coffee receipts
                                    </h5>
                                    <p class="text-ui-11-normal text-gray-800">
                                        256
                                    </p>
                                </div>
                            </li>
                            <li class="relative flex items-center space-x-2">
                                <div
                                    class="size-8 flex items-center justify-center rounded-8 border-hairline border-gray-400 text-ui-13">
                                    🧼
                                </div>
                                <div
                                    class="relative flex-1 flex justify-between pb-2.5 before:absolute before:bottom-0 before:inset-x-0 before:h-1 before:rounded-full before:bg-gray-300 after:absolute after:bottom-0 after:inset-x-0 after:h-1 after:rounded-full after:bg-gray-900 after:w-[87.5%]">
                                    <h5 class="text-ui-11">
                                        Hygiene policy
                                    </h5>
                                    <p class="text-ui-11-normal text-gray-800">
                                        224
                                    </p>
                                </div>
                            </li>
                            <li class="relative flex items-center space-x-2">
                                <div class="size-8 rounded-8 bg-gray-300">
                                </div>
                                <div
                                    class="relative flex-1 flex justify-between pb-2.5 before:absolute before:bottom-0 before:left-0 before:right-8 before:h-1 before:rounded-full before:bg-gray-300">
                                    <div class="flex flex-wrap gap-y-1.5 -mx-0.5 w-full mb-0.25" aria-hidden="true">
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 21%;">
                                        </span>
                                        <span
                                            class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                            style="width: 18%;">
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>

        <li id="news" x-ref="item3" data-index="3">
            <h3 class="mb-4 text-heading-xs md:text-heading-sm font-sans-heading">
                News. <span class="text-gray-700">Targeted.</span>
            </h3>
            <p class="text-body-md md:text-body-lg md:w-3/5 mb-7">
                Create announcements with videos, images, and text that reach everyone or specific groups of
                people.
            </p>
            <ul class="py-7 md:py-9 space-y-5 border-t border-gray-300">
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 7L11 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7 11H10" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7 15H15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M11 3L6 3C4.34315 3 3 4.20883 3 5.7L3 18.3C3 19.7912 4.34315 21 6 21H18C19.6569 21 21 19.7912 21 18.3V12.5"
                            stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path
                            d="M13.8581 9.01097C13.5457 9.32339 13.5457 9.82993 13.8581 10.1423C14.1706 10.4548 14.6771 10.4548 14.9895 10.1423L13.8581 9.01097ZM14.9895 10.1423L17.9431 7.18873L16.8118 6.05736L13.8581 9.01097L14.9895 10.1423Z"
                            fill="currentColor" />
                        <path
                            d="M20.4154 1.03945L22.961 3.58503L19.6726 6.87343L19.2058 9.03732L14.9631 4.79468L17.127 4.32785L20.4154 1.03945Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Pin important announcements
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.647 17.4854C22.8716 17.7961 22.8716 18.2039 22.647 18.5146C21.7245 19.791 19.0971 23 16 23C12.9029 23 10.2755 19.791 9.35297 18.5146C9.12842 18.2039 9.12842 17.7961 9.35297 17.4854C10.2755 16.209 12.9029 13 16 13C19.0971 13 21.7245 16.209 22.647 17.4854Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M17 18C17 18.5523 16.5523 19 16 19C15.4477 19 15 18.5523 15 18C15 17.4477 15.4477 17 16 17C16.5523 17 17 17.4477 17 18Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M16 9.5L16 5C16 3.34315 14.6569 2 13 2L5 2C3.34315 2 2 3.34315 2 5L2 13C2 14.6569 3.34315 16 5 16L6 16"
                            stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path d="M5.5 8.5L8.125 11.5L12.5 6.5" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Make sure important things are seen right away
                    </p>
                </li>
                <li class="flex space-x-4">
                    <svg class="size-6 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.8982 20.3841C14.4652 18.6378 9.53481 18.6378 5.10179 20.3841C3.46107 21.0305 1.80988 19.4691 2.34734 17.7896C3.54903 14.0343 3.54903 9.96573 2.34734 6.21043C1.80988 4.53089 3.46107 2.96951 5.10179 3.61586C9.53481 5.3622 14.4652 5.3622 18.8982 3.61585C20.5389 2.96951 22.1901 4.53089 21.6527 6.21043C20.451 9.96573 20.451 14.0343 21.6527 17.7896C22.1901 19.4691 20.5389 21.0305 18.8982 20.3841Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 8.2998L12 11.7998" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 14.8V14.8066" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M8 22.9999C10.627 22.2567 13.373 22.2567 16 22.9999" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 1.00009C10.627 1.7433 13.373 1.7433 16 1.00009" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-body-sm md:text-body-md text-gray-800">
                        Confirmable announcements to reach everyone with certainty
                    </p>
                </li>
            </ul>
            <ul
                class="relative h-128 md:h-140 flex md:grid grid-cols-2 grid-rows-2 -mx-8 md:mx-0 px-8 md:px-0 overflow-x-scroll snap-x snap-mandatory md:rounded-24 md:bg-gray-200 md:overflow-hidden md:border-hairline md:border-gray-400 scrollbar-none">
                <li
                    class="w-full flex-shrink-0 snap-center col-span-1 row-span-2 rounded-l-24 bg-gray-200 border-y-hairline border-l-hairline border-gray-400 md:border-none overflow-hidden before:absolute before:inset-y-0 before:left-full before:bg-gray-200 before:w-[calc(100%-4rem)] before:-ml-8 before:border-y-hairline before:border-r-hairline before:border-gray-400 before:rounded-r-24 md:before:hidden">
                    <div
                        class="relative w-60 md:w-68 mx-auto flex flex-col bg-gray-100 h-full rounded-t-32 md:rounded-t-36 mt-10 md:mt-16 card-bumped-highlighted">
                        <span class="relative block mt-2.5 w-22 h-6 flex-shrink-0 mx-auto bg-gray-300 rounded-full"
                            aria-hidden="true">
                        </span>
                        <header class="flex justify-between items-center py-3 px-4">
                            <svg class="w-4 text-gray-900" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.47118 14.8498L1.68237 8.8956M7.47118 2.94141L1.68237 8.8956M1.68237 8.8956L14.9139 8.8956"
                                    stroke="currentColor" stroke-width="1.05852" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="text-ui-12-semibold">
                                News
                            </p>
                            <svg class="w-4 text-gray-900 rotate-8" viewBox="0 0 17 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.74332 3.94191C4.89705 5.03573 4.13495 6.04707 3.04113 6.20079C1.94731 6.35452 0.935979 5.59242 0.782252 4.4986C0.628526 3.40478 1.39062 2.39345 2.48444 2.23972C3.57826 2.08599 4.5896 2.84809 4.74332 3.94191ZM10.6849 3.10687C10.8387 4.20069 10.0766 5.21203 8.98274 5.36575C7.88892 5.51948 6.87759 4.75738 6.72386 3.66356C6.57013 2.56974 7.33223 1.55841 8.42605 1.40468C9.51987 1.25096 10.5312 2.01305 10.6849 3.10687ZM14.9244 4.53072C16.0182 4.37699 16.7803 3.36565 16.6265 2.27183C16.4728 1.17801 15.4615 0.415917 14.3677 0.569643C13.2738 0.723369 12.5117 1.73471 12.6655 2.82853C12.8192 3.92235 13.8305 4.68444 14.9244 4.53072Z"
                                    fill="black" />
                            </svg>
                        </header>
                        <div class="isolate relative min-h-40 flex flex-col justify-end p-4 rounded-t-20 overflow-hidden"
                            url="features_news_sm.webp" urlMd="features_news_md.webp" pill="Announcement"
                            title="New vacation rules">
                            <div class="absolute inset-0">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="/assets/imgs/features_news_md@1x.webp 1x, /assets/imgs/features_news_md@2x.webp 2x, /assets/imgs/features_news_md@3x.webp 3x">
                                    <img src="assets/imgs/features_news_sm.webp.html"
                                        srcset="assets/imgs/features_news_sm@1x.webp 1x, assets/imgs/features_news_sm@2x.webp 2x, assets/imgs/features_news_sm@3x.webp 3x"
                                        class="object-cover w-full h-full select-none" loading="lazy" draggable="false"
                                        alt="">
                                </picture>
                            </div>
                            <p
                                class="self-start relative py-0.75 px-1.5 rounded-full uppercase tracking-[8%] bg-gray-900/20 text-ui-6.5-semibold text-gray-100">
                                Announcement
                            </p>
                            <h3 class="mt-1.5 relative text-ui-17-semibold text-gray-100">
                                New vacation rules
                            </h3>
                        </div>
                        <p class="p-4 flex items-center gap-1.5 text-ui-10-normal text-gray-700">
                            <span>
                                Jun 12, 2025
                            </span>
                        </p>
                        <p class="px-4 pb-4 text-ui-11-normal leading-[17px]">
                            Please read the following carefully and talk to your manager if you have any
                            questions.
                        </p>
                        <div
                            class="relative flex flex-col items-center p-2 -mx-2 md:-mx-4 md:mt-2 rounded-16 card-hovering bg-gray-100 z-10">
                            <svg class="size-4 text-gray-800 mx-auto" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.83581 2.91663C8.79806 1.24996 11.2037 1.24996 12.1659 2.91663L18.6611 14.1666C19.6234 15.8333 18.4206 17.9166 16.4961 17.9166H3.50568C1.58118 17.9166 0.378369 15.8333 1.34062 14.1666L7.83581 2.91663ZM10.0003 11.6667C10.4605 11.6667 10.8336 11.2936 10.8336 10.8333V6.66667C10.8336 6.20643 10.4605 5.83333 10.0003 5.83333C9.54003 5.83333 9.16693 6.20643 9.16693 6.66667L9.16693 10.8333C9.16693 11.2936 9.54003 11.6667 10.0003 11.6667ZM11.0003 14.1666C11.0003 14.7189 10.5525 15.1666 10.0003 15.1666C9.44798 15.1666 9.00026 14.7189 9.00026 14.1666V14.1583C9.00026 13.606 9.44798 13.1583 10.0003 13.1583C10.5525 13.1583 11.0003 13.606 11.0003 14.1583V14.1666Z"
                                    fill="currentColor" />
                            </svg>
                            <p class="text-ui-9-normal mb-3 mt-1.5 text-center text-gray-800">
                                I confirm I have read the announcement.
                            </p>
                            <div
                                class="h-10 self-stretch flex justify-between rounded-10 p-0.75 ring-hairline ring-gray-900/10 shadow-confirm-slider bg-gradient-to-r from-gray-200 to-brand-100">
                                <button
                                    class="w-24 flex items-center justify-center bg-gray-100 rounded-8 card-bumped-highlighted space-x-0.75"
                                    aria-label="Swipe">
                                    <span class="h-4 w-px bg-gray-400">
                                    </span>
                                    <span class="h-4 w-px bg-gray-400">
                                    </span>
                                    <span class="h-4 w-px bg-gray-400">
                                    </span>
                                    <span class="h-4 w-px bg-gray-400">
                                    </span>
                                    <span class="h-4 w-px bg-gray-400">
                                    </span>
                                    <span class="h-4 w-px bg-gray-400">
                                    </span>
                                    <span class="h-4 w-px bg-gray-400">
                                    </span>
                                </button>
                                <p class="w-24 flex items-center text-ui-12 space-x-2 mr-3">
                                    <svg class="size-4 text-gray-900" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                            stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>Confirm</span>
                                </p>
                            </div>
                        </div>
                        <div class="absolute bottom-10 md:bottom-16 -left-1 -right-1 h-48 -mb-1 bg-gradient-to-b from-transparent to-gray-200 from-0% to-90%"
                            aria-hidden="true">
                        </div>
                    </div>
                </li>
                <li
                    class="w-full h-1/2 md:size-auto flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mr-hairline isolate z-10">
                    <div class="w-48">
                        <div
                            class="relative h-12 inset-0 overflow-hidden rounded-t-16 border-hairline border-gray-900/25 border-b-gray-900/15">
                            <img class="object-cover blur-sm w-full h-full"
                                src="assets/imgs/features_news_stats@1x.webp" alt="">
                        </div>
                        <div
                            class="relative px-3 pt-3 pb-4 -mx-6 md:-mx-14 rounded-12 card-hovering bg-gray-100 z-10 -mt-hairline">
                            <div class="flex items-center justify-between mb-3">
                                <p class="flex items-center gap-1.5 text-ui-11  text-ui-10-normal text-gray-800">
                                    <svg class="size-4 flex-shrink-0 text-gray-800" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.6005 8.42142C15.855 8.7696 15.855 9.2304 15.6005 9.57858C14.6387 10.8948 12.0466 14 9 14C5.95337 14 3.36133 10.8948 2.39946 9.57858C2.14502 9.2304 2.14502 8.7696 2.39946 8.42142C3.36133 7.10518 5.95337 4 9 4C12.0466 4 14.6387 7.10518 15.6005 8.42142Z"
                                            stroke="#313335" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9Z"
                                            fill="#313335" />
                                    </svg>
                                    <span>
                                        Seen by 256
                                    </span>
                                    <span>
                                        •
                                    </span>
                                    <span>
                                        85%
                                    </span>
                                </p>
                            </div>
                            <ul class="flex -space-x-1 items-center">
                                <li class="-rotate-2">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-8 rounded-10"
                                        src="assets/imgs/avatars/female7_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="rotate-2">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-8 rounded-10"
                                        src="assets/imgs/avatars/male1_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="-rotate-3">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-8 rounded-10"
                                        src="assets/imgs/avatars/female2_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="rotate-1">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-8 rounded-10"
                                        src="assets/imgs/avatars/male6_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="-rotate-2">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-8 rounded-10"
                                        src="assets/imgs/avatars/female6_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="rotate-2">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 size-8 rounded-10"
                                        src="assets/imgs/avatars/male8_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="-rotate-3">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 hidden md:block size-8 rounded-10"
                                        src="assets/imgs/avatars/female8_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="-rotate-3">
                                    <img class="flex-grow-0 flex-shrink-0 border-hairline border-gray-900/10 bg-gray-300 ring-2 ring-gray-100 hidden md:block size-8 rounded-10"
                                        src="assets/imgs/avatars/female8_32@2x.png" loading="lazy" draggable="false"
                                        alt="avatar">
                                </li>
                                <li class="pl-4 text-ui-sm text-gray-800">
                                    + 248
                                </li>
                            </ul>
                        </div>
                        <div class="relative mt-3 px-2 gradient-overlay-to-b before:to-[75%] before:z-10">
                            <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-2" aria-hidden="true">
                                <span
                                    class="relative h-2.5 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 42%;">
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-1.5" aria-hidden="true">
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 31%;">
                                </span>
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 24%;">
                                </span>
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 15%;">
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-y-1.5 -mx-0.5 mb-1.5" aria-hidden="true">
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 15%;">
                                </span>
                                <span
                                    class="relative h-2 px-0.5 before:content before:absolute before:inset-y-0 before:inset-x-0.5 before:rounded-2 before:bg-gray-300"
                                    style="width: 22%;">
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li
                    class="absolute md:static bottom-0 left-full h-[calc(50%+0.5px)] w-[calc(100%-4rem)] md:size-auto -ml-8 mr-16 md:mx-0 flex-shrink-0 snap-center flex items-center justify-center rounded-24 bg-gray-100 overflow-hidden border-hairline border-gray-400 md:-mt-hairline md:-mb-hairline md:-mr-hairline isolate z-10">
                    <ul class="flex items-center -mt-12">
                        <li
                            class="w-48 flex flex-col items-start rounded-12 p-3 card-bumped-highlighted -mr-18 md:-mr-12 -rotate-6">
                            <h4 class="uppercase text-overline-brand text-ui-8-normal tracking-widest">
                                Announcement
                            </h4>
                            <p class="mt-1.5 text-ui-15 tracking-[-2%] leading-[18px]">
                                New uniforms arrive today
                            </p>
                            <div
                                class="mt-2.5 px-2.5 py-2 rounded-10 text-ui-10-normal border-hairline bg-brand-100 border-gray-900/10 shadow-btn-ghost">
                                Waiters
                            </div>
                        </li>
                        <li
                            class="w-48 flex flex-col items-start rounded-12 p-3 card-bumped-highlighted -ml-18 md:-ml-12 mt-28 rotate-3">
                            <h4 class="uppercase text-overline-brand text-ui-8-normal tracking-widest">
                                Announcement
                            </h4>
                            <p class="mt-1.5 text-ui-15 tracking-[-2%] leading-[18px]">
                                Friday is closed due to maintenance
                            </p>
                            <div
                                class="mt-2.5 px-2.5 py-2 rounded-10 text-ui-10-normal border-hairline bg-gray-300 border-gray-900/10 shadow-btn-ghost">
                                Copenhagen
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</section>