<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function campus()
    {
        try {
            return view('website.pages.campus.campus');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
