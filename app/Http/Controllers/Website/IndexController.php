<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\ResourcesAndInsights;
use App\Models\ServiceDetails;
use App\Models\Gallery;
class IndexController extends Controller
{
    public function index()
    {
        try {
            // Fetch data from Slider model
            $dataSlider = Slider::where('is_active', 1)->get();

            // Fetch data from ResourcesAndInsights model
            $resourcesData = ResourcesAndInsights::where('is_active', 1)->get();

            // Fetch data from ServiceDetails model
            $serviceDetailsData = ServiceDetails::where('is_active', 1)->get();
            
            //Fetching the value of gallery from database
            $galleryDetailsData = Gallery::where('is_active', 1)->get();

            return view('website.pages.index', compact('dataSlider', 'resourcesData', 'serviceDetailsData','galleryDetailsData'));
        } catch (\Exception $e) {
            return $e;
        }
    
    }
}
