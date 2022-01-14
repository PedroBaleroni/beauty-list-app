<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function manager(){
        return view('admin.schedule');
    }

    public function setSchedule(Request $request){

    }

    public function store(Request $request){
        return redirect()->route('schedule.admin');

    }

    public function show($id){
        $schedule = Schedule::FindOrFail($id);
        return view('client.show',compact('schedule'));
    }
}
