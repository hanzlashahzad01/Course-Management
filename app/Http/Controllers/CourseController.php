<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CourseService;
use Illuminate\Routing\Controller as BaseController;

class CourseController extends BaseController
{
    public function index()
    {
        $courses = CourseService::getAllCourses();
        return view('courses.index', compact('courses'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query', '');
        $courses = CourseService::searchCourses($query);
        return view('courses.index', compact('courses', 'query'));
    }

   public function show($id)
{
    $course = CourseService::getCourseById($id);
    
    if (!$course) {
        abort(404, 'Course not found');
    }

    return view('courses.show', [
        'course' => $course
    ]);
}
}