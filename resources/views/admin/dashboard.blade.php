<x-app-layout>
    <!-- Main Content Area -->

{{--    <div class="flex justify-between items-center mb-6">--}}
{{--        <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>--}}
{{--        <div class="flex space-x-2">--}}
{{--            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                <i class="fas fa-plus mr-2"></i> Add Employee--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Main modal -->
{{--    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">--}}
{{--        <div class="relative p-4 w-full max-w-md max-h-full">--}}
{{--            <!-- Modal content -->--}}
{{--            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">--}}
{{--                <!-- Modal header -->--}}
{{--                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">--}}
{{--                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">--}}
{{--                        Add Employee--}}
{{--                    </h3>--}}
{{--                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">--}}
{{--                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>--}}
{{--                        </svg>--}}
{{--                        <span class="sr-only">Close modal</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <!-- Modal body -->--}}
{{--                <div class="p-4 md:p-5">--}}
{{--                    <form action="{{route("user.store")}}" method="post" class="space-y-4"  enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div>--}}
{{--                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employer full name</label>--}}
{{--                            <input type="text" name="name" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="jawad boulmal" required />--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employer email</label>--}}
{{--                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>--}}
{{--                            <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
{{--                                <option selected disabled>Assign Role</option>--}}
{{--                                @foreach($Roles as $Role)--}}
{{--                                    <option value="{{$Role->name}}"> {{ strtoupper( $Role->name)}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="grid md:grid-cols-2 md:gap-6">--}}
{{--                            <div>--}}
{{--                                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>--}}
{{--                                <select name="department" id="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
{{--                                    <option selected disabled>Department</option>--}}
{{--                                    @foreach($departments as $department)--}}
{{--                                        <option value="{{$department->id}}"> {{ strtoupper( $department->name)}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>--}}
{{--                                <select name="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
{{--                                    <option selected disabled>Gender</option>--}}
{{--                                    <option value="male">Male</option>--}}
{{--                                    <option value="female">Female</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="grid md:grid-cols-2 md:gap-6">--}}
{{--                            <div>--}}
{{--                                <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary</label>--}}
{{--                                <input type="number" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="20XXX" required />--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <label for="national_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">National ID</label>--}}
{{--                                <input type="text" name="national_id" id="national_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="BJ0000" required />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="grid md:grid-cols-2 md:gap-6">--}}
{{--                            <div>--}}
{{--                                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>--}}
{{--                                <input type="number" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="0632000000" required />--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth Date</label>--}}
{{--                                <input type="date" name="birth_date" id="birth_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="BJ0000" required />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>--}}
{{--                            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Casablanca HM rue 26 n 22" required />--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label for="userImage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Image</label>--}}
{{--                            <input name="userImage" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="UserImage" type="file">--}}
{{--                        </div>--}}

{{--                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create The Employer Account</button>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
</x-app-layout>
