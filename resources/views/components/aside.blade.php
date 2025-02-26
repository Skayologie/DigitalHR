<div id="sidebar" class="bg-indigo-800 text-white w-64 transition-width">
    <!-- Sidebar Header -->
    <div class="p-4 border-b border-indigo-700 flex items-center justify-between">
        <h2 class="text-xl font-bold">HR Management</h2>
        <button id="toggle-sidebar" class="text-white hover:bg-indigo-700 p-1 rounded-lg">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Sidebar Links -->
    <div class="overflow-y-auto h-full py-4">
        <div class="px-4 text-xs text-indigo-300 uppercase font-semibold mb-2">Main</div>

        <x-nav-link :href="route('Admin')" :active="request()->routeIs('dashboard')">
            <i class="fas fa-th-large w-6"></i>
            {{ __('Dashboard') }}
        </x-nav-link>

        <x-nav-link :href="route('Admin.Manager.Rh')" :active="request()->routeIs('/Admin/Manage/Rh')">
            <i class="fas fa-user-tie w-6"></i>
            {{ __('Manage HR') }}
        </x-nav-link>

        <x-nav-link :href="route('permissions.index')" :active="request()->routeIs('dashboard')">
            <i class="fas fa-shield-alt w-6"></i>
            {{ __('Roles & Permissions') }}
        </x-nav-link>

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <i class="fas fa-building w-6"></i>
            {{ __('Manage Departments') }}
        </x-nav-link>

        <x-nav-link :href="route('users.index')" :active="request()->routeIs('dashboard')">
            <i class="fas fa-users w-6"></i>
            {{ __('Manage All Users') }}
        </x-nav-link>

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <i class="fas fa-user-cog w-6"></i>
            {{ __('Manage Managers') }}
        </x-nav-link>

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <i class="fas fa-user-friends w-6"></i>
            {{ __('Manage Employees') }}
        </x-nav-link>

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <i class="fas fa-briefcase w-6"></i>
            {{ __('Manage Portfolio') }}
        </x-nav-link>
    </div>
</div>
