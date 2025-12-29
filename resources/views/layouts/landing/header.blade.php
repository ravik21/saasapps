<header class="fixed top-0 inset-x-0 z-50" x-data="header()">
    <aside x-show="showOverlay" x-cloak x-transition:enter="transition ease-in duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed hidden md:block inset-0 -z-10 bg-gray-900/10"
        aria-hidden="true">
    </aside>
    <aside aria-hidden="true" class="fixed inset-x-0 top-0 -z-10 h-16 md:h-18 xl:h-23">
        <div class="absolute inset-0 gradient-blur-to-b blur-[1px] backdrop-blur-1"></div>
        <div class="absolute inset-0 gradient-blur-to-b blur-[2px] backdrop-blur-2"></div>
        <div class="absolute inset-0 gradient-blur-to-b blur-[6px] backdrop-blur-6"></div>
        <div class="absolute inset-0 gradient-blur-to-b blur-[12px] backdrop-blur-12"></div>
        <div class="absolute inset-0 gradient-blur-to-b blur-[24px] backdrop-blur-24"></div>
    </aside>
    <div class="relative md:mt-2 xl:mt-4 md:mx-2 xl:mx-4 px-4 md:px-2 bg-gray-100 md:rounded-16"
        @mouseover.away="closeFeaturesNav()">
        <div class="relative max-w-300 mx-auto h-16 xl:h-19 flex items-center">
            <a href="/" @mouseover="closeFeaturesNav()" aria-label="Home">
                <img src="{{ asset('images/landing/logo.svg') }}" alt="SaaSApps Logo" class="w-28 md:w-64" />
            </a>
            <nav class="hidden md:block flex-1 flex ml-8 lg:ml-20 text-gray-800 text-ui-14-normal lg:text-ui-15-normal">
                <ul class="flex items-center gap-5">
                    <li class="flex-shrink-0">
                        <a href="/features" class="flex px-2 py-3 hover:underline cursor-pointer"
                            @mouseover="openFeaturesNav()">
                            <span>Product</span>
                            <svg class="w-2.5 flex-shrink-0 ml-3 text-gray-800" fill="none" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 6">
                                <path d="M1 1.00037L5.00003 5.00049L9 1.00037" stroke="#313335" />
                            </svg>
                        </a>
                    </li>
                    <li class="flex-shrink-0" @mouseover="closeFeaturesNav()">
                        <a href="why-monotree.html" class="relative px-2 py-3 hover:underline cursor-pointer">
                            Why us?
                        </a>
                    </li>
                    <li class="flex-shrink-0" @mouseover="closeFeaturesNav()">
                        <a href="/cases" class="relative px-2 py-3 hover:underline cursor-pointer">
                            Cases
                        </a>
                    </li>
                    </li>
                    <li class="flex-shrink-0" @mouseover="closeFeaturesNav()">
                        <a href="about-us.html" class="relative px-2 py-3 hover:underline cursor-pointer">
                            About us
                        </a>
                    </li>
                    <li class="flex-shrink-0" @mouseover="closeFeaturesNav()">
                        <a href="blog.html" class="relative px-2 py-3 hover:underline cursor-pointer">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <button x-data="ctaTrigger()"
                class="flex-shrink-0 block ml-auto lg:ml-0 h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-ui-14 lg:text-button-md bg-brand-500 text-brand-over-500 ring-gray-900/20 shadow-cta ring-hairline z-10"
                x-show="!showMobileNav" @click="open()" @mouseover="closeFeaturesNav()">
                Book a demo
            </button>
            <button class="md:hidden py-2 pl-2 ml-2" :class="{'ml-auto': showMobileNav}" aria-label="Previous item"
                @click="toggleMobileNav">
                <span class="block" :class="{'block': !showMobileNav, 'hidden': showMobileNav}">
                    <svg class="size-6 flex-shrink-0 text-gray-800" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 4H22M2 12H22M2 20H22" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="hidden" :class="{'block': showMobileNav, 'hidden': !showMobileNav}">
                    <svg class="size-8 flex-shrink-0 text-gray-800 -mr-1" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 17L12 12M12 12L7 7M12 12L17 7M12 12L7 17" stroke="currentColor"
                            stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </button>
        </div>
        <template x-if="showMobileNav">
            <div x-data="headerMobile()" x-show="isOpenMobile" x-cloak
                x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-500"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 blur-sm"
                class="fixed md:hidden flex flex-col px-4 bg-gray-100 inset-0 mt-16">
                <nav class="flex-1 overflow-y-scroll overscroll-contain scrollbar-none">
                    <ul>
                        <li>
                            <button @click="toggleFeatures()"
                                class="sticky top-0 w-full flex items-center justify-between py-3 text-heading-2xs font-sans-heading text-gray-700 bg-gray-100 transition z-50"
                                :class="{'text-gray-900': showFeatures}">
                                <span>Product</span>
                                <span class="text-gray-700"
                                    :class="{'rotate-180 text-gray-900': showFeatures, 'text-gray-700': !showFeatures}">
                                    <svg class="w-6 flex-shrink-0" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 10L12 15L6 10" stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div x-show="showFeatures">
                                <a @click="closeFeaturesNav()" href="/features"
                                    class="mt-3 flex items-center text-ui-14 text-gray-700 hover:underline"
                                    x-show="showFeatures" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0">
                                    <span>All features</span>
                                    <svg class="size-4 flex-shrink-0 ml-1 text-gray-700" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                            stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <ul x-show="showFeatures" class="my-6">
                                    <li class="col-span-1 pr-2" x-show="showFeatures"
                                        x-transition:enter="transition ease-out duration-300 delay-[100ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0">
                                        <h3 class="flex mb-2 md:mb-3">
                                            <svg class="size-6 flex-shrink-0 text-gray-900" stroke="currentColor"
                                                viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.4 5H13.6C10.2397 5 8.55953 5 7.27606 5.65396C6.14708 6.2292 5.2292 7.14708 4.65396 8.27606C4 9.55953 4 11.2397 4 14.6V15.4C4 18.7603 4 20.4405 4.65396 21.7239C5.2292 22.8529 6.14708 23.7708 7.27606 24.346C8.55953 25 10.2397 25 13.6 25L17.7017 24.9949C18.697 24.9936 19.1947 24.993 19.6622 25.1065C20.0766 25.2071 20.4723 25.3734 20.8343 25.5989C21.2426 25.8534 21.5905 26.2093 22.2862 26.921L22.2862 26.921L23.3519 28.0111L23.3519 28.0111C23.7813 28.4504 23.996 28.67 24.1808 28.686C24.341 28.6999 24.4982 28.6358 24.603 28.5139C24.7239 28.3733 24.7239 28.0662 24.7239 27.4519V24.835C24.7239 24.6594 24.7239 24.5716 24.7471 24.4982C24.7692 24.428 24.7975 24.3774 24.8456 24.3217C24.8959 24.2635 24.981 24.2109 25.1512 24.1059C26.0847 23.5298 26.8452 22.7069 27.346 21.7239C28 20.4405 28 18.7603 28 15.4V14.6C28 11.2397 28 9.55953 27.346 8.27606C26.7708 7.14708 25.8529 6.2292 24.7239 5.65396C23.4405 5 21.7603 5 18.4 5Z"
                                                    stroke-width="2" />
                                                <path d="M13 11L13 19" stroke-width="2" stroke-linecap="round" />
                                                <path d="M19 11L19 19" stroke-width="2" stroke-linecap="round" />
                                                <path d="M16 13L16 17" stroke-width="2" stroke-linecap="round" />
                                                <path d="M22 14L22 16" stroke-width="2" stroke-linecap="round" />
                                                <path d="M10 14L10 16" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            <a @click="closeFeaturesNav()" href="/features#communication"
                                                class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                                                Communication &amp; Social
                                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                        stroke="currentColor" stroke-width="1.06667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </h3>
                                        <ul class="ml-10 space-y-1">
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#chats"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Chats
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#walls"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Social walls
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#events"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Events
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-span-1 pt-4 mt-3 md:pt-0 md:mt-0 md:pr-2 md:pl-5 border-t-hairline md:border-t-0 md:border-l-hairline border-gray-400"
                                        x-show="showFeatures"
                                        x-transition:enter="transition ease-out duration-300 delay-[140ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0">
                                        <h3 class="flex mb-2 md:mb-3">
                                            <svg class="size-6 flex-shrink-0 text-gray-900" viewBox="0 0 32 32"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_20164_3404)">
                                                    <path
                                                        d="M12.1251 6.70953C13.5523 6.07985 14.266 5.76501 15.0074 5.64064C15.6645 5.53041 16.3355 5.53041 16.9926 5.64064C17.734 5.76501 18.4477 6.07985 19.8749 6.70953L26.3638 9.57226C28.4634 10.4986 29.5133 10.9617 29.8353 11.6083C30.115 12.1699 30.115 12.8301 29.8353 13.3917C29.5133 14.0383 28.4634 14.5014 26.3638 15.4277L19.8749 18.2905C18.4477 18.9201 17.734 19.235 16.9926 19.3594C16.3355 19.4696 15.6645 19.4696 15.0074 19.3594C14.266 19.235 13.5523 18.9201 12.1251 18.2905L5.6362 15.4277C3.53656 14.5014 2.48675 14.0383 2.16469 13.3917C1.88498 12.8301 1.88498 12.1699 2.16469 11.6083C2.48675 10.9617 3.53656 10.4986 5.6362 9.57226L12.1251 6.70953Z"
                                                        stroke="currentColor" stroke-width="2" />
                                                    <path
                                                        d="M7 16V21C7 23.7614 11.0294 26 16 26C20.9706 26 25 23.7614 25 21V16"
                                                        stroke="currentColor" stroke-width="2" />
                                                    <path
                                                        d="M1 18C1 18.5523 1.44772 19 2 19C2.55228 19 3 18.5523 3 18H1ZM1 13V18H3V13H1Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_20164_3404">
                                                        <rect width="32" height="32" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <a @click="closeFeaturesNav()" href="/features#information"
                                                class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                                                Information &amp; Training
                                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                        stroke="currentColor" stroke-width="1.06667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </h3>
                                        <ul class="ml-10 space-y-1">
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#onboarding"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Onboarding
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#courses"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Courses
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#handbooks"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Handbooks
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#news"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    News
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-span-1 pt-4 mt-3 md:pt-0 md:mt-0 md:pr-2 md:pl-5 border-t-hairline md:border-t-0 md:border-l-hairline border-gray-400"
                                        x-show="showFeatures"
                                        x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0">
                                        <h3 class="flex mb-2 md:mb-3">
                                            <svg class="size-6 flex-shrink-0 text-gray-900" viewBox="0 0 32 32"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M28 15V15C28 18.7275 28 20.5913 27.391 22.0615C26.5791 24.0217 25.0217 25.5791 23.0615 26.391C21.5913 27 19.7275 27 16 27H14"
                                                    stroke="currentColor" stroke-width="2" />
                                                <path
                                                    d="M24.2036 7H10.4C8.15979 7 7.03969 7 6.18404 7.43597C5.43139 7.81947 4.81947 8.43139 4.43597 9.18404C4 10.0397 4 11.1598 4 13.4V22.1913C4 22.9426 4 23.3183 4.05032 23.6325C4.32354 25.3386 5.66138 26.6765 7.36749 26.9497C7.68175 27 8.05741 27 8.80873 27H17.5622C20.4087 27 22.574 24.444 22.106 21.6361C22.0541 21.3244 22.3244 21.0541 22.6361 21.106C25.444 21.574 28 19.4087 28 16.5622V10.7964C28 8.69969 26.3003 7 24.2036 7Z"
                                                    stroke="currentColor" stroke-width="2" />
                                                <path d="M10 7L10 4" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" />
                                                <path d="M22 7L22 4" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" />
                                                <path
                                                    d="M12 15.8C13.4708 17.0542 14.0018 17.7515 14.7826 19C16.245 16.403 17.4141 15.1011 20 13"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <a @click="closeFeaturesNav()" href="/features#operations"
                                                class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                                                Daily Operations
                                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                        stroke="currentColor" stroke-width="1.06667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </h3>
                                        <ul class="ml-10 space-y-1">
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#todolists"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    To-do Lists
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#forms"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Forms
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-span-1 pt-4 mt-3 md:pt-0 md:mt-0 md:pr-2 md:pl-5 border-t-hairline md:border-t-0 md:border-l-hairline border-gray-400"
                                        x-show="showFeatures"
                                        x-transition:enter="transition ease-out duration-300 delay-[220ms]"
                                        x-transition:enter-start="opacity-0 translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0">
                                        <h3 class="flex mb-2 md:mb-3">
                                            <svg class="size-6 flex-shrink-0 text-gray-900" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.6 3H9.4C7.15979 3 6.03969 3 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3 6.03969 3 7.15979 3 9.4V9.6C3 11.8402 3 12.9603 3.43597 13.816C3.81947 14.5686 4.43139 15.1805 5.18404 15.564C6.03969 16 7.15979 16 9.4 16H14.6C16.8402 16 17.9603 16 18.816 15.564C19.5686 15.1805 20.1805 14.5686 20.564 13.816C21 12.9603 21 11.8402 21 9.6V9.4C21 7.15979 21 6.03969 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C17.9603 3 16.8402 3 14.6 3Z"
                                                    stroke="currentColor" stroke-width="1.6" />
                                                <path
                                                    d="M18.5 21H5.5C4.11929 21 3 19.8807 3 18.5C3 17.1193 4.11929 16 5.5 16H18.5C19.8807 16 21 17.1193 21 18.5C21 19.8807 19.8807 21 18.5 21Z"
                                                    stroke="currentColor" stroke-width="1.6" />
                                                <path d="M7.5 12L7.5 8" stroke="currentColor" stroke-width="1.6"
                                                    stroke-linecap="round" />
                                                <path d="M10.5 12L10.5 6" stroke="currentColor" stroke-width="1.6"
                                                    stroke-linecap="round" />
                                                <path d="M13.5 12L13.5 10" stroke="currentColor" stroke-width="1.6"
                                                    stroke-linecap="round" />
                                                <path d="M16.5 12L16.5 8" stroke="currentColor" stroke-width="1.6"
                                                    stroke-linecap="round" />
                                            </svg>
                                            <a @click="closeFeaturesNav()" href="/features#wellbeing"
                                                class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                                                Well-being &amp; Retention
                                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                        stroke="currentColor" stroke-width="1.06667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </h3>
                                        <ul class="ml-10 space-y-1">
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#satisfaction"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Satisfaction Surveys
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a @click="closeFeaturesNav()" href="/features#development"
                                                    class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                                    Development Surveys
                                                    <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                                            stroke="currentColor" stroke-width="1.06667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-t-hairline border-gray-400">
                            <a href="why-monotree.html"
                                class="block py-3 text-heading-2xs font-sans-heading text-gray-700">
                                Why us?
                            </a>
                        </li>
                        <li class="border-t-hairline border-gray-400">
                            <a href="/cases" class="block py-3 text-heading-2xs font-sans-heading text-gray-700">
                                Cases
                            </a>
                        </li>
                        </li>
                        <li class="border-t-hairline border-gray-400">
                            <a href="about-us.html" class="block py-3 text-heading-2xs font-sans-heading text-gray-700">
                                About us
                            </a>
                        </li>
                        <li class="border-t-hairline border-gray-400">
                            <a href="blog.html" class="block py-3 text-heading-2xs font-sans-heading text-gray-700">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <button x-data="ctaTrigger()"
                    class="w-full flex-shrink-0 block h-11 px-4 rounded-8 text-ui-14 bg-gray-900 text-gray-100 shadow-btn-dark"
                    @click="open()">
                    Book a demo
                </button>
            </div>
        </template>
        <nav class="absolute hidden md:block pt-24 pb-10 top-0 inset-x-0 px-4 rounded-16 bg-gray-100 shadow-300 -z-10"
            x-show="showFeaturesNav" x-cloak x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-out duration-500" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 blur-sm">
            <div class="max-w-300 mx-auto flex items-center space-x-5" x-show="showFeaturesNav"
                x-transition:enter="transition ease-out duration-300 delay-[50ms]" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-500"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <p class="text-heading-2xs font-sans-heading">
                    Product
                </p>
                <a href="/features" class="mt-1 flex items-center text-ui-14 text-gray-700 hover:underline">
                    <span>All features</span>
                    <svg class="size-4 flex-shrink-0 ml-1 text-gray-700" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317" stroke="currentColor"
                            stroke-width="1.06667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <ul class="max-w-300 mx-auto mt-8 grid grid-cols-4">
                <li class="col-span-1 pr-2" x-show="showFeaturesNav"
                    x-transition:enter="transition ease-out duration-300 delay-[100ms]"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-500" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <h3 class="flex mb-2 md:mb-3">
                        <svg class="size-6 flex-shrink-0 text-gray-900" stroke="currentColor" viewBox="0 0 32 32"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.4 5H13.6C10.2397 5 8.55953 5 7.27606 5.65396C6.14708 6.2292 5.2292 7.14708 4.65396 8.27606C4 9.55953 4 11.2397 4 14.6V15.4C4 18.7603 4 20.4405 4.65396 21.7239C5.2292 22.8529 6.14708 23.7708 7.27606 24.346C8.55953 25 10.2397 25 13.6 25L17.7017 24.9949C18.697 24.9936 19.1947 24.993 19.6622 25.1065C20.0766 25.2071 20.4723 25.3734 20.8343 25.5989C21.2426 25.8534 21.5905 26.2093 22.2862 26.921L22.2862 26.921L23.3519 28.0111L23.3519 28.0111C23.7813 28.4504 23.996 28.67 24.1808 28.686C24.341 28.6999 24.4982 28.6358 24.603 28.5139C24.7239 28.3733 24.7239 28.0662 24.7239 27.4519V24.835C24.7239 24.6594 24.7239 24.5716 24.7471 24.4982C24.7692 24.428 24.7975 24.3774 24.8456 24.3217C24.8959 24.2635 24.981 24.2109 25.1512 24.1059C26.0847 23.5298 26.8452 22.7069 27.346 21.7239C28 20.4405 28 18.7603 28 15.4V14.6C28 11.2397 28 9.55953 27.346 8.27606C26.7708 7.14708 25.8529 6.2292 24.7239 5.65396C23.4405 5 21.7603 5 18.4 5Z"
                                stroke-width="2" />
                            <path d="M13 11L13 19" stroke-width="2" stroke-linecap="round" />
                            <path d="M19 11L19 19" stroke-width="2" stroke-linecap="round" />
                            <path d="M16 13L16 17" stroke-width="2" stroke-linecap="round" />
                            <path d="M22 14L22 16" stroke-width="2" stroke-linecap="round" />
                            <path d="M10 14L10 16" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <a @click="closeFeaturesNav()" href="/features#communication"
                            class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                            Communication &amp; Social
                            <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                    stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </h3>
                    <ul class="ml-10 space-y-1">
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#chats"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Chats
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#walls"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Social walls
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#events"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Events
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="col-span-1 pt-4 mt-3 md:pt-0 md:mt-0 md:pr-2 md:pl-5 border-t-hairline md:border-t-0 md:border-l-hairline border-gray-400"
                    x-show="showFeaturesNav" x-transition:enter="transition ease-out duration-300 delay-[140ms]"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-500" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <h3 class="flex mb-2 md:mb-3">
                        <svg class="size-6 flex-shrink-0 text-gray-900" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_20164_3404)">
                                <path
                                    d="M12.1251 6.70953C13.5523 6.07985 14.266 5.76501 15.0074 5.64064C15.6645 5.53041 16.3355 5.53041 16.9926 5.64064C17.734 5.76501 18.4477 6.07985 19.8749 6.70953L26.3638 9.57226C28.4634 10.4986 29.5133 10.9617 29.8353 11.6083C30.115 12.1699 30.115 12.8301 29.8353 13.3917C29.5133 14.0383 28.4634 14.5014 26.3638 15.4277L19.8749 18.2905C18.4477 18.9201 17.734 19.235 16.9926 19.3594C16.3355 19.4696 15.6645 19.4696 15.0074 19.3594C14.266 19.235 13.5523 18.9201 12.1251 18.2905L5.6362 15.4277C3.53656 14.5014 2.48675 14.0383 2.16469 13.3917C1.88498 12.8301 1.88498 12.1699 2.16469 11.6083C2.48675 10.9617 3.53656 10.4986 5.6362 9.57226L12.1251 6.70953Z"
                                    stroke="currentColor" stroke-width="2" />
                                <path d="M7 16V21C7 23.7614 11.0294 26 16 26C20.9706 26 25 23.7614 25 21V16"
                                    stroke="currentColor" stroke-width="2" />
                                <path d="M1 18C1 18.5523 1.44772 19 2 19C2.55228 19 3 18.5523 3 18H1ZM1 13V18H3V13H1Z"
                                    fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_20164_3404">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <a @click="closeFeaturesNav()" href="/features#information"
                            class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                            Information &amp; Training
                            <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                    stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </h3>
                    <ul class="ml-10 space-y-1">
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#onboarding"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Onboarding
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#courses"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Courses
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#handbooks"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Handbooks
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#news"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                News
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="col-span-1 pt-4 mt-3 md:pt-0 md:mt-0 md:pr-2 md:pl-5 border-t-hairline md:border-t-0 md:border-l-hairline border-gray-400"
                    x-show="showFeaturesNav" x-transition:enter="transition ease-out duration-300 delay-[180ms]"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-500" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <h3 class="flex mb-2 md:mb-3">
                        <svg class="size-6 flex-shrink-0 text-gray-900" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28 15V15C28 18.7275 28 20.5913 27.391 22.0615C26.5791 24.0217 25.0217 25.5791 23.0615 26.391C21.5913 27 19.7275 27 16 27H14"
                                stroke="currentColor" stroke-width="2" />
                            <path
                                d="M24.2036 7H10.4C8.15979 7 7.03969 7 6.18404 7.43597C5.43139 7.81947 4.81947 8.43139 4.43597 9.18404C4 10.0397 4 11.1598 4 13.4V22.1913C4 22.9426 4 23.3183 4.05032 23.6325C4.32354 25.3386 5.66138 26.6765 7.36749 26.9497C7.68175 27 8.05741 27 8.80873 27H17.5622C20.4087 27 22.574 24.444 22.106 21.6361C22.0541 21.3244 22.3244 21.0541 22.6361 21.106C25.444 21.574 28 19.4087 28 16.5622V10.7964C28 8.69969 26.3003 7 24.2036 7Z"
                                stroke="currentColor" stroke-width="2" />
                            <path d="M10 7L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path d="M22 7L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path
                                d="M12 15.8C13.4708 17.0542 14.0018 17.7515 14.7826 19C16.245 16.403 17.4141 15.1011 20 13"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <a @click="closeFeaturesNav()" href="/features#operations"
                            class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                            Daily Operations
                            <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                    stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </h3>
                    <ul class="ml-10 space-y-1">
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#todolists"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                To-do Lists
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#forms"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Forms
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="col-span-1 pt-4 mt-3 md:pt-0 md:mt-0 md:pr-2 md:pl-5 border-t-hairline md:border-t-0 md:border-l-hairline border-gray-400"
                    x-show="showFeaturesNav" x-transition:enter="transition ease-out duration-300 delay-[220ms]"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-500" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <h3 class="flex mb-2 md:mb-3">
                        <svg class="size-6 flex-shrink-0 text-gray-900" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.6 3H9.4C7.15979 3 6.03969 3 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3 6.03969 3 7.15979 3 9.4V9.6C3 11.8402 3 12.9603 3.43597 13.816C3.81947 14.5686 4.43139 15.1805 5.18404 15.564C6.03969 16 7.15979 16 9.4 16H14.6C16.8402 16 17.9603 16 18.816 15.564C19.5686 15.1805 20.1805 14.5686 20.564 13.816C21 12.9603 21 11.8402 21 9.6V9.4C21 7.15979 21 6.03969 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C17.9603 3 16.8402 3 14.6 3Z"
                                stroke="currentColor" stroke-width="1.6" />
                            <path
                                d="M18.5 21H5.5C4.11929 21 3 19.8807 3 18.5C3 17.1193 4.11929 16 5.5 16H18.5C19.8807 16 21 17.1193 21 18.5C21 19.8807 19.8807 21 18.5 21Z"
                                stroke="currentColor" stroke-width="1.6" />
                            <path d="M7.5 12L7.5 8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                            <path d="M10.5 12L10.5 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                            <path d="M13.5 12L13.5 10" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" />
                            <path d="M16.5 12L16.5 8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                        <a @click="closeFeaturesNav()" href="/features#wellbeing"
                            class="flex items-center text-ui-15-normal leading-[130%] font-sans-heading ml-4 group hover:underline">
                            Well-being &amp; Retention
                            <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-4 flex-shrink-0 mt-0.5 ml-1 text-gray-900"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                    stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </h3>
                    <ul class="ml-10 space-y-1">
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#satisfaction"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Satisfaction Surveys
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a @click="closeFeaturesNav()" href="/features#development"
                                class="flex items-center py-1.5 lg:py-2 text-ui-15-normal md:text-ui-13-normal lg:text-ui-15-normal leading-[130%] text-gray-700 group hover:underline">
                                Development Surveys
                                <svg class="opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition ease-out size-3 flex-shrink-0 mt-0.5 ml-1 text-gray-700"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.58317 12L12.6665 8M8.58317 4L12.6665 8M12.6665 8H3.33317"
                                        stroke="currentColor" stroke-width="1.06667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>