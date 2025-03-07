<x-app-layout>

<!-- Header -->

    <div class="flex justify-between items-center mb-8">
        <div class="">
            <h1 class="text-2xl font-bold text-gray-800">Liste des Congés</h1>
            <p class="text-gray-600">Tous les congés des employés</p>
        </div>
        <button  data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="bg-white text-indigo-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100">
            + New Leave Request
        </button>
    </div>
    <!-- Filter Bar -->
    <div class="bg-white rounded-lg shadow p-4 mb-6">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">Type de congé</label>
                <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Tous les types</option>
                    <option value="maladie">Congés Maladie</option>
                    <option value="annuel">Congés Annuels</option>
                    <option value="parental">Congés Parental</option>
                </select>
            </div>
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">Période</label>
                <div class="flex">
                    <input type="date" class="w-full border border-gray-300 rounded-l-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <span class="inline-flex items-center px-3 border-t border-b border-gray-300 bg-gray-50 text-gray-500">au</span>
                    <input type="date" class="w-full border border-gray-300 rounded-r-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <div class="flex-1 flex items-end">
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Filtrer
                </button>
            </div>
        </div>
    </div>

    <!-- Leave List Table -->
    <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employé</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de début</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de fin</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Durée</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Employee 1 - Current Leave -->
                    @foreach($dataConges as $data)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                            <span class="text-blue-600 font-medium">JD</span>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{$data->user->name}}</div>
                                        <div class="text-sm text-gray-500">{{$data->user->department->name}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                  {{$data->user->conge->type}}
                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$data->user->conge->start_at}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$data->user->conge->end_at}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$data->user->conge->duration}} J</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs font-medium rounded-full
                    {{ $data->user->conge->status == 'pending' ? 'bg-yellow-100 text-yellow-800' :
                       ($data->user->conge->status == 'accepted' ? 'bg-green-100 text-green-800' :
                       'bg-red-100 text-red-800') }}">
                    {{ ucfirst($data->user->conge->status) }}
                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{route("conge.ShowRequestDetail",$data->user->id)}}" class="text-blue-600 hover:text-blue-900">Détails</a>
                            </td>
                        </tr>

                    @endforeach


                </tbody>
            </table>

    </div>
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Product
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
</x-app-layout>
