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
        <link href="https://cdn.datatables.net/v/dt/dt-2.2.2/datatables.min.css" rel="stylesheet" integrity="sha384-2vMryTPZxTZDZ3GnMBDVQV8OtmoutdrfJxnDTg0bVam9mZhi7Zr3J1+lkVFRr71f" crossorigin="anonymous">
        <script src="https://cdn.datatables.net/v/dt/dt-2.2.2/datatables.min.js" integrity="sha384-2Ul6oqy3mEjM7dBJzKOck1Qb/mzlO+k/0BQv3D3C7u+Ri9+7OBINGa24AeOv5rgu" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

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
        <!-- Scripts -->
        @vite(['resources/js/app.js','resources/css/app.css'])
    </head>
    <body class="bg-gray-100 flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <x-aside></x-aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            @include("layouts.navigation")
            {{-- Main Section --}}
            <main class="flex-1 overflow-y-auto p-6">
            {{ $slot }}
            </main>
        </div>

        <script>
            let table = new DataTable('#table');


        </script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    </body>
</html>
