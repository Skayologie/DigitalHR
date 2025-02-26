<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permissions Management | Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Manage Roles -->
            <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">{{ __('Manage Roles') }}</h3>



                    <!-- Add New Role Form -->
                    <div>
                        <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('Add New Role') }}</h4>
                        @if (session('message'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('message') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                              </span>
                            </div>
                        @endif
                        <form action="{{ route('permissions.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Role Name</label>
                                <input value="{{ old('name') }}" type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>
                            @error("name")
                                <div class="text-red-500 font-light text-sm">{{ $message }}</div>
                            @enderror

                            <div>
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Add Role') }}
                                </button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>


        </div>
    </div>
</x-app-layout>

