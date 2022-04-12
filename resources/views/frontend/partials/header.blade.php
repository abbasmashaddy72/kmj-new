<header class="fixed w-full z-30 md:bg-opacity-90 transition duration-300 ease-in-out" x-data="{ top: true }"
    @scroll.window="top = window.pageYOffset > 10 ? false : true"
    :class="{'bg-white dark:bg-gray-800 backdrop-blur-sm shadow-lg' : !top}">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between h-20">
            <div class="shrink-0 mr-5"><a class="block" href="{{ route('home') }}"
                    aria-label="Al Karbala Logo"><img src="{{ asset('images/logo-01.png') }}"
                        class="h-24 w-28" /></a></div>
            <nav class="hidden md:flex md:grow">
                <ul class="flex grow flex-wrap items-center font-medium">
                    <li><a class="text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                            href="{{ route('karbala') }}">Karbala</a></li>
                    <li class="relative" x-data="{ open: false }" @mouseenter="open = true"
                        @mouseleave="open = false"><a
                            class="text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                            href="{{ route('aqaed') }}" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                            @focusout="open = false" @click.prevent>Aqaed <svg
                                class="w-3 h-3 fill-current text-gray-400 cursor-pointer ml-1 shrink-0"
                                viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 4.305L5.989 8.598 1.695 4.305A1 1 0 00.28 5.72l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z" />
                            </svg></a>
                        <ul class="origin-top-right absolute top-full left-0 w-40 bg-white dark:bg-gray-800 shadow-lg py-2 ml-4 rounded"
                            x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" x-cloak>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true"
                                    @focusout="open = false">Tauheed</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">Adl</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('blog') }}" @focus="open = true"
                                    @focusout="open = false">Nabuwwat</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true"
                                    @focusout="open = false">Imamat</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true"
                                    @focusout="open = false">Qayamat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative" x-data="{ open: false }" @mouseenter="open = true"
                        @mouseleave="open = false"><a
                            class="text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                            href="#0" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                            @focusout="open = false" @click.prevent>Imam Mehdi (ع) <svg
                                class="w-3 h-3 fill-current text-gray-400 cursor-pointer ml-1 shrink-0"
                                viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 4.305L5.989 8.598 1.695 4.305A1 1 0 00.28 5.72l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z" />
                            </svg></a>
                        <ul class="origin-top-right absolute top-full left-0 w-40 bg-white dark:bg-gray-800 shadow-lg py-2 ml-4 rounded"
                            x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" x-cloak>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">Who is
                                    Imam Mahdi (ع)</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">Birth of
                                    Imam Mahdi (ع)</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('blog') }}" @focus="open = true" @focusout="open = false">
                                    Responsibilities towards Imam (ع)</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">
                                    Occultation of Imam Mahdi (ع)</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true"
                                    @focusout="open = false">Reappearance of Imam Mahdi (ع) </a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">
                                    Helpers and Companions of
                                    Imam Mahdi (ع)</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative" x-data="{ open: false }" @mouseenter="open = true"
                        @mouseleave="open = false"><a
                            class="text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                            href="#0" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                            @focusout="open = false" @click.prevent>Youth <svg
                                class="w-3 h-3 fill-current text-gray-400 cursor-pointer ml-1 shrink-0"
                                viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 4.305L5.989 8.598 1.695 4.305A1 1 0 00.28 5.72l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z" />
                            </svg></a>
                        <ul class="origin-top-right absolute top-full left-0 w-40 bg-white dark:bg-gray-800 shadow-lg py-2 ml-4 rounded"
                            x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" x-cloak>

                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">
                                    Basic Islamic Laws</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('blog') }}" @focus="open = true" @focusout="open = false">
                                    Youth and Importance of Quran</a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">Hijab:
                                    the Dress of Modesty in Islam </a>
                            </li>
                            <li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-amber-500 dark:hover:text-amber-500 flex py-2 px-4 leading-tight"
                                    href="{{ route('about') }}" @focus="open = true" @focusout="open = false">
                                    The Developing World and the Shia Youth</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a class="text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                            href="{{ route('about') }}">Yaad e Mehdi</a></li> --}}
                    <li><a class="text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                            href="{{ route('about') }}">About</a></li>
                    <li><a class="text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                            href="{{ route('contact') }}">Contact</a></li>

                </ul>
                <div class="form-switch flex flex-col justify-center ml-3"><input type="checkbox" name="light-switch"
                        id="light-switch-desktop" class="light-switch sr-only" /> <label class="relative"
                        for="light-switch-desktop"><span
                            class="relative bg-gradient-to-t from-gray-100 to-white dark:from-gray-800 dark:to-gray-700 shadow-sm z-10"
                            aria-hidden="true"></span> <svg class="absolute inset-0" width="44" height="24"
                            viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg">
                            <g class="fill-current text-white" fill-rule="nonzero" opacity=".88">
                                <path
                                    d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z" />
                                <circle cx="32" cy="12" r="3" />
                                <circle fill-opacity=".4" cx="12" cy="12" r="6" />
                                <circle fill-opacity=".88" cx="12" cy="12" r="3" />
                            </g>
                        </svg> <span class="sr-only">Switch to light / dark version</span></label></div>
                <ul class="flex justify-end flex-wrap items-center">
                    <li><a class="btn-sm text-white bg-amber-500 hover:bg-green-400 ml-6"
                            href="{{ route('contact') }}">Login</a>
                    </li>
                </ul>
            </nav>
            <div class="inline-flex md:hidden" x-data="{ expanded: false }">
                <div class="form-switch flex flex-col justify-center mr-6 -mt-0.5"><input type="checkbox"
                        name="light-switch" id="light-switch-mobile" class="light-switch sr-only" /> <label
                        class="relative" for="light-switch-mobile"><span
                            class="relative bg-gradient-to-t from-gray-100 to-white dark:from-gray-800 dark:to-gray-700 shadow-sm z-10"
                            aria-hidden="true"></span> <svg class="absolute inset-0" width="44" height="24"
                            viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg">
                            <g class="fill-current text-white" fill-rule="nonzero" opacity=".88">
                                <path
                                    d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z" />
                                <circle cx="32" cy="12" r="3" />
                                <circle fill-opacity=".4" cx="12" cy="12" r="6" />
                                <circle fill-opacity=".88" cx="12" cy="12" r="3" />
                            </g>
                        </svg> <span class="sr-only">Switch to light / dark version</span></label></div><button
                    class="hamburger" :class="{ 'active': expanded }" @click.stop="expanded = !expanded"
                    aria-controls="mobile-nav" :aria-expanded="expanded"><span class="sr-only">Menu</span> <svg
                        class="w-6 h-6 fill-current text-gray-900 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 transition duration-150 ease-in-out"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect y="4" width="24" height="2" rx="1" />
                        <rect y="11" width="24" height="2" rx="1" />
                        <rect y="18" width="24" height="2" rx="1" />
                    </svg></button>
                <nav id="mobile-nav"
                    class="fixed top-0 h-screen z-20 left-0 w-full max-w-sm -ml-16 overflow-scroll bg-white dark:bg-gray-900 shadow-lg no-scrollbar"
                    @click.outside="expanded = false" @keydown.escape.window="expanded = false" x-show="expanded"
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-x-full"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" x-cloak>
                    <div class="py-6 pr-4 pl-20"><img src="{{ asset('images/logo-01.png') }}"
                            class="h-24 w-28" />
                        <ul>
                            <li><a class="flex text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 py-2"
                                    href="{{ route('karbala') }}">Karbala</a></li>
                            <li class="py-2 my-2 border-t border-b border-gray-200 dark:border-gray-800"><a
                                    href="{{ route('aqaed') }}"> <span
                                        class="flex text-gray-600 dark:text-gray-400 py-2">Aqaed</span></a>
                                <ul class="pl-4">
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('about') }}">Tauheed</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('about') }}">Adl</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}">Nabuwwat</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}">Imamat</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}">Qayamat</a></li>
                                </ul>
                            </li>
                            <li class="py-2 my-2 border-t border-b border-gray-200 dark:border-gray-800"><span
                                    class="flex text-gray-600 dark:text-gray-400 py-2">Imam Mahdi (ع)</span>
                                <ul class="pl-4">
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('about') }}">Who is
                                            Imam Mahdi (ع)</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('about') }}">Birth of
                                            Imam Mahdi (ع)</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}"> Responsibilities towards Imam (ع)</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}">Occultation of Imam Mahdi (ع)</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}">Reappearance of Imam Mahdi (ع)</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}">Helpers and Companions of
                                            Imam Mahdi (ع)</a></li>
                                </ul>
                            </li>
                            <li class="py-2 my-2 border-t border-b border-gray-200 dark:border-gray-800"><span
                                    class="flex text-gray-600 dark:text-gray-400 py-2">Youth</span>
                                <ul class="pl-4">
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('about') }}">Basic Islamic Laws</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('about') }}">Youth and Importance of Quran</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}"> Hijab:
                                            the Dress of Modesty in Islam</a></li>
                                    <li><a class="text-sm flex font-medium text-gray-600 hover:text-amber-500 dark:text-gray-400 dark:hover:text-amber-500 py-2"
                                            href="{{ route('blog') }}">The Developing World and the Shia Youth</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="flex text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 py-2"
                                    href="{{ route('about') }}">About</a></li>
                            <li><a class="flex text-gray-600 hover:text-amber-500 dark:text-gray-300 dark:hover:text-amber-500 py-2"
                                    href="{{ route('contact') }}">Contact</a></li>
                            <li><a class="font-medium w-full inline-flex items-center justify-center border border-transparent px-4 py-2 my-2 rounded text-white bg-amber-500 hover:bg-green-400 transition duration-150 ease-in-out"
                                    href="{{ route('contact') }}">Login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
