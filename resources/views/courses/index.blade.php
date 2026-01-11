@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Search Box -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Find Your Courses</h2>
        <form action="{{ route('courses.search') }}" method="GET" class="flex">
            <input 
                type="text" 
                name="query" 
                placeholder="Search courses (e.g., HTML, JavaScript)" 
                class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <button 
                type="submit" 
                class="bg-blue-600 text-white px-6 py-2 rounded-r-lg hover:bg-blue-700 transition"
            >
                <i class="fas fa-search"></i> Search
            </button>
        </form>
    </div>

    <!-- Course List -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-blue-600 px-6 py-4">
            <h2 class="text-xl font-semibold text-white">Available Web Technology Courses</h2>
        </div>
        
        <ul class="divide-y divide-gray-200">
            @forelse($courses as $course)
            <li class="p-6 hover:bg-gray-50 transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-medium text-gray-800">{{ $course['title'] }}</h3>
                        <p class="text-gray-600 mt-1">
                            <i class="fas fa-chalkboard-teacher text-blue-500"></i> {{ $course['instructor'] }}
                        </p>
                        <div class="flex mt-2 space-x-4">
                            <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">
                                <i class="fas fa-clock text-gray-500 mr-1"></i> {{ $course['credit_hours'] }} Credits
                            </span>
                            <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">
                                <i class="fas fa-calendar-alt text-gray-500 mr-1"></i> {{ $course['semester'] }}
                            </span>
                        </div>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                        Active
                    </span>
                </div>
            </li>
            @empty
            <li class="p-6 text-center text-gray-500">
                No courses found matching your search.
            </li>
            @endforelse
        </ul>
    </div>
</div>
@endsection