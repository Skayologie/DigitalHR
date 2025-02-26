<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile Management') }}
    </h2>
</x-slot>
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

        <!-- Manage Roles -->
        <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl">
            <div class="max-w-xl">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">{{ __('Manage Roles') }}</h3>



                <!-- Add New Role Form -->
                <div>
                    <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('Add New Role') }}</h4>
                    <form action="{{ route('roles.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="role_name" class="block text-sm font-medium text-gray-700">Role Name</label>
                            <input type="text" name="role" id="role_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Add Role') }}
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Display Existing Roles -->
                <div class="mt-6">
                    <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('Existing Roles') }}</h4>
                    <ul class="divide-y divide-gray-200">
                        @foreach($roles as $role)
                            <li class="py-3 flex justify-between items-center">
                                <span class="text-gray-600">{{ $role->role }}</span>
                                <div class="flex space-x-2">
                                    <button class="text-blue-500 hover:text-blue-700" onclick="editRole('{{ $role->id }}')">Edit</button>
                                    <button class="text-red-500 hover:text-red-700" onclick="deleteRole('{{ $role->id }}')">Delete</button>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


    </div>
</div>
</x-app-layout>
<!-- JavaScript for Role Actions -->
<script>
    function editRole(roleId) {
        // Implement edit role functionality
        console.log('Edit role:', roleId);
    }

    function deleteRole(roleId) {
        if (confirm('Are you sure you want to delete this role?')) {
            // Implement delete role functionality
            fetch(`/roles/${roleId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    location.reload(); // Reload the page to reflect changes
                }
            });
        }
    }
</script>
