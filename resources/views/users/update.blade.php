<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permission') }}
        </h2>
    </x-slot>
    <link href="https://cdn.datatables.net/v/dt/dt-2.2.2/datatables.min.css" rel="stylesheet" integrity="sha384-2vMryTPZxTZDZ3GnMBDVQV8OtmoutdrfJxnDTg0bVam9mZhi7Zr3J1+lkVFRr71f" crossorigin="anonymous">



                <!-- Main modal -->
                            <!-- Modal content -->
                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="bg-red-100 flex justify-center">
                    <div class="relative p-4 w-full max-w-[59rem]">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <form action="{{route("users.edit",$user->id)}}" method="post" class="space-y-4"  enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employer full name</label>
                                        <input type="text" value="{{$user->name}}" name="name" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="jawad boulmal" required />
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employer email</label>
                                        <input type="email" value="{{$user->email}}" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                                    </div>
                                    <div>
                                        {{$user}}
                                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                        <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="{{optional($user->role)->name ?? ""}}" selected>{{optional($user->role)->name ?? "No Role Selected"}}</option>
                                            @foreach($Roles as $Role)
                                                <option value="{{$Role->name}}"> {{ strtoupper( $Role->name)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="grid md:grid-cols-2 md:gap-6">
                                        <div>
                                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                            <select name="department_id" id="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected value="{{optional($user->department)->id ?? ""}}">{{optional($user->department)->name ?? "No Department Selected"}}</option>
                                                @foreach($departments as $department)
                                                    <option value="{{$department->id}}"> {{ strtoupper( $department->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                            <select name="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected value="{{$user->gender}}">{{$user->gender}}</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-2 md:gap-6">
                                        <div>
                                            <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary (DH)</label>
                                            <input type="number" value="{{$user->salary}}" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="20XXX" required />
                                        </div>
                                        <div>
                                            <label for="national_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">National ID</label>
                                            <input type="text" value="{{$user->national_id}}" name="national_id" id="national_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="BJ0000" required />
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-2 md:gap-6">
                                        <div>
                                            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                            <input type="number" value="{{$user->phone_number}}" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="0632000000" required />
                                        </div>
                                        <div>
                                            <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth Date</label>
                                            <input type="date" value="{{$user->birth_date}}" name="birth_date" id="birth_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="BJ0000" required />
                                        </div>
                                    </div>
                                    <div>
                                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                        <input type="text" value="{{$user->address}}" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Casablanca HM rue 26 n 22" required />
                                    </div>
                                    <div>
                                        <label for="userImage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Image</label>
                                        <input name="userImage" value="{{$user->userImage}}" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="UserImage" type="file">
                                    </div>

                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update informations</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>




</x-app-layout>
