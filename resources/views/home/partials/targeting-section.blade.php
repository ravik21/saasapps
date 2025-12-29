<section id="targeting" class="relative pt-20 pb-12 md:py-28 border-t border-gray-300">
    <header class="mb-6 md:mb-16">
        <h2 class="inline-block relative text-ui-32-normal md:text-heading-lg font-sans-heading">
            The right information <br class="hidden md:block" />to the <span class="relative">right<svg
                    class="absolute text-gray-900 w-[66px] md:w-[101px] left-0 -bottom-[8px] md:-bottom-[10px]"
                    aria-hidden="true" role="presentation" viewBox="0 0 101 9" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 3.26041C27.8714 -1.06193 67.0473 2.37336 100 1.15395M70.7714 8C77.1357 7.04605 80.4357 8 87.0357 8"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
            </span> people
        </h2>
        <p class="text-body-sm md:text-body-md text-gray-800 mt-6">
            Direct your content precisely where it matters using <br class="hidden md:block" />our powerful
            targeting
            system.
        </p>
    </header>
    <div class="flex overflow-x-scroll py-8 md:py-0 -mx-8 px-8 md:px-0 md:mx-0 md:overflow-x-visible overflow-y-visible snap-x snap-mandatory xl:grid xl:grid-cols-[400px_auto_364px] h-101 md:h-85 scrollbar-none"
        x-data="targeting()">
        <div class="snap-center w-full md:w-auto md:flex-1 flex-shrink-0 relative flex pr-8 lg:pr-12">
            <div x-show="index == 2 || index == 1" x-transition:enter="transition ease-out duration-1000 delay-500"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-50"
                x-transition:leave="transition ease-out duration-[400ms]"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -rotate-6 scale-[0.8] blur-md"
                class="absolute inset-0 flex bg-gray-100 shadow-card-bumped rounded-24 mr-8 lg:mr-12 p-6 transition ease-in"
                :class="{
                            'z-10 rotate-5 opacity-50': index == 1,
                            'z-20 rotate-0 opacity-100': index ==
                                2,
                            'z-30': index == 0
                        }">

                <div class="flex-1 flex flex-col">
                    <ul class="mb-6 flex space-x-1">
                        <li class="size-3 bg-[#ED3F3F] rounded-full"></li>
                        <li class="size-3 bg-gray-400 rounded-full"></li>
                        <li class="size-3 bg-[#48E069] rounded-full"></li>
                    </ul>
                    <div class="flex-1 flex flex-col mb-4 ">
                        <p class="text-caption-lg text-gray-700 font-medium mb-1">
                            New Course
                        </p>
                        <h3 class="text-ui-2xl font-semibold">
                            How we do Social Media
                        </h3>
                        <ul class='flex-1 flex flex-wrap items-end content-end gap-2'>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-gray-300 border-gray-900/10 shadow-btn-ghost">
                                Madrid
                            </li>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-gray-300 border-gray-900/10 shadow-btn-ghost">
                                Oslo
                            </li>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-brand-100 border-gray-900/10 shadow-btn-ghost">
                                Marketing
                            </li>
                        </ul>
                    </div>
                    <button
                        class="relative transition ease-out h-11 bg-gray-900 text-gray-100 text-button-md rounded-10 cursor-default"
                        :class="{ 'animate-fake-button-click': index == 2 && !isIdle }">
                        Publish
                    </button>
                </div>

                <span x-show="index == 2" x-transition:enter="transition ease-in duration-150 delay-[600ms]"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150 " x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full bottom-[34.5px]">
                </span>
            </div>
            <div x-show="index == 1 || index == 0" x-transition:enter="transition ease-out duration-1000 delay-500"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-50"
                x-transition:leave="transition ease-out duration-[400ms]"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -rotate-6 scale-[0.8] blur-md"
                class="absolute inset-0 flex bg-gray-100 shadow-card-bumped rounded-24 mr-8 lg:mr-12 p-6 transition ease-in"
                :class="{
                            'z-10 rotate-5 opacity-50': index == 0,
                            'z-20 rotate-0 opacity-100': index ==
                                1,
                            'z-30': index == 2
                        }">

                <div class="flex-1 flex flex-col">
                    <ul class="mb-6 flex space-x-1">
                        <li class="size-3 bg-[#ED3F3F] rounded-full"></li>
                        <li class="size-3 bg-gray-400 rounded-full"></li>
                        <li class="size-3 bg-[#48E069] rounded-full"></li>
                    </ul>
                    <div class="flex-1 flex flex-col mb-4 ">
                        <p class="text-caption-lg text-gray-700 font-medium mb-1">
                            New To-do List
                        </p>
                        <h3 class="text-ui-2xl font-semibold">
                            Friday Cleaning
                        </h3>
                        <ul class='flex-1 flex flex-wrap items-end content-end gap-2'>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-gray-300 border-gray-900/10 shadow-btn-ghost">
                                Stockholm
                            </li>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-brand-100 border-gray-900/10 shadow-btn-ghost">
                                Bartenders
                            </li>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-brand-100 border-gray-900/10 shadow-btn-ghost">
                                Chefs
                            </li>
                        </ul>
                    </div>
                    <button
                        class="relative transition ease-out h-11 bg-gray-900 text-gray-100 text-button-md rounded-10 cursor-default"
                        :class="{ 'animate-fake-button-click': index == 1 && !isIdle }">
                        Publish
                    </button>
                </div>

                <span x-show="index == 1" x-transition:enter="transition ease-in duration-150 delay-[600ms]"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150 " x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full bottom-[34.5px]">
                </span>
            </div>
            <div x-show="index == 0 || index == 2" x-transition:enter="transition ease-out duration-1000 delay-500"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-50"
                x-transition:leave="transition ease-out duration-[400ms]"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -rotate-6 scale-[0.8] blur-md"
                class="absolute inset-0 flex bg-gray-100 shadow-card-bumped rounded-24 mr-8 lg:mr-12 p-6 transition ease-in"
                :class="{
                            'z-10 rotate-5 opacity-50': index == 2,
                            'z-20 rotate-0 opacity-100': index ==
                                0,
                            'z-30': index == 1
                        }">

                <div class="flex-1 flex flex-col">
                    <ul class="mb-6 flex space-x-1">
                        <li class="size-3 bg-[#ED3F3F] rounded-full"></li>
                        <li class="size-3 bg-gray-400 rounded-full"></li>
                        <li class="size-3 bg-[#48E069] rounded-full"></li>
                    </ul>
                    <div class="flex-1 flex flex-col mb-4 ">
                        <p class="text-caption-lg text-gray-700 font-medium mb-1">
                            New Handbook
                        </p>
                        <h3 class="text-ui-2xl font-semibold">
                            Guest Policies
                        </h3>
                        <ul class='flex-1 flex flex-wrap items-end content-end gap-2'>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-gray-300 border-gray-900/10 shadow-btn-ghost">
                                Copenhagen
                            </li>
                            <li
                                class="px-4 py-2 rounded-10 font-medium text-caption-lg border-hairline bg-brand-100 border-gray-900/10 shadow-btn-ghost">
                                Waiters
                            </li>
                        </ul>
                    </div>
                    <button
                        class="relative transition ease-out h-11 bg-gray-900 text-gray-100 text-button-md rounded-10 cursor-default"
                        :class="{ 'animate-fake-button-click': index == 0 && !isIdle }">
                        Publish
                    </button>
                </div>

                <span x-show="index == 0" x-transition:enter="transition ease-in duration-150 delay-[600ms]"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150 " x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full bottom-[34.5px]">
                </span>
            </div> <span x-show="index == 0" x-transition:enter="transition ease-in duration-300 delay-[600ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute w-1/2 border-gray-900 -z-10 bottom-[43.5px] right-0 h-24 -mt-2 -mr-px rounded-br-16 border-b border-r">
            </span>
            <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[600ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute w-1/2 border-gray-900 -z-10 bottom-[43.5px] right-0 h-12 -mt-2 -mr-px rounded-br-16 border-b border-r">
            </span>
            <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[600ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute w-1/2 border-gray-900 -z-10 bottom-[43.5px] right-0 h-6 -mt-2 -mr-px rounded-br-16 border-b border-r">
            </span>
        </div>
        <div class="snap-center w-full md:w-auto md:flex-1 flex-shrink-0 grid grid-cols-2">
            <ul class="col-span-1 flex flex-col justify-center space-y-2">
                <li class="relative flex justify-center ">
                    <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[600ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 left-0 w-1/2 border-t border-l rounded-tl-16 h-[160px]">
                    </span>
                    <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 right-0 w-1/2 border-t border-r rounded-tr-16 h-[160px] -z-10 -mr-px">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected delay-[625ms]': index ==
                                        2,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 2
                                }">
                        Madrid
                        <span x-show="index == 2" x-transition:enter="transition ease-in duration-150 delay-[600ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 2"
                            x-transition:enter="transition ease-in duration-150 delay-[625ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
                <li class="relative flex justify-center ">
                    <span x-show="index == 0" x-transition:enter="transition ease-in duration-300 delay-[600ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 left-0 w-1/2 border-t border-l rounded-tl-16 h-[57px]">
                    </span>
                    <span x-show="index == 0" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 right-0 w-1/2 border-t border-r rounded-tr-16 h-6 -z-10 -mr-px">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected': index ==
                                        0,
                                    'delay-[625ms]': index == 0 && !
                                        isIdle,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 0
                                }">
                        Copenhagen
                        <span x-show="index == 0" x-transition:enter="transition ease-in duration-150 delay-[600ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 0"
                            x-transition:enter="transition ease-in duration-150 delay-[625ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
                <li class="relative flex justify-center ">
                    <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[600ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 left-0 w-1/2 border-t border-l rounded-tl-16 h-[57px]">
                    </span>
                    <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 right-0 w-1/2 border-t border-r rounded-tr-16 h-6 -z-10 -mr-px">
                    </span>
                    <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 bottom-1/2 -mb-px right-0 w-1/2 border-b border-r rounded-br-16 h-7 -z-10 -mr-px">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected delay-[625ms]': index ==
                                        1,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 1
                                }">
                        Stockholm
                        <span x-show="index == 1" x-transition:enter="transition ease-in duration-150 delay-[600ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 1"
                            x-transition:enter="transition ease-in duration-150 delay-[625ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
                <li class="relative flex justify-center ">
                    <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[600ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 left-0 w-1/2 border-t border-l rounded-tl-16 h-[40px]">
                    </span>
                    <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 right-0 w-1/2 border-t border-r rounded-tr-16 h-6 -z-10 -mr-px">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected delay-[625ms]': index ==
                                        2,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 2
                                }">
                        Oslo
                        <span x-show="index == 2" x-transition:enter="transition ease-in duration-150 delay-[600ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 2"
                            x-transition:enter="transition ease-in duration-150 delay-[625ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
            </ul>
            <ul class="col-span-1 flex flex-col justify-center space-y-2">
                <li class="flex justify-center">
                    <div
                        class="text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8 text-gray-900/50 border-gray-900/10 shadow-50">
                        HR
                    </div>
                </li>
                <li class="flex justify-center">
                    <div
                        class="text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8 text-gray-900/50 border-gray-900/10 shadow-50">
                        Administration
                    </div>
                </li>
                <li class="relative flex justify-center">
                    <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 left-0 w-1/2 border-t border-l rounded-tl-16 h-[23.5px]">
                    </span>
                    <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 right-0 w-1/2 border-t border-r rounded-tr-16 h-[23.5px]">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected delay-[675ms]': index ==
                                        1,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 1
                                }">
                        Bartenders
                        <span x-show="index == 1" x-transition:enter="transition ease-in duration-150 delay-[650ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 1"
                            x-transition:enter="transition ease-in duration-150 delay-[675ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
                <li class="relative flex justify-center">
                    <span x-show="index == 0" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 bottom-1/2 left-0 w-1/2 border-b border-l rounded-bl-16 h-[23.5px]">
                    </span>
                    <span x-show="index == 0" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 top-1/2 right-0 w-1/2 border-t border-r rounded-tr-16 h-12">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected': index ==
                                        0,
                                    'delay-[675ms]': index == 0 && !
                                        isIdle,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 0
                                }">
                        Waiters
                        <span x-show="index == 0" x-transition:enter="transition ease-in duration-150 delay-[650ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 0"
                            x-transition:enter="transition ease-in duration-150 delay-[675ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
                <li class="relative flex justify-center">
                    <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 bottom-1/2 left-0 w-1/2 border-b border-l rounded-bl-16 h-[23.5px]">
                    </span>
                    <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 bottom-1/2 right-0 w-1/2 border-b border-r rounded-br-16 h-[23.5px]">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected delay-[675ms]': index ==
                                        1,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 1
                                }">
                        Chefs
                        <span x-show="index == 1" x-transition:enter="transition ease-in duration-150 delay-[650ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 1"
                            x-transition:enter="transition ease-in duration-150 delay-[675ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
                <li class="relative flex justify-center">
                    <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[650ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 bottom-1/2 left-0 w-1/2 border-b border-l rounded-bl-16 h-[23.5px]">
                    </span>
                    <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute w-1/2 border-gray-900 -z-10 bottom-1/2 right-0 w-1/2 border-b border-r rounded-br-16 h-[23.5px]">
                    </span>
                    <div class="transition duration-300 ease-out relative text-caption-lg md:text-caption-md lg:text-caption-lg font-medium border-hairline bg-gray-100 px-4 py-2 rounded-8"
                        :class="{
                                    'text-gray-900 border-gray-900 shadow-department-selected delay-[675ms]': index ==
                                        2,
                                    'text-gray-900/50 border-gray-900/10 shadow-50 delay-0': index != 2
                                }">
                        Marketing
                        <span x-show="index == 2" x-transition:enter="transition ease-in duration-150 delay-[650ms]"
                            x-transition:enter-start="translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-2.5 right-full top-1/2 -translate-y-1/2 -z-10">
                        </span> <span x-show="index == 2"
                            x-transition:enter="transition ease-in duration-150 delay-[675ms]"
                            x-transition:enter-start="-translate-x-5" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-150 "
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-5"
                            class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -ml-2.5 left-full top-1/2 -translate-y-1/2 -z-10">
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="snap-center w-full md:w-auto md:flex-1 flex-shrink-0 relative flex pl-8 lg:pl-12">
            <div
                class="relative flex-1 flex flex-col shadow-card-dark-border bg-brand-100 border-4 border-gray-100 rounded-t-42 lg:rounded-t-56 before:absolute before:-bottom-2 before:-left-2 before:-right-2 before:h-24 before:bg-gradient-to-b before:from-transparent before:to-gray-100 before:to-[90%]">
                <span
                    class="relative mt-4 w-22 h-6 mx-auto bg-gray-900 rounded-full before:absolute before:size-4 before:rounded-full before:right-1 before:top-1 before:bg-brand-100">
                </span>
                <div class="flex items-center justify-center mt-8">
                    <svg class="size-4 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 19a1 1 0 0 1 .993 .883l.007 .117v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-1a1 1 0 0 1 1 -1z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M18.313 16.91l.094 .083l.7 .7a1 1 0 0 1 -1.32 1.497l-.094 -.083l-.7 -.7a1 1 0 0 1 1.218 -1.567l.102 .07z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M7.007 16.993a1 1 0 0 1 .083 1.32l-.083 .094l-.7 .7a1 1 0 0 1 -1.497 -1.32l.083 -.094l.7 -.7a1 1 0 0 1 1.414 0z"
                            stroke-width="0" fill="currentColor" />
                        <path d="M4 11a1 1 0 0 1 .117 1.993l-.117 .007h-1a1 1 0 0 1 -.117 -1.993l.117 -.007h1z"
                            stroke-width="0" fill="currentColor" />
                        <path d="M21 11a1 1 0 0 1 .117 1.993l-.117 .007h-1a1 1 0 0 1 -.117 -1.993l.117 -.007h1z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M6.213 4.81l.094 .083l.7 .7a1 1 0 0 1 -1.32 1.497l-.094 -.083l-.7 -.7a1 1 0 0 1 1.217 -1.567l.102 .07z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M19.107 4.893a1 1 0 0 1 .083 1.32l-.083 .094l-.7 .7a1 1 0 0 1 -1.497 -1.32l.083 -.094l.7 -.7a1 1 0 0 1 1.414 0z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M12 2a1 1 0 0 1 .993 .883l.007 .117v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-1a1 1 0 0 1 1 -1z"
                            stroke-width="0" fill="currentColor" />
                        <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <div class="text-ui-md ml-1">
                        24˚
                    </div>
                    <div class="text-ui-md ml-2 tracking-[-4%]">
                        Copenhagen
                    </div>
                </div>
                <time class="text-center text-[48px] leading-[48px] font-medium mt-2">
                    12:45
                </time>
                <div class="relative mx-3 mt-7">
                    <div x-show="index == 0" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
                        class="absolute z-20 inset-0 h-26.5 rounded-20 border-hairline border-gray-900/10 bg-gray-100 scale-[0.81] mt-[22px]">
                    </div>

                    <div x-show="index == 2 || index == 0"
                        x-transition:enter="transition ease-out duration-500 delay-[725ms]"
                        x-transition:enter-start="opacity-0 blur-sm scale-75 -translate-y-4"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        class="absolute transation ease-out duration-300 inset-0 h-26.5 rounded-20 border-hairline border-gray-900/10 bg-gray-100 p-3"
                        :class="{ 'z-10': index == 1, 'z-20 scale-90 translate-y-3': index == 0, 'z-30': index == 2 }">
                        <div class="transition" :class="{ 'opacity-50': index != 2 }">
                            <div class="flex items-center">
                                <svg class="relative size-7 rounded-8 p-1 bg-brand-500 text-gray-800 border-hairline border-gray-900/10 "
                                    fill="currentColor" stroke-width="0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 42.9 58.1">
                                    <path
                                        d="M40 18.8c-1.9-1.9-4.4-2.9-7.1-2.9-.6 0-1.1.1-1.4.1v-6c0-2.5-.9-4.9-2.7-6.8l-.6-.6C26.4 1 24 0 21.5 0s-4.9 1-6.8 2.7l-.7.6c-1.1 1.2-1.9 2.7-2.3 4.2-.6-.1-1.1-.2-1.7-.2-2.7 0-5.2 1-7.1 2.9C1.1 12 .1 14.4 0 16.9v.8c.1 2.5 1.1 4.9 2.9 6.7l1.9 1.8-.2.1c-.6.4-1.2.9-1.7 1.4C1.1 29.5.1 31.8 0 34.4v.8c.1 2.5 1.1 4.9 2.9 6.7l1.7 1.7L19 58V47.2L8.3 36.5c-.9-.9-.9-2.4 0-3.3.4-.4 1-.7 1.7-.7.6 0 1.2.2 1.7.7l7.4 7.4V29.7L8.3 19c-.9-.9-.9-2.4 0-3.3.4-.4 1-.7 1.7-.7.6 0 1.2.3 1.7.7l7.4 7.4V10c0-1.3 1.1-2.3 2.3-2.3 1.3 0 2.3 1.1 2.3 2.3v21.6l7.4-7.4c.4-.4 1-.7 1.6-.7.6 0 1.2.2 1.7.7.9.9.9 2.4 0 3.3L23.8 38.3v10.9L40 33c1.8-1.8 2.8-4.1 2.9-6.7v-.8c-.1-2.6-1.2-5-2.9-6.7z" />
                                </svg>
                                <h4 class="flex-1 ml-2 text-ui-14 text-gray-900">
                                    Monotree
                                </h4>
                                <time class="text-ui-11-normal text-gray-800 tracking-[2%] mr-1">
                                    Now
                                </time>
                            </div>
                            <h3 class="mt-3 text-ui-14-semibold text-gray-900 tracking-[-1%]">
                                New Course
                            </h3>
                            <p class="mt-1 text-ui-md-normal tracking-[-1%] text-gray-800 truncate">
                                "Social Media" has just been published
                            </p>
                        </div>
                    </div>
                    <div x-show="index == 2" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
                        class="absolute z-20 inset-0 h-26.5 rounded-20 border-hairline border-gray-900/10 bg-gray-100 scale-[0.81] mt-[22px]">
                    </div>

                    <div x-show="index == 1 || index == 2"
                        x-transition:enter="transition ease-out duration-500 delay-[725ms]"
                        x-transition:enter-start="opacity-0 blur-sm scale-75 -translate-y-4"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        class="absolute transation ease-out duration-300 inset-0 h-26.5 rounded-20 border-hairline border-gray-900/10 bg-gray-100 p-3"
                        :class="{ 'z-10': index == 0, 'z-20 scale-90 translate-y-3': index == 2, 'z-30': index == 1 }">
                        <div class="transition" :class="{ 'opacity-50': index != 1 }">
                            <div class="flex items-center">
                                <svg class="relative size-7 rounded-8 p-1 bg-brand-500 text-gray-800 border-hairline border-gray-900/10 "
                                    fill="currentColor" stroke-width="0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 42.9 58.1">
                                    <path
                                        d="M40 18.8c-1.9-1.9-4.4-2.9-7.1-2.9-.6 0-1.1.1-1.4.1v-6c0-2.5-.9-4.9-2.7-6.8l-.6-.6C26.4 1 24 0 21.5 0s-4.9 1-6.8 2.7l-.7.6c-1.1 1.2-1.9 2.7-2.3 4.2-.6-.1-1.1-.2-1.7-.2-2.7 0-5.2 1-7.1 2.9C1.1 12 .1 14.4 0 16.9v.8c.1 2.5 1.1 4.9 2.9 6.7l1.9 1.8-.2.1c-.6.4-1.2.9-1.7 1.4C1.1 29.5.1 31.8 0 34.4v.8c.1 2.5 1.1 4.9 2.9 6.7l1.7 1.7L19 58V47.2L8.3 36.5c-.9-.9-.9-2.4 0-3.3.4-.4 1-.7 1.7-.7.6 0 1.2.2 1.7.7l7.4 7.4V29.7L8.3 19c-.9-.9-.9-2.4 0-3.3.4-.4 1-.7 1.7-.7.6 0 1.2.3 1.7.7l7.4 7.4V10c0-1.3 1.1-2.3 2.3-2.3 1.3 0 2.3 1.1 2.3 2.3v21.6l7.4-7.4c.4-.4 1-.7 1.6-.7.6 0 1.2.2 1.7.7.9.9.9 2.4 0 3.3L23.8 38.3v10.9L40 33c1.8-1.8 2.8-4.1 2.9-6.7v-.8c-.1-2.6-1.2-5-2.9-6.7z" />
                                </svg>
                                <h4 class="flex-1 ml-2 text-ui-14 text-gray-900">
                                    Monotree
                                </h4>
                                <time class="text-ui-11-normal text-gray-800 tracking-[2%] mr-1">
                                    Now
                                </time>
                            </div>
                            <h3 class="mt-3 text-ui-14-semibold text-gray-900 tracking-[-1%]">
                                New To-do List
                            </h3>
                            <p class="mt-1 text-ui-md-normal tracking-[-1%] text-gray-800 truncate">
                                "Friday Cleaning" has just been published
                            </p>
                        </div>
                    </div>
                    <div x-show="index == 1" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
                        class="absolute z-20 inset-0 h-26.5 rounded-20 border-hairline border-gray-900/10 bg-gray-100 scale-[0.81] mt-[22px]">
                    </div>

                    <div x-show="index == 0 || index == 1"
                        x-transition:enter="transition ease-out duration-500 delay-[725ms]"
                        x-transition:enter-start="opacity-0 blur-sm scale-75 -translate-y-4"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        class="absolute transation ease-out duration-300 inset-0 h-26.5 rounded-20 border-hairline border-gray-900/10 bg-gray-100 p-3"
                        :class="{ 'z-10': index == 2, 'z-20 scale-90 translate-y-3': index == 1, 'z-30': index == 0 }">
                        <div class="transition" :class="{ 'opacity-50': index != 0 }">
                            <div class="flex items-center">
                                <svg class="relative size-7 rounded-8 p-1 bg-brand-500 text-gray-800 border-hairline border-gray-900/10 "
                                    fill="currentColor" stroke-width="0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 42.9 58.1">
                                    <path
                                        d="M40 18.8c-1.9-1.9-4.4-2.9-7.1-2.9-.6 0-1.1.1-1.4.1v-6c0-2.5-.9-4.9-2.7-6.8l-.6-.6C26.4 1 24 0 21.5 0s-4.9 1-6.8 2.7l-.7.6c-1.1 1.2-1.9 2.7-2.3 4.2-.6-.1-1.1-.2-1.7-.2-2.7 0-5.2 1-7.1 2.9C1.1 12 .1 14.4 0 16.9v.8c.1 2.5 1.1 4.9 2.9 6.7l1.9 1.8-.2.1c-.6.4-1.2.9-1.7 1.4C1.1 29.5.1 31.8 0 34.4v.8c.1 2.5 1.1 4.9 2.9 6.7l1.7 1.7L19 58V47.2L8.3 36.5c-.9-.9-.9-2.4 0-3.3.4-.4 1-.7 1.7-.7.6 0 1.2.2 1.7.7l7.4 7.4V29.7L8.3 19c-.9-.9-.9-2.4 0-3.3.4-.4 1-.7 1.7-.7.6 0 1.2.3 1.7.7l7.4 7.4V10c0-1.3 1.1-2.3 2.3-2.3 1.3 0 2.3 1.1 2.3 2.3v21.6l7.4-7.4c.4-.4 1-.7 1.6-.7.6 0 1.2.2 1.7.7.9.9.9 2.4 0 3.3L23.8 38.3v10.9L40 33c1.8-1.8 2.8-4.1 2.9-6.7v-.8c-.1-2.6-1.2-5-2.9-6.7z" />
                                </svg>
                                <h4 class="flex-1 ml-2 text-ui-14 text-gray-900">
                                    Monotree
                                </h4>
                                <time class="text-ui-11-normal text-gray-800 tracking-[2%] mr-1">
                                    Now
                                </time>
                            </div>
                            <h3 class="mt-3 text-ui-14-semibold text-gray-900 tracking-[-1%]">
                                New Handbook
                            </h3>
                            <p class="mt-1 text-ui-md-normal tracking-[-1%] text-gray-800 truncate">
                                "Guest Policies" has just been published
                            </p>
                        </div>
                    </div>
                </div>
                <span x-show="index == 0" x-transition:enter="transition ease-in duration-150 delay-[700ms]"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150 " x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-1.5 right-full bottom-16">
                </span> <span x-show="index == 1" x-transition:enter="transition ease-in duration-150 delay-[700ms]"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150 " x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-1.5 right-full bottom-[132px]">
                </span> <span x-show="index == 2" x-transition:enter="transition ease-in duration-150 delay-[700ms]"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150 " x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="w-5 h-5 absolute bg-gray-900 border-2 border-gray-100 rounded-full -mr-1.5 right-full bottom-[85.5px]">
                </span>
            </div>
            <span x-show="index == 0" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute w-1/2 border-gray-900 -z-10 bottom-[76px] left-0 -mt-2 -ml-px border-b border-l rounded-bl-16 h-[25.5px]">
            </span>
            <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute w-1/2 border-gray-900 -z-10 bottom-[145px] left-0 -mt-2 -ml-px border-b border-l rounded-bl-16 h-7">
            </span>
            <span x-show="index == 1" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute w-1/2 border-gray-900 -z-10 bottom-[122px] left-0 -mt-2 -ml-px border-t border-l rounded-tl-16 h-6">
            </span>
            <span x-show="index == 2" x-transition:enter="transition ease-in duration-300 delay-[700ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-out duration-300 " x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute w-1/2 border-gray-900 -z-10 bottom-[75px] left-0 -mt-2 -ml-px border-t border-l rounded-tl-16 h-[25px]">
            </span>
        </div>
    </div>
</section>