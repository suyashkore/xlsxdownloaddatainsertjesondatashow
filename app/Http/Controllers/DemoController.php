<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;
use Carbon\Carbon;
use App\Exports\DemoExport;
use Maatwebsite\Excel\Facades\Excel;

class DemoController extends Controller
{
    // Show form
    public function showForm()
    {
        return view('demo-form');
    }

    // Handle form submission and save to database
    public function submitForm(Request $request)
    {
        // Validate the form
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        // Start timer
        $startTime = microtime(true);

        // Save data to database
        $demo = new Demo();
        $demo->FirstName = $request->input('first_name');
        $demo->LastName = $request->input('last_name');

        // Calculate execution time
        $executionTime = microtime(true) - $startTime;
        $demo->ExecutionTime = $executionTime;

        // Save the record
        $demo->save();

        // Redirect or show a success message
        return redirect()->back()->with('success', 'Form submitted successfully! Execution time: ' . number_format($executionTime, 4) . ' seconds');
    }

    public function exportSimple()
    {
        return Excel::download(new DemoExport, 'demo_data.xlsx');
    }
    
}
