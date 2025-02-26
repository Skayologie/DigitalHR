<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Roles Management') }}
    </h2>
</x-slot>
hello
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
