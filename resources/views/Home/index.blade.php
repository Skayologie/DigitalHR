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
    <!-- Dashboard Header -->

        <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Employee Details</h2>
            <!-- Main modal -->
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New Leave Request
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form method="Post" action="{{route("conge.request")}}"  class="p-4 md:p-5">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type de congés</label>
                                        <select id="category" name="conge_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="" disabled >Select type</option>
                                            <option value="Annuel">Congés Annuel</option>
                                            <option value="Maladie">Congés Maladie</option>
                                            <option value="Recuperation">Congés Recuperation</option>
                                        </select>
                                    </div>
                                </div>
                                <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="dateDeDebut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de debut</label>
                                    <input  min="{{\Carbon\Carbon::now()->addDay(7)->format('Y-m-d')}}" type="date" name="dateDeDebut" id="dateDeDebut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                                    <input type="number" name="duration" id="duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="15" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de fin</label>
                                    <input min="{{\Carbon\Carbon::now()->addDay(7)->format('Y-m-d')}}" type="date" name="dateDeFin" id="dateDeFin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="15" required="">
                                </div>
                                <div class="col-span-2">
                                    <label for="Motif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motif (optional)</label>
                                    <textarea id="Motif" name="motif" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Send Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
            <!-- Solde de Congé (Leave Balance) -->
            <div class="bg-blue-50 p-4 rounded-lg">
                <div class="flex justify-between items-center ">
                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 ">Leave Balance</h3>
                    </div>
                    <button  data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="bg-white text-indigo-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100">
                        + New Leave Request
                    </button>
                </div>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Total Annual Leave</p>
                        <p class="font-medium text-blue-900">{{Auth::user()->user_conge->total_annual_conges}} days</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Remaining Leave</p>
                        <p class="font-medium text-blue-900">{{Auth::user()->user_conge->conges_restants}} days</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Leave Taken</p>
                        <p class="font-medium text-blue-900">{{Auth::user()->user_conge->Conges_pris}} days</p>
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

<script>
    let dateDeDebut = document.getElementById("dateDeDebut");

    document.getElementById("duration").addEventListener("input", () => {
        let date = new Date(dateDeDebut.value);
        let duration = parseInt(document.getElementById("duration").value, 10);

        date.setUTCDate(date.getUTCDate() + duration);

        document.getElementById("dateDeFin").value = date.toISOString().split('T')[0];
    });

</script>


</x-app-layout>
