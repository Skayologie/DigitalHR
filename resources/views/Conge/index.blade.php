<x-app-layout>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg">
            <!-- Dashboard Header -->
            <div class="bg-indigo-700 p-6 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-white">Leave Management Dashboard</h1>
                <button class="bg-white text-indigo-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100">
                    + New Leave Request
                </button>
            </div>

            <!-- Leave Request Filters -->
            <div class="p-6 bg-gray-50 border-b">
                <div class="flex space-x-4">
                    <select class="w-full p-2 border rounded-lg">
                        <option>All Statuses</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>
                    <select class="w-full p-2 border rounded-lg">
                        <option>All Departments</option>
                        <option>Engineering</option>
                        <option>HR</option>
                        <option>Sales</option>
                    </select>
                    <input type="date" class="w-full p-2 border rounded-lg">
                </div>
            </div>

            <!-- Leave Requests Table -->
            <div class="p-6">
                <table class="w-full">
                    <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">Employee</th>
                        <th class="p-3">Department</th>
                        <th class="p-3">Start at</th>
                        <th class="p-3">Duration</th>
                        <th class="p-3">Status</th>
                        <th class="p-3">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Leave Request Row 1 -->
                    @role('manager')
                        @foreach($conge as $con)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3 flex items-center">
                                    <div class="w-10 h-10 bg-blue-500 rounded-full mr-3 flex items-center justify-center text-white">JD</div>
                                    {{$con->name}}
                                </td>
                                <td class="p-3">{{$con->department->name}}</td>
                                <td class="p-3">{{$con->conge->start_at}}</td>
                                <td class="p-3">{{$con->conge->duration}} days</td>
                                <td class="p-3">
                                    <span class="
                                        px-2 py-1 rounded-full text-xs
                                        {{ optional($con->conge)->status === 'pending' ? 'bg-yellow-100 text-yellow-800' :
                                           (optional($con->conge)->status === 'accepted' ? 'bg-green-100 text-green-800' :
                                           'bg-red-100 text-red-800') }}">
                                        {{ optional($con->conge)->status }}
                                    </span>
                                </td>
                                <td class="p-3">
                                    <div class="flex space-x-2">
                                        @if(optional($con->conge)->status === "pending")
                                            <a href="../../Rh/Conge/accept/{{$con->id}}">
                                                <button class="bg-green-500 text-white px-2 py-1 rounded text-xs hover:bg-green-600">Approve</button>
                                            </a>
                                            <a href="../../../Rh/Conge/refuse/{{$con->id}}">
                                                <button class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600">Reject</button>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endrole
                    @role('Rh')
                        @foreach($conge as $con)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3 flex items-center">
                                <div class="w-10 h-10 bg-blue-500 rounded-full mr-3 flex items-center justify-center text-white">JD</div>
                                {{$con->user->name}}
                            </td>
                            <td class="p-3">{{optional($con->user->department)->name}}</td>
                            <td class="p-3">{{$con->start_at}}</td>
                            <td class="p-3">{{$con->duration}} days</td>
                            <td class="p-3">
                                <span class="
                                    px-2 py-1 rounded-full text-xs
                                    {{ optional($con)->status === 'pending' ? 'bg-yellow-100 text-yellow-800' :
                                       (optional($con)->status === 'accepted' ? 'bg-green-100 text-green-800' :
                                       'bg-red-100 text-red-800') }}">
                                    {{ optional($con)->status }}
                                </span>
                            </td>
                            <td class="p-3">
                                <div class="flex space-x-2">
                                    @if(optional($con)->status === "pending")
                                        <a href="../../Rh/Conge/accept/{{$con->id}}">
                                            <button class="bg-green-500 text-white px-2 py-1 rounded text-xs hover:bg-green-600">Approve</button>
                                        </a>
                                        <a href="../../../Rh/Conge/refuse/{{$con->id}}">
                                            <button class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600">Reject</button>
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endrole

                    <!-- More rows can be added similarly -->
                    </tbody>
                </table>
            </div>

            <!-- Leave Types Explanation Section -->
            <div class="p-6 bg-gray-50">
                <h2 class="text-xl font-semibold mb-4">Leave Types</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-bold mb-2 text-green-700">Annual Leave</h3>
                        <p class="text-sm text-gray-600">Paid time off for vacation, rest, or personal reasons.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-bold mb-2 text-blue-700">Sick Leave</h3>
                        <p class="text-sm text-gray-600">Time off for medical reasons or personal illness.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-bold mb-2 text-red-700">Unpaid Leave</h3>
                        <p class="text-sm text-gray-600">Leave without pay, subject to manager approval.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>

