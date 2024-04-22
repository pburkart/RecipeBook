<x-app-layout>
    <x-slot name="header">
        <!-- Header with increased padding and larger text -->
        <header style="background-color: #1F487E" class="w-full py-6">
            <div class="flex justify-between items-center px-4 sm:px-6 lg:px-8">
                <!-- Logo and title with larger text size -->
                <div class="flex items-center">
                    <a href="{{ route('dashboard.index') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-100" />
                    </a>
                    <h2 class="text-4xl text-white font-semibold ml-4">Prometheus</h2>
                </div>

                <!-- Authenticated user dropdown or guest links -->
                @auth
                    <nav x-data="{ open: false }" class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-white hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </nav>
                @endauth

                <!-- Guest links -->
                @guest
                    <div class="flex">
                        <a href="{{ route('login') }}" class="text-lg text-white hover:text-gray-200 px-4 py-3">
                            Log in
                        </a>
                        <a href="{{ route('register') }}" class="text-lg text-white hover:text-gray-200 px-4 py-3">
                            Register
                        </a>
                    </div>
                @endguest
            </div>
        </header>
    </x-slot>

    <x-slot name="content">
        <main class="flex-grow bg-gray-200">
            <!-- Main content/hero section -->
            <div class="flex-1 h-full flex items-center justify-center">
                <div class="text-center px-6 py-4">
                    <h1 class="text-8xl mt-12 font-extrabold text-gray-800 font-kanit">Prometheus</h1>
                    <p class="mt-12 text-5xl text-gray-600 mx-auto max-w-6xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <p class="mt-12 text-5xl text-gray-600 max-w-6xl">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>            
                    <p class="mt-12 text-5xl text-gray-600 max-w-6xl">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullla pariatur.
                    </p>
                </div>
            </div>
        </main>
    </x-slot>

    <x-slot name="footer">
        <footer class="shadow-custom-footer bg-white p-4">
            <div class="max-w-7xl mx-auto flex justify-between items-center text-gray-800">
                <a href="{{ url('/introduction') }}" class="hover:text-blue-600">Introduction</a>
                <a href="{{ url('/news') }}" class="hover:text-blue-600">News</a>
                <span class="font-extrabold text-2xl">&copy; Prometheus 2024</span>
                <a href="{{ url('/about') }}" class="hover:text-blue-600">About</a>
                <a href="{{ url('/contact-us') }}" class="hover:text-blue-600">Contact Us</a>
            </div>
        </footer>
    </x-slot>
</x-app-layout>
