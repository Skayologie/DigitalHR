<x-app-layout>


    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">Cursus</h1>
            <button class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Employee Info -->
        <div class="flex flex-col items-center mb-8">
            <div class="w-24 h-24 bg-blue-500 rounded-full overflow-hidden mb-2">
                <img src="/api/placeholder/100/100" alt="Employee photo" class="w-full h-full object-cover" />
            </div>
            <h2 class="text-lg font-medium">{{$user}}</h2>
            <p class="text-sm text-gray-500">@yassineaghla</p>
            <span class="mt-1 px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">Actif</span>
        </div>



        <!-- New Career Entry Form -->
        <div class="border rounded-lg p-6">
            <div class="flex justify-center mb-4">
                <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
            </div>

            <h3 class="text-center text-lg font-medium mb-6">Nouveau</h3>

            <form>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <!-- Grade -->
                    <div>
                        <label class="block text-sm font-medium mb-1" for="grade">
                            Grade<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="grade" class="block w-full border border-gray-300 rounded px-3 py-2 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option selected disabled>----</option>
                                <option>Junior</option>
                                <option>Intermediate</option>
                                <option>Senior</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Date -->
                    <div>
                        <label class="block text-sm font-medium mb-1" for="date">
                            Date<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="date" id="date" value="02/27/2025" class="block w-full border border-gray-300 rounded px-3 py-2 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Campus -->
                    <div>
                        <label class="block text-sm font-medium mb-1" for="campus">
                            Campus<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="campus" class="block w-full border border-gray-300 rounded px-3 py-2 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option selected disabled>----</option>
                                <option>Paris</option>
                                <option>Lyon</option>
                                <option>Marseille</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Contract -->
                    <div>
                        <label class="block text-sm font-medium mb-1" for="contract">
                            Contrat<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="contract" class="block w-full border border-gray-300 rounded px-3 py-2 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option selected disabled>----</option>
                                <option>CDI</option>
                                <option>CDD</option>
                                <option>Freelance</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Formation -->
                    <div>
                        <label class="block text-sm font-medium mb-1" for="formation">
                            Formation<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="formation" class="block w-full border border-gray-300 rounded px-3 py-2 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option selected disabled>----</option>
                                @foreach($formations as $formation)
                                    <option value="{{$formation}}">{{$formation}}</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Position -->
                    <div>
                        <label class="block text-sm font-medium mb-1" for="position">
                            Position<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="position" class="block w-full border border-gray-300 rounded px-3 py-2 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option selected disabled>----</option>
                                <option>Developer</option>
                                <option>Designer</option>
                                <option>Manager</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Remarks -->
                <div class="mb-6">
                    <label class="block text-sm font-medium mb-1" for="remarks">
                        Remarques
                    </label>
                    <textarea id="remarks" rows="4" class="block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
