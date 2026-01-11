@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fas fa-book-medical mr-2"></i> Add New Course
        </h2>
        
        <form action="{{ route('admin.courses.store') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <!-- Course Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Course Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="e.g., Advanced Web Development"
                    >
                </div>

                <!-- Instructor -->
                <div>
                    <label for="instructor" class="block text-sm font-medium text-gray-700">Instructor</label>
                    <input 
                        type="text" 
                        name="instructor" 
                        id="instructor" 
                        required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Instructor Name"
                    >
                </div>

                <!-- Credit Hours & Semester -->
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="credit_hours" class="block text-sm font-medium text-gray-700">Credit Hours</label>
                        <input 
                            type="number" 
                            name="credit_hours" 
                            id="credit_hours" 
                            required
                            min="1"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            placeholder="3"
                        >
                    </div>
                    <div>
                        <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                        <input 
                            type="text" 
                            name="semester" 
                            id="semester" 
                            required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            placeholder="e.g., Spring 2025"
                        >
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 text-white py-3 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition"
                    >
                        <i class="fas fa-save mr-2"></i> Save Course
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection