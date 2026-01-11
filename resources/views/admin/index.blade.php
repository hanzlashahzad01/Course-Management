@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <!-- Admin Header -->
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-gray-800">
            <i class="fas fa-tools mr-2"></i> Course Management
        </h2>
        <a 
            href="{{ route('admin.courses.create') }}" 
            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition"
        >
            <i class="fas fa-plus mr-2"></i> Add New Course
        </a>
    </div>

    <!-- Courses Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Instructor</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Credits</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Semester</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($courses as $course)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $course['title'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $course['instructor'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $course['credit_hours'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $course['semester'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="text-blue-600 hover:text-blue-900 mr-4">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-900">
                            <i class="fas fa-trash-alt"></i> Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection