<section class="relative pt-12 md:py-24">
    <h2 class="mb-8 md:mb-20 text-heading-mobile-md md:text-heading-md font-sans-heading">
        What other customers <span class="relative">say<svg
                class="absolute text-gray-900 w-[16px] md:w-[22px] -right-[18px] md:-right-[24px] bottom-0"
                aria-hidden="true" role="presentation" viewBox="0 0 22 42" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.62298 33.6675C0.727884 36.0138 -0.328162 29.713 11.984 23.231C21.9713 17.973 24.2453 6.36258 15.8446 1.8968C11.7393 -0.285607 6.46508 1.87661 3.8033 4.52035M3.96189 38.1519C3.42289 37.7956 2.1271 37.4004 1.25598 38.6704C0.167077 40.258 2.77973 42.274 4.81218 39.9357C6.12334 38.4272 4.55257 36.5517 2.95051 36.8046"
                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
            </svg>
        </span>
    </h2>
    <ul class="md:columns-2 gap-x-0">
        @foreach ($otherCases[0] as $k1 => $case)
        <li class="@if ($k1 == 0) break-inside-avoid pb-12 border-gray-400 md:pr-16 @else break-inside-avoid pb-12 border-gray-400 pt-12 md:pt-30 md:pr-16 border-t-hairline @endif">
            <h3 class="h-10 mb-8 flex items-center text-heading-mobile-xs md:text-heading-xs font-sans-heading">
                {{ $case->job_title }}
            </h3>
            <dl class="relative grid grid-cols-3 md:grid-cols-4 gap-x-4 grid-rows-[1fr_auto] mb-8">
                <dt class="col-start-1 row-start-1 mb-2.5 text-ui-13-normal text-gray-600">
                    Country
                </dt>
                <dd class="col-start-1 row-start-2 text-ui-15-normal leading-[18px]">
                    Denmark
                </dd>
                <dt class="col-start-2 row-start-1 mb-2.5 text-ui-13-normal text-gray-600">
                    Industry
                </dt>
                <dd class="col-start-2 row-start-2 text-ui-15-normal leading-[18px]">
                    Retail
                </dd>
                <dt class="col-start-3 row-start-1 mb-2.5 text-ui-13-normal text-gray-600">
                    Employees
                </dt>
                <dd class="col-start-3 row-start-2 text-ui-15-normal leading-[18px]">
                    185
                </dd>
            </dl>
            <blockquote class="relative pl-14">
                <svg class="absolute left-0 top-0 size-7 text-gray-900" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.0001 13.3845C32.0001 13.4072 32 13.4298 31.9998 13.4524V27.5382H31.975C31.6622 23.7478 29.4868 20.7691 24.6157 20.7691C20.5374 20.7691 17.2311 17.4629 17.2311 13.3845C17.2311 9.30617 20.5372 6 24.6156 6C28.6939 6 32.0001 9.30617 32.0001 13.3845Z"
                        fill="black" />
                    <path
                        d="M7.38449 20.7691C12.245 20.781 14.4316 23.7554 14.7437 27.5382H14.7692V13.3845C14.7692 9.30616 11.4628 6.00001 7.38449 6.00001C3.30615 6.00001 0 9.30618 0 13.3845C0 17.4629 3.30615 20.7691 7.38449 20.7691Z"
                        fill="black" />
                </svg>
                <p class="text-body-sm md:text-body-md text-gray-800">
                    {{ $case->review }}
                </p>
                <footer class="mt-3 md:mt-5">
                    <div class="flex items-center justify-center mb-3">
                        <div class="flex space-x-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="size-5 {{ $i <= $case->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        @if($case->client_avatar)
                        <img src="{{ $case->client_avatar }}" 
                             alt="{{ $case->client_name }}" 
                             class="size-10 md:size-12 rounded-full object-cover flex-shrink-0">
                        @endif
                        <div>
                            <p class="mb-1 text-ui-13 md:text-ui-14 text-gray-800">
                                {{ $case->client_name }}
                            </p>
                            @if($case->company_name)
                            <p class="text-ui-12-normal md:text-ui-13-normal text-gray-600">
                                {{ $case->company_name }}
                            </p>
                            @endif
                        </div>
                    </div>
                </footer>
            </blockquote>
        </li>
        @endforeach

        @foreach ($otherCases[1] as $k2 => $case)
        <li
            class="@if ($k2 == 0) break-inside-avoid pb-12 border-gray-400 break-before-column pt-12 md:pt-30 md:pl-16 md:border-l-hairline @else break-inside-avoid pb-12 border-gray-400 pt-12 md:pt-30 md:pl-16 md:border-l-hairline border-t-hairline @endif">
            <h3 class="h-10 mb-8 flex items-center text-heading-mobile-xs md:text-heading-xs font-sans-heading">
                {{ $case->job_title }}
            </h3>
            <dl class="relative grid grid-cols-3 md:grid-cols-4 gap-x-4 grid-rows-[1fr_auto] mb-8">
                <dt class="col-start-1 row-start-1 mb-2.5 text-ui-13-normal text-gray-600">
                    Country
                </dt>
                <dd class="col-start-1 row-start-2 text-ui-15-normal leading-[18px]">
                    Denmark
                </dd>
                <dt class="col-start-2 row-start-1 mb-2.5 text-ui-13-normal text-gray-600">
                    Industry
                </dt>
                <dd class="col-start-2 row-start-2 text-ui-15-normal leading-[18px]">
                    Food
                </dd>
                <dt class="col-start-3 row-start-1 mb-2.5 text-ui-13-normal text-gray-600">
                    Employees
                </dt>
                <dd class="col-start-3 row-start-2 text-ui-15-normal leading-[18px]">
                    180
                </dd>
            </dl>
            <blockquote class="relative pl-14">
                <svg class="absolute left-0 top-0 size-7 text-gray-900" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.0001 13.3845C32.0001 13.4072 32 13.4298 31.9998 13.4524V27.5382H31.975C31.6622 23.7478 29.4868 20.7691 24.6157 20.7691C20.5374 20.7691 17.2311 17.4629 17.2311 13.3845C17.2311 9.30617 20.5372 6 24.6156 6C28.6939 6 32.0001 9.30617 32.0001 13.3845Z"
                        fill="black" />
                    <path
                        d="M7.38449 20.7691C12.245 20.781 14.4316 23.7554 14.7437 27.5382H14.7692V13.3845C14.7692 9.30616 11.4628 6.00001 7.38449 6.00001C3.30615 6.00001 0 9.30618 0 13.3845C0 17.4629 3.30615 20.7691 7.38449 20.7691Z"
                        fill="black" />
                </svg>
                <p class="text-body-sm md:text-body-md text-gray-800">
                    {{ $case->review }}
                </p>
                <footer class="mt-3 md:mt-5">
                    <div class="flex items-center justify-center mb-3">
                        <div class="flex space-x-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="size-5 {{ $i <= $case->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        @if($case->client_avatar)
                        <img src="{{ $case->client_avatar }}" 
                             alt="{{ $case->client_name }}" 
                             class="size-10 md:size-12 rounded-full object-cover flex-shrink-0">
                        @endif
                        <div>
                            <p class="mb-1 text-ui-13 md:text-ui-14 text-gray-800">
                                {{ $case->client_name }}
                            </p>
                            @if($case->company_name)
                            <p class="text-ui-12-normal md:text-ui-13-normal text-gray-600">
                                {{ $case->company_name }}
                            </p>
                            @endif
                        </div>
                    </div>
                </footer>
            </blockquote>
        </li>
        @endforeach
    </ul>
</section>