<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;


class ExperimentController extends Controller
{
    public function show_exp_1()
    {
        return view('experiment.exp_1');
    }

    public function store(Request $request)
    {
        $log = Log::create([
            "box_width" => $request->box_w,
            "box_height" => $request->box_h,
            "x_distance" => $request->x_distance,
            "y_distance" => $request->y_distance,
            "time" => $request->time,
            "is_distracted" => $request->is_distracted,
            "distract_type" => $request->distract_type
        ]);
        
        if ($request->distract_type == 1) {
            return redirect()->route('show_exp_1');    
        }
        if ($request->distract_type == 2) {
            return redirect()->route('show_exp_2');    
        }
        return redirect()->route('show_exp_3');
    }

    public function show_exp_2()
    {
        return view('experiment.exp_2');
    }

    public function show_exp_3()
    {
        return view('experiment.exp_3');
    }

}
