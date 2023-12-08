<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        try {
            return view('website.pages.contact.contactme');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
