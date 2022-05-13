<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->where('active','1')->get();
       
        return view('services', compact('services'));
    }


}
