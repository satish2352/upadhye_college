<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admission()
    {
        try {
            return view('website.pages.admissions.admission');
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function scholarshipform()
    {
        try {
            return view('website.pages.admissions.scholarshipform');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
