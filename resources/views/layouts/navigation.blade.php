{{--<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">--}}
{{--    <!-- Primary Navigation Menu -->--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between h-16">--}}
{{--            <div class="flex">--}}
{{--                <!-- Logo -->--}}
{{--                <div class="shrink-0 flex items-center">--}}
{{--                    <a href="{{ route('dashboard') }}">--}}
{{--                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <!-- Navigation Links -->--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">--}}
{{--                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                        {{ __('Dashboard') }}--}}
{{--                    </x-nav-link>--}}
{{--                    <x-nav-link :href="route('permissions.index')" :active="request()->routeIs('permissions.index')">--}}
{{--                        {{ __('Permissions') }}--}}
{{--                    </x-nav-link>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}

{{--</nav>--}}

<!-- Header -->
<header class="bg-white shadow-sm z-10">
    <div class="flex items-center justify-between px-6 py-3">
        <div class="flex items-center">
            <button id="mobile-toggle" class="md:hidden text-gray-600 mr-3">
                <i class="fas fa-bars text-xl"></i>
            </button>

            <!-- Logo -->
            <div class="flex items-center">
                <i class="fas fa-cubes text-indigo-600 text-2xl mr-2"></i>
                <span class="text-xl font-bold text-gray-800">HRMS Pro</span>
            </div>
        </div>

        <!-- Right Header Items -->
        <div class="flex items-center space-x-4">
            <button class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-bell"></i>
            </button>

            <!-- User Profile Dropdown -->
            <div class="relative">
                <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none">
                    <img src="/api/placeholder/40/40" alt="User avatar" class="h-8 w-8 rounded-full bg-indigo-300">
                    <div class="flex flex-col items-start">
                        <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                        @if(Auth::user()->roles[0]->name === "manage")
                            <span class="text-xs text-gray-500">{{Auth::user()->roles[0]->name}} of {{Auth::user()->department->name}}</span>
                        @else
                            <span class="text-xs text-gray-500">{{Auth::user()->roles[0]->name}}</span>
                        @endif
                        <span class="text-xs text-gray-500"></span>
                    </div>
                    <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                </button>

                <!-- Dropdown Menu -->
                <div id="user-dropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-user mr-2"></i> Profile
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-cog mr-2"></i> Settings
                    </a>
                    <div class="border-t border-gray-200"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block px-4 w-[100%] py-2 text-sm text-red-600 hover:bg-gray-100">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Log out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
