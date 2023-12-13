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
    public function engg()
    {
        try {
            return view('website.pages.courses.engg');
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function medical()
    {
        try {
            return view('website.pages.courses.medical');
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function science()
    {
        try {
            return view('website.pages.courses.science');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
