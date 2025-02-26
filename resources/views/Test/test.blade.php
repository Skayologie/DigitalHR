    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRMS Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            border-left: 4px solid white;
        }
        .transition-width {
            transition: width 0.3s ease-in-out;
        }
    </style>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-gray-100 flex h-screen overflow-hidden">
<!-- Sidebar -->
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

        <a href="#" class="sidebar-link active flex items-center px-4 py-3">
            <i class="fas fa-th-large w-6"></i>
            <span class="ml-2">Dashboard</span>
        </a>

        <a href="#" class="sidebar-link flex items-center px-4 py-3">
            <i class="fas fa-user-tie w-6"></i>
            <span class="ml-2">Manage HR</span>
        </a>

        <a href="#" class="sidebar-link flex items-center px-4 py-3">
            <i class="fas fa-shield-alt w-6"></i>
            <span class="ml-2">Roles & Permissions</span>
        </a>

        <a href="#" class="sidebar-link flex items-center px-4 py-3">
            <i class="fas fa-building w-6"></i>
            <span class="ml-2">Manage Departments</span>
        </a>

        <a href="#" class="sidebar-link flex items-center px-4 py-3">
            <i class="fas fa-users w-6"></i>
            <span class="ml-2">Manage All Users</span>
        </a>

        <a href="#" class="sidebar-link flex items-center px-4 py-3">
            <i class="fas fa-user-cog w-6"></i>
            <span class="ml-2">Manage Managers</span>
        </a>

        <a href="#" class="sidebar-link flex items-center px-4 py-3">
            <i class="fas fa-user-friends w-6"></i>
            <span class="ml-2">Manage Employees</span>
        </a>

        <a href="#" class="sidebar-link flex items-center px-4 py-3">
            <i class="fas fa-briefcase w-6"></i>
            <span class="ml-2">Manage Portfolio</span>
        </a>
    </div>
</div>

<!-- Main Content -->
<div class="flex-1 flex flex-col overflow-hidden">
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
                            <span class="text-sm font-medium text-gray-700">John Doe</span>
                            <span class="text-xs text-gray-500">Admin</span>
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
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <div class="flex space-x-2">
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                    <i class="fas fa-plus mr-2"></i> Add Employee
                </button>
            </div>
        </div>

        <!-- Dashboard content would go here -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Total Employees</p>
                        <p class="text-2xl font-semibold text-gray-700">142</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <i class="fas fa-user-check text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Active Employees</p>
                        <p class="text-2xl font-semibold text-gray-700">120</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100 text-red-600">
                        <i class="fas fa-building text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Departments</p>
                        <p class="text-2xl font-semibold text-gray-700">8</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <i class="fas fa-user-tie text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Managers</p>
                        <p class="text-2xl font-semibold text-gray-700">12</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example placeholder content -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-4 border-b border-gray-200 font-medium">Recent Activities</div>
            <div class="p-4">
                <p class="text-gray-500">Dashboard content will appear here.</p>
            </div>
        </div>
    </main>
</div>

<script>

</script>
</body>
</html>
