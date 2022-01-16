<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    public function store(Request $request)
    {
        $new_service = Service::create(
            ['service_name'=>$request->service_name,
            'service_time' => $request->service_time]
        );
 
        return redirect()->route('service.show');
    }

    public function setService(Request $request){
        return view('admin.make');
    }

    public function show()
    {
        $services=Service::all();
        return view('admin.service.show',compact('services'));
    }
}
