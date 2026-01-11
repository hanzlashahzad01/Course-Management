@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3>{{ $course['title'] }}</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5>Instructor</h5>
                            <p>{{ $course['instructor'] }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Credit Hours</h5>
                            <p>{{ $course['credit_hours'] }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5>Description</h5>
                        <p>{{ $course['description'] }}</p>
                    </div>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary">
                        Back to Courses
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-primary text-white">
        <h3>{{ $course['title'] }} (ID: {{ $course['id'] }})</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Instructor:</strong> {{ $course['instructor'] }}</p>
                <p><strong>Credit Hours:</strong> {{ $course['credit_hours'] }}</p>
                <p><strong>Semester:</strong> {{ $course['semester'] }}</p>
            </div>
            <div class="col-md-6">
                <h5>Description</h5>
                <p>{{ $course['description'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection