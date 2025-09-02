<div class="navbar-mobile">
    <nav class="bg-gray-800 block md:hidden">
        <div id="mobile-menu" class="md:hidden" x-show="isOpen">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <a href="/"
                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Home</a>
                <a href="/blog"
                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Blog</a>
                <a href="/about" aria-current="page"
                    class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">About</a>
                <a href="/contact"
                    class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Contact</a>
            </div>
            <div class="border-t border-gray-700 pt-4 pb-3">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img src="rei.jpg" alt="" class="size-10 rounded-full" />
                    </div>
                    <div class="ml-3">
                        <div class="text-base/5 font-medium text-white">Rei</div>
                        <div class="text-sm font-medium text-white">Rei@example.com</div>
                    </div>
                    <button type="button"
                        class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-white hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Your
                        Profile</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Settings</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-gray-700">Sign
                        out</a>
                </div>
            </div>
        </div>
    </nav>
</div>
