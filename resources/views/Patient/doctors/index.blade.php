<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Find Doctors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="mb-8">
                        <div class="flex gap-2">
                            <input type="text" 
                                   name="specialty" 
                                   placeholder="Search by specialty" 
                                   value="{{ request('specialty') }}" 
                                   class="flex-1 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-md shadow-sm">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition duration-150">
                                Search
                            </button>
                        </div>
                    </form>

                    @if($doctors->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($doctors as $doctor)
                                <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
                                    <div class="p-6">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-xl font-semibold">
                                                    {{ substr($doctor->user->name, 0, 1) }}
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="text-lg font-semibold text-gray-900">{{ $doctor->user->name }}</h3>
                                                <p class="text-gray-600">{{ $doctor->specialty }}</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="{{ route('patient.doctor.show', $doctor) }}" 
                                               class="inline-flex items-center text-blue-600 hover:text-blue-800">
                                                View Profile
                                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6">
                            {{ $doctors->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <h3 class="mt-2 text-lg font-medium text-gray-900">No doctors found</h3>
                            <p class="mt-1 text-gray-500">
                                @if(request()->has('specialty'))
                                    Try adjusting your search criteria.
                                @else
                                    There are currently no doctors available.
                                @endif
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
