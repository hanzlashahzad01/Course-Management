<?php

namespace App\Services;

class CourseService
{
    private static $courses = [
       
        [
            'id' => 1,
            'title' => 'HTML',
            'instructor' => 'Ahmad sir',
            'credit_hours' => 4,
            'semester' => 'Spring-2025',
            'description' => 'Structure web pages'
        ],
        [
            'id' => 2,
            'title' => 'CSS',
            'instructor' => 'sir umer',
            'credit_hours' => 4,
            'semester' => 'Spring-2025',
            'description' => 'hello CSS'
        ],
       
    ];

    public static function getAllCourses()
    {
        return isset($_SESSION['courses']) ? $_SESSION['courses'] : self::$courses;
    }

    public static function getCourseById($id)
{
    $courses = self::getAllCourses();
    
    // Convert ID to integer for comparison
    $id = (int)$id;
    
    foreach ($courses as $course) {
        if (isset($course['id']) && (int)$course['id'] === $id) {
            return $course;
        }
    }
    
    return null;
}
    public static function addCourse($data)
    {
        if (!isset($_SESSION['courses'])) {
            $_SESSION['courses'] = self::$courses;
        }
        
        $newCourse = [
            'id' => count($_SESSION['courses']) + 1,
            'title' => $data['title'],
            'instructor' => $data['instructor'],
            'credit_hours' => $data['credit_hours'],
            'semester' => $data['semester'],
            'description' => $data['description']
        ];
        
        $_SESSION['courses'][] = $newCourse;
        return true;
    }

    public static function searchCourses($query)
    {
        $allCourses = self::getAllCourses();
        return array_filter($allCourses, function($course) use ($query) {
            return stripos($course['title'], $query) !== false || 
                   stripos($course['instructor'], $query) !== false;
        });
    }
}