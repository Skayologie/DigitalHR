<x-app-layout>
<div class="flex items-center justify-center min-h-screen p-4">
    <!-- Modal Container -->
    <div class="bg-white rounded-lg shadow-lg w-full max-w-[84rem]">
        <!-- Modal Header -->
        <div class="flex justify-between items-center p-4 border-b">
            <h2 class="text-lg font-medium text-gray-800">Cursus</h2>
            <button class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
{{$career}}
        <!-- User Profile -->
        <div class="flex flex-col items-center pt-6 pb-4">
            <div class="w-24 h-24 rounded-full overflow-hidden bg-blue-500 mb-3">
                <img src="{{asset("storage/".$user->userImage)}}" alt="Employee Photo" class="w-full h-full object-cover">
            </div>
            <h3 class="text-lg font-medium">{{$user->name}}</h3>
            <p class="text-gray-500 text-sm">{{$user->email}}</p>
            <span class="text-green-500 text-sm mt-1">Actif</span>
        </div>

        <!-- Timeline -->
        <div class="px-8 py-6">
            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute h-0.5 bg-blue-200 left-0 right-0 top-6"></div>

                <!-- Timeline items -->
                <div class="flex justify-between relative">
                    <!-- First milestone -->
                    <div class="flex flex-col items-center relative">
                        <div class="bg-blue-600 text-white text-xs rounded px-2 py-1 mb-2">02/09/2024</div>
                        <div class="z-10 w-3 h-3 bg-white border-4 border-blue-600 rounded-full"></div>
                        <div class="mt-2 text-center w-32">
                            <p class="text-sm font-medium">Développeur Frontend Junior</p>
                        </div>
                    </div>

                    <!-- Second milestone -->
                    <div class="flex flex-col items-center relative">
                        <div class="bg-blue-600 text-white text-xs rounded px-2 py-1 mb-2">03/09/2024</div>
                        <div class="z-10 w-3 h-3 bg-white border-4 border-blue-600 rounded-full"></div>
                        <div class="mt-2 text-center w-32">
                            <p class="text-sm font-medium">Contrat</p>
                            <p class="text-xs text-gray-500">Type: CDI</p>
                            <p class="text-xs text-green-500">Pass</p>
                        </div>
                    </div>

                    <!-- Third milestone -->
                    <div class="flex flex-col items-center relative">
                        <div class="bg-blue-600 text-white text-xs rounded px-2 py-1 mb-2">07/10/2024</div>
                        <div class="z-10 w-3 h-3 bg-white border-4 border-blue-600 rounded-full"></div>
                        <div class="mt-2 text-center w-32">
                            <p class="text-sm font-medium">Certification: PSM 1</p>
                            <p class="text-xs text-gray-500">Certified</p>
                            <p class="text-xs text-green-500">Actif</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-right">
                <a href="{{route("users.create",$user->id)}}">
                    <button class="text-blue-500 font-medium">Enrôler</button>
                </a>
            </div>
        </div>

        <!-- Current contract details -->
        <div class="px-8 py-4">
            <div class="flex items-center justify-center mb-4">
                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                    <div class="w-3 h-3 bg-white rounded-full"></div>
                </div>
            </div>

            <h3 class="text-center font-medium mb-1">Contrat</h3>
            <p class="text-center text-sm text-gray-500 mb-6">Type | CDI</p>

            <!-- Contract details list -->
            <div class="border rounded-lg">
                <div class="border-b flex items-center p-3">
                    <div class="bg-blue-100 rounded-lg p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-600">Sièges / Ville</p>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 mr-2">Youssoufia</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <div class="border-b flex items-center p-3">
                    <div class="bg-blue-100 rounded-lg p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-600">Date</p>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 mr-2">03 Sept 2024</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <div class="border-b flex items-center p-3">
                    <div class="bg-blue-100 rounded-lg p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-600">Département</p>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 mr-2">{{$user->department->name}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <div class="border-b flex items-center p-3">
                    <div class="bg-blue-100 rounded-lg p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-600">Manager</p>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 mr-2">John Doe</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <div class="border-b flex items-center p-3">
                    <div class="bg-blue-100 rounded-lg p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-600">Absences</p>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 mr-2">-</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <div class="border-b flex items-center p-3">
                    <div class="bg-blue-100 rounded-lg p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-600">Retards</p>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 mr-2">-</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
