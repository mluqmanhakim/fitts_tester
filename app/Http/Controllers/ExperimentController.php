<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;


class ExperimentController extends Controller
{
    public function index()
    {
        return view('experiment.index');
    }

    public function store(Request $request)
    {
        $log = Log::create([
            "box_width" => $request->box_w,
            "box_height" => $request->box_h,
            "x_distance" => $request->x_distance,
            "y_distance" => $request->y_distance,
            "time" => $request->time
        ]);
        return redirect()->route('show_exp');
    }

}
