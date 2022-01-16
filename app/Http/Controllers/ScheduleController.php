<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        return view('client.index');
    }



    public function manager(){
        $schedule = Schedule::all();
        foreach($schedule as $item)
        {
            // $item->data = $item->service_schedule->toTimeString();   
        $item->client = User::where('id',$item->client_id)->first();
        $item->service = Service::where('id',$item->service_id)->first();
 
        }
        // dd($schedule);
        return view('admin.schedule',compact('schedule'));
    }

    public function setSchedule(){

        $clients = User::all();
        $services = Service::all();
        return view('admin.schedule.make',compact('clients','services'));
    }

    public function store(Request $request){
        $date = $request->service_schedule." ".$request->service_hour;
        if($request->client_id != 'null')
        {
            $sch = [
                'service_id' => $request->service_id,
                'client_id' => $request->client_id,
                'status' => $request->status,
                'service_schedule' => Carbon::createFromFormat('Y-m-d H:m', $date)
            ];
        }
        else{
            $sch = [
                'service_id' => $request->service_id,
                'client_id' => 1,
                'status' => $request->status,
                'service_schedule' => Carbon::createFromFormat('Y-m-d H:m', $date)
            ];
        }
        Schedule::create($sch);
        return redirect()->route('schedule.admin');
    }

    public function show($id){
        $schedule = Schedule::FindOrFail($id);
        return view('client.show',compact('schedule'));
    }
}
