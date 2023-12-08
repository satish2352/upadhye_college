<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courses()
    {
        try {
            return view('website.pages.courses.courses');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
