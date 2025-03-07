<x-app-layout>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Card Header -->
        <div class="bg-blue-600 px-6 py-4">
            <div class="flex items-center justify-between">
                <h1 class="text-white font-bold text-xl">Détails du Congé</h1>
                <span class="bg-blue-700 text-white text-sm px-3 py-1 rounded-full">{{dd($data)}}</span>
            </div>
        </div>

        <!-- Card Body -->

        <div class="p-6">
            <!-- Timeline -->
            <div class="relative pb-8">
                <div class="absolute top-0 bottom-0 left-4 w-1 bg-gray-200"></div>

                <div class="flex items-center mb-6 relative">
                    <div class="bg-yellow-500 h-8 w-8 rounded-full flex items-center justify-center z-10">
                        <i class="text-white fa-solid fa-pen"></i>
                    </div>
                    <div class="ml-4">

                        <h3 class="text-sm font-semibold text-gray-500">Request date</h3>
                        <p class="text-gray-800 font-medium">{{$data->created_at}}</p>
                    </div>
                </div>
                <!-- Start Date -->
                <div class="flex items-center mb-6 relative">
                    <div class="bg-green-500 h-8 w-8 rounded-full flex items-center justify-center z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-semibold text-gray-500">Date de début</h3>
                        <p class="text-gray-800 font-medium">{{$data->start_at}}</p>
                    </div>
                </div>

                <!-- Duration -->
                <div class="flex items-center mb-6 relative">
                    <div class="bg-blue-500 h-8 w-8 rounded-full flex items-center justify-center z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-semibold text-gray-500">Durée</h3>
                        <p class="text-gray-800 font-medium">{{$data->duration}} jours</p>
                    </div>
                </div>

                <!-- End Date -->
                <div class="flex items-center relative">
                    <div class="bg-red-500 h-8 w-8 rounded-full flex items-center justify-center z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-semibold text-gray-500">Date de fin</h3>
                        <p class="text-gray-800 font-medium">{{$data->end_at}}</p>
                    </div>
                </div>
            </div>

            <!-- Reason Section -->
            <div class="mt-6 pt-6 border-t border-gray-200">
                <h3 class="text-sm font-semibold text-gray-500 mb-2">Motif</h3>
                <p class="text-gray-700 bg-gray-50 p-3 rounded-md">{{$data->motif}}</p>
            </div>

            <!-- Status Bar -->
            {{--            <div class="mt-8">--}}
            {{--                <div class="flex justify-between mb-1">--}}
            {{--                    <span class="text-xs font-semibold text-gray-600">Progression</span>--}}
            {{--                    <span class="text-xs font-semibold text-gray-600">0%</span>--}}
            {{--                </div>--}}
            {{--                <div class="w-full bg-gray-200 rounded-full h-2">--}}
            {{--                    <span>--}}
            {{--                        {{ \Carbon\Carbon::now()->diff(\Carbon\Carbon::parse($data->conge->end_at))->format('%d days ') }}--}}
            {{--                    </span>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>

        <!-- Card Footer -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    <span class="font-medium">Statut:</span>
                    <span class="ml-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
              En attente
            </span>
                </div>
                <button class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Détails
                </button>
            </div>
        </div>
    </div>
</x-app-layout>

