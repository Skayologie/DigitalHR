<x-app-layout>



    <div>
        <a href="../../permissions" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Permissions</a>
    </div>
    <div class="flex">
        {{--        Roles --}}
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg- overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 mb-2 bg-white">
                        <div>
                            <h4 class="text-md font-medium text-gray-700 mb-2">{{ __('Add New Role') }}</h4>
                            @if (session('message'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                    <span class="block sm:inline">{{ session('message') }}</span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                              </span>
                                </div>
                            @endif
                            <form action="{{ route('roles.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Role Name</label>
                                    <input value="{{ old('name') }}" type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                    <input value="web" type="hidden" name="guard_name"  id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                </div>
                                @error("name")
                                <div class="text-red-500 font-light text-sm">{{ $message }}</div>
                                @enderror
                                <div><!-- All Permissions to assign to Role -->
                                    <label for="name" class="block text-sm font-medium text-gray-700">Permissions</label>

                                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                                        @foreach($permissions as $i => $permission)
                                            <li>
                                                <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <input id="checkbox-item-{{$i}}" type="checkbox" name="permissions[]" value="{{$permission->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-{{$i}}" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300">{{$permission->name}}</label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div>
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Add Role') }}
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="p-6 text-gray-900 bg-white">


                        <div class="relative overflow-x-auto">
                            <table id="table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Permissions
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Created At
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$role->id}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$role->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            @foreach($role->permissions as $permission)
                                                {{$permission->name}} ,
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$role->created_at}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
                                            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                            {{$roles->links()}}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let table = new DataTable('#table');
    </script>
</x-app-layout>
