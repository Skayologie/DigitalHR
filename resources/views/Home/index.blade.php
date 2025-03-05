<x-app-layout>

    @hasrole('admin')
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
    @endhasrole

    @hasrole('employee')
        <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Employee Details</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <!-- Solde de Congé (Leave Balance) -->
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="text-lg font-semibold text-blue-800 mb-4">Leave Balance</h3>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Total Annual Leave</p>
                        <p class="font-medium text-blue-900">22 days</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Remaining Leave</p>
                        <p class="font-medium text-blue-900">12 days</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Leave Taken</p>
                        <p class="font-medium text-blue-900">10 days</p>
                    </div>
                </div>
            </div>

            <!-- Grade Information -->
            <div class="bg-green-50 p-4 rounded-lg">
                <h3 class="text-lg font-semibold text-green-800 mb-4">Grade Information</h3>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Current Grade</p>
                        <p class="font-medium text-green-900">Grade 5</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Job Level</p>
                        <p class="font-medium text-green-900">Senior Software Engineer</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Next Potential Grade</p>
                        <p class="font-medium text-green-900">Grade 6</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 grid md:grid-cols-2 gap-6">
            <!-- Manager Information -->
            <div class="bg-purple-50 p-4 rounded-lg">
                <h3 class="text-lg font-semibold text-purple-800 mb-4">Manager Details</h3>
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 bg-purple-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl font-bold text-purple-800">SM</span>
                    </div>
                    <div>
                        <p class="font-medium text-purple-900">Sarah Martinez</p>
                        <p class="text-sm text-gray-600">Engineering Director</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="text-sm text-gray-600">Contact Email</p>
                    <p class="font-medium text-purple-900">sarah.martinez@company.com</p>
                </div>
            </div>

            <!-- Years of Service -->
            <div class="bg-orange-50 p-4 rounded-lg">
                <h3 class="text-lg font-semibold text-orange-800 mb-4">Years of Service</h3>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Total Years</p>
                        <p class="font-medium text-orange-900">4 years</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Start Date</p>
                        <p class="font-medium text-orange-900">January 15, 2020</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Service Milestone</p>
                        <p class="font-medium text-orange-900">5-Year Milestone Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endhasrole




</x-app-layout>
