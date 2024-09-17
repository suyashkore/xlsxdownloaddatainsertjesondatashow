<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class JsonDataController extends Controller
{
    public function showNames()
    {
        // Fetch JSON data from the given URL
        $response = Http::retry(3, 1000)->get('https://microsoftedge.github.io/Demos/json-dummy-data/64KB.json');

        // Decode the JSON response into an array
        $data = $response->json();
        
        $names = [];

        foreach ($data as $item) {
            if (isset($item['name'])) {
                $names[] = $item['name'];
            }
        }

        // Pass the names array to the view
        return view('names', compact('names'));
    }
}
