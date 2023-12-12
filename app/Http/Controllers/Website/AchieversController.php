<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AchieversController extends Controller
{
    public function achiever()
    {
        try {
            return view('website.pages.achievers.achiever');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
