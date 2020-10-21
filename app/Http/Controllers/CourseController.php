<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function index() {

        $courses = Course::with('user')->withCount('episodes')->get();


        return Inertia::render('Courses/index', [
            'courses' => $courses
        ]);
    }

    public function show(int $id) {

        $course = Course::where('id', $id)->with('episodes')->first();

        return Inertia::render('Courses/Show', [
            'course' => $course
        ]);
    }
}
