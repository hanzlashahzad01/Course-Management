@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-plus-circle me-2"></i> Add New Course
                    </h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin.courses.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="title" class="form-label fw-bold">Course Title</label>
                            <input type="text" class="form-control form-control-lg" 
                                   id="title" name="title" required
                                   placeholder="e.g. Advanced Web Technologies">
                        </div>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="instructor" class="form-label fw-bold">Instructor</label>
                                <input type="text" class="form-control" 
                                       id="instructor" name="instructor" required
                                       placeholder="Instructor name">
                            </div>
                            <div class="col-md-3">
                                <label for="credit_hours" class="form-label fw-bold">Credit Hours</label>
                                <input type="number" class="form-control" 
                                       id="credit_hours" name="credit_hours" 
                                       min="1" max="6" required>
                            </div>
                            <div class="col-md-3">
                                <label for="semester" class="form-label fw-bold">Semester</label>
                                <select class="form-select" id="semester" name="semester" required>
                                    <option value="Spring-2025">Spring 2025</option>
                                    <option value="Fall-2025">Fall 2025</option>
                                    <option value="Summer-2025">Summer 2025</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end gap-3 pt-3">
                            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary px-4">
                                <i class="fas fa-times me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-1"></i> Save Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection