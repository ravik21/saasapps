<aside x-data="cookies()">
    <template x-if="isPending()">
        <div
            class="z-50 fixed py-4 md:py-6 bottom-0 left-0 right-0 max-w-308 flex flex-col md:flex-row md:items-center md:justify-between px-4 mx-auto bg-gray-900 md:before:absolute md:before:inset-0 md:before:bg-gray-900 md:before:w-screen md:before:left-1/2 md:before:right-1/2 md:before:-mr-[50vw] md:before:-ml-[50vw] md:before:-z-10">
            <p class="flex items-center">
                <span class="text-heading-ssm md:text-heading-sm">
                    🍪
                </span>
                <span class="ml-2 text-gray-100 text-ui-14 md:text-ui-16">
                    Cookies Usage
                </span>
                <span class="ml-4 text-gray-500 text-ui-12-normal md:text-ui-15-normal">
                    We use cookies to enhance your experience on our website.
                </span>
            </p>
            <nav class="flex space-x-5 mt-4 md:mt-0 flex-shrink-0">
                <button
                    class="w-1/2 md:w-auto md:flex-shrink-0 block h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-ui-14 lg:text-button-md bg-gray-900 underline text-gray-100 ring-gray-500/25 ring-hairline z-10 hover:ring-gray-500/50"
                    @click="rejectCookies()">
                    Reject All
                </button>
                <button
                    class="w-1/2 md:w-auto md:flex-shrink-0 block h-9 lg:h-11 px-8 lg:px-10 rounded-8 text-ui-14 lg:text-button-md bg-gray-300 text-gray-800 ring-gray-900/20 shadow-cta ring-hairline z-10 hover:bg-gray-100"
                    @click="acceptCookies()">
                    Accept All
                </button>
            </nav>
        </div>
    </template>
</aside>