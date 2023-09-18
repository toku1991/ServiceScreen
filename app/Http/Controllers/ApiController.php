<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function receiveJsonData(Request $request)
    {
        // Retrieve JSON data from the request body
        $jsonData = $request->json()->all();

        // Process and store the JSON data as needed
        // ...
        dd($jsonData);
        // Respond with a success message or appropriate JSON response
        return response()->json(['message' => 'Data received and processed successfully']);
    }
}
