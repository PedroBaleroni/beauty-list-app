<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    public function store()
    {
        return view('home');
    }

    public function show($id){
        $service = Service::findOrFail($id);
        return view('admin.service.show', compact('service'));
    }
}
