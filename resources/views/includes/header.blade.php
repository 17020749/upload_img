 <style>
        /* Custom styles */
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #e8e8e5;
            z-index: 10;
            display: none;
        }

        .fixed-header.active {
            display: block;
        }
    </style>
<!-- nav bar section -->
<nav class="flex flex-wrap items-center justify-between p-3 bg-[#e8e8e5]">

    <div class="text-xl">
        <img src="/images/thumbnail.png" alt="icoin đại diện"
        class="w-full h-12 object-cover">
            <!-- KHÁNH DECAL -->
    
    </div>
    <div class="flex md:hidden">
        <button id="hamburger">
          <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
          <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
    <ul class=" toggle hidden w-full md:w-auto md:flex text-right text-bold mt-5 md:mt-0 md:border-none z-50">
        <li><a href="#home" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Trang trủ
        </a></li>
        <li><a href="#services" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Services
        </a></li>
        <li
            class="relative flex items-center space-x-1 px-3 py-3 "
            x-data="{ open: false }"
            @mouseenter="open = true"
            @mouseleave="open = false"                            
            >
            <a
                class="hover:text-blue-500 md:border-none"
                href="#0"
                :aria-expanded="open"
            >Flyout Menu</a>
            <button
                class="shrink-0 p-1"
                :aria-expanded="open"
                @click.prevent="open = !open"
            >
                <span class="sr-only">Show submenu for "Flyout Menu"</span>
                <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                    <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                </svg>
            </button>
            <!-- 2nd level menu -->
            <ul
                class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden"
                x-show="open"
                x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-out duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak
                @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)"
            >
                <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="9" height="12">
                                <path d="M8.724.053A.5.5 0 0 0 8.2.1L4.333 3H1.5A1.5 1.5 0 0 0 0 4.5v3A1.5 1.5 0 0 0 1.5 9h2.833L8.2 11.9a.5.5 0 0 0 .8-.4V.5a.5.5 0 0 0-.276-.447Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Priority Ratings</span>
                    </a>
                     <!-- Nested submenu -->
                <ul class="origin-top-right absolute top-0 left-full min-w-[240px] bg-white border border-slate-200  rounded-lg shadow-xl" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Nested Item 1
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Nested Item 1
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Nested Item 1
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            Nested Item 2
                        </a>
                    </li>
                </ul>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M11.953 4.29a.5.5 0 0 0-.454-.292H6.14L6.984.62A.5.5 0 0 0 6.12.173l-6 7a.5.5 0 0 0 .379.825h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Insights</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M6 0a6 6 0 1 0 0 12A6 6 0 0 0 6 0ZM2 6a4 4 0 0 1 4-4v8a4 4 0 0 1-4-4Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Item Mirror</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="11" height="11">
                                <path d="M10.866.134a.458.458 0 0 0-.481-.106L.302 3.695a.458.458 0 0 0-.014.856l4.4 1.76 1.76 4.4c.07.175.24.29.427.29h.007a.458.458 0 0 0 .424-.302L10.973.615a.458.458 0 0 0-.107-.48Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Support Center</span>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="relative flex items-center space-x-1 px-3 py-3 "
            x-data="{ open: false }"
            @mouseenter="open = true"
            @mouseleave="open = false"                            
            >
            <a
                class="text-slate-800 hover:text-slate-900"
                href="/"
                :aria-expanded="open"
            >Flyout Menu</a>
            <button
                class="shrink-0 p-1"
                :aria-expanded="open"
                @click.prevent="open = !open"
            >
                <span class="sr-only">Show submenu for "Flyout Menu"</span>
                <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                    <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                </svg>
            </button>
            <!-- 2nd level menu -->
            <ul
                class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden"
                x-show="open"
                x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-out duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak
                @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)"
            >
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="/pageTest">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="9" height="12">
                                <path d="M8.724.053A.5.5 0 0 0 8.2.1L4.333 3H1.5A1.5 1.5 0 0 0 0 4.5v3A1.5 1.5 0 0 0 1.5 9h2.833L8.2 11.9a.5.5 0 0 0 .8-.4V.5a.5.5 0 0 0-.276-.447Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Priority Ratings</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M11.953 4.29a.5.5 0 0 0-.454-.292H6.14L6.984.62A.5.5 0 0 0 6.12.173l-6 7a.5.5 0 0 0 .379.825h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Insights</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M6 0a6 6 0 1 0 0 12A6 6 0 0 0 6 0ZM2 6a4 4 0 0 1 4-4v8a4 4 0 0 1-4-4Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Item Mirror</span>
                    </a>
                </li>
                <li>
                    <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                        <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                            <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="11" height="11">
                                <path d="M10.866.134a.458.458 0 0 0-.481-.106L.302 3.695a.458.458 0 0 0-.014.856l4.4 1.76 1.76 4.4c.07.175.24.29.427.29h.007a.458.458 0 0 0 .424-.302L10.973.615a.458.458 0 0 0-.107-.48Z" />
                            </svg>
                        </div>
                        <span class="whitespace-nowrap">Support Center</span>
                    </a>
                </li>
            </ul>
        </li>
       <li><a href="#contactUs" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Liên hệ
       </a></li>
        
    </ul>

    <div class="toggle w-full text-end hidden md:flex md:w-auto px-2 py-2 md:rounded">
        <a href="tel:+123">
            <div class="flex justify-end">
                <div class="flex items-center h-10 w-30 rounded-md bg-[#c8a876] text-white font-medium p-2">
                    <!-- Heroicon name: phone -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    Call now
                </div>
            </div>
        </a>
    </div>

</nav>

<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
          navToggle.item(i).classList.toggle("hidden");
        }
      };
</script>