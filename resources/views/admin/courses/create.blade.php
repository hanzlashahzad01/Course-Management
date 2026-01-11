@extends('layouts.app')

@section('content')
    <h1>Add New Course</h1>
    
    <form action="{{ route('admin.courses.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Course Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Instructor</label>
            <input type="text" name="instructor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Credit Hours</label>
            <input type="number" name="credit_hours" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Semester</label>
            <input type="text" name="semester" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
@endsection