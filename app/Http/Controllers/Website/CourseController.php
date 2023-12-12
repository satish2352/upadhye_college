<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses()
    {
        try {
            return view('website.pages.courses.course');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
