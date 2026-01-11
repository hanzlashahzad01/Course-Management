<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CourseService;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    // Updated admin credentials (change these to your preferred values)
    private $adminCredentials = [
        'email' => 'your_new_email@comsats.edu.pk',  // Changed email
        'password' => 'your_secure_password_123'     // Changed password
    ];

    // Show login form
    public function showLogin()
    {
        return view('admin.login');
    }

    // Process login
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($request->email === $this->adminCredentials['email'] && 
            $request->password === $this->adminCredentials['password']) {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.courses');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Admin dashboard (protected)
    public function index()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $courses = CourseService::getAllCourses();
        return view('admin.index', compact('courses'));
    }

    // Show create form (protected)
    public function create()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return view('admin.create');
    }

    // Store course (protected)
    public function store(Request $request)
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'instructor' => 'required|string|max:255',
            'credit_hours' => 'required|numeric|min:1|max:6',
            'semester' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        CourseService::addCourse($validated);

        return redirect()->route('admin.courses')
                       ->with('success', 'Course added successfully!');
    }

    // Logout
    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
}