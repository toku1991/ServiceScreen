<?php

namespace App\Http\Controllers;

use App\Charts\SampleChart;
use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
//        $result = Data::pluck('value','created_at');
        $result = DB::table('pins')->get();
//        return $result;
        $data = json_decode($result); // Convert JSON to an array of objects
        $values = collect($data)->pluck('Value')->toArray(); // Extract "Value" and convert to an array
        $timestamp = collect($data)->pluck('created_at')->toArray(); // Extract "Value" and convert to an array

//        return $timestamp;

        $chart = new SampleChart;
        $chart->labels($timestamp);

        $chart->dataset('My dataset', 'line', $values);
//        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

        return view('chart', compact('chart'));
    }

    public function handleForm(Request $request)
    {
        $request->validate([
            'pin1' => 'required',
        ]);

        $pins = [];
        $values = [];
        $labels = [];

        // Loop through all user inputs
        for ($i = 1; $i <= 15; $i++) {
            $pinInput = $request->input("pin$i");

            if ($pinInput) {
                $result = DB::table('pins')->where('name', $pinInput)->get();
                $data = json_decode($result);

                // Extract data from the result
                $values[] = collect($data)->pluck('Value')->toArray();
                $labels[] = collect($data)->pluck('created_at')->toArray();
                $pins[] = collect($data)->pluck('name')->first();
            }
        }

        $chart = new SampleChart;
        $chart->labels($labels[0]); // Use the labels from the first input

        // Add datasets for each user input
        for ($i = 0; $i < count($pins); $i++) {
            $chart->dataset($pins[$i], 'line', $values[$i]);
        }

        return view('chart', compact('chart'));
    }

}
