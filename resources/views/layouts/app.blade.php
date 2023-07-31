<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"> </script>

        <!-- Scripts -->
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
       
        <div class="min-h-screen flex  bg-gray-50 text-gray-800"
        x-data="{ isSidebarExpanded: true }"
        > 
            @include('layouts.sidebar')
            <div class="flex-1 flex flex-col">
                <header class="h-14 flex items-center justify-between px-6 bg-white">
                <button class="p-2 -ml-2 mr-2" @click="isSidebarExpanded = !isSidebarExpanded">
                    <svg viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 transform" :class="isSidebarExpanded ? 'rotate-180' : 'rotate-0'">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="4" y1="6" x2="14" y2="6" />
                    <line x1="4" y1="18" x2="14" y2="18" />
                    <path d="M4 12h17l-3 -3m0 6l3 -3" />
                    </svg>
                </button>
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                    @endif
                    @if(Auth::check()) 
                        <div>
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-900 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                    <i class="fa-solid fa-user"></i> {{ __('Thông tin tài khoản') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <i class="fa-solid fa-right-from-bracket"></i> {{ __('Đăng xuất') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        </div>
                        @else 
                            <div class="flex items-center">
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-r">
                                    <a href="{{route('login')}}">Đăng nhập</a>
                                </button>
                            </div>
                        @endif
                </header>
                <main class="flex-1 p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
          toastr.options = {
  progressBar: true,
  closeButton: true,    
  timeOut: 5000,    
  extendedTimeOut : 3000,
  hideDuration:500,
};
    </script>
</html>
