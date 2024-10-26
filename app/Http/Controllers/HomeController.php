<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // Add this method for the fillup view
    public function fillup()
    {
        return view('fillup'); // Make sure you have a fillup.blade.php file in the resources/views directory
    }
    public function submitFillup(Request $request)
{
    // Validate and process the form data
    $validatedData = $request->validate([
        'surname' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'name_extension' => 'nullable|string|max:10',
        'birth_date' => 'required|date',
        'place_of_birth' => 'required|string|max:255',
        'sex' => 'required|string',
        'civil_status' => 'required|string',
        'height' => 'nullable|numeric',
        'weight' => 'nullable|numeric',
        'blood_type' => 'nullable|string|max:3',
        'gsis_id_no' => 'nullable|string|max:20',
        'pagibig_id_no' => 'nullable|string|max:20',
        'philhealth_no' => 'nullable|string|max:20',
        'sss_no' => 'nullable|string|max:20',
        'tin_no' => 'nullable|string|max:20',
        'agency_employee_no' => 'nullable|string|max:20',
        'citizenship' => 'required|string',
        'dual_citizenship_country' => 'nullable|string|max:255',
        'residential_house_no' => 'nullable|string|max:255',
        'residential_street' => 'nullable|string|max:255',
        'residential_subdivision' => 'nullable|string|max:255',
        'residential_barangay' => 'nullable|string|max:255',
        'residential_city' => 'nullable|string|max:255',
        'residential_province' => 'nullable|string|max:255',
        'residential_zip_code' => 'nullable|string|max:10',
        'permanent_house_no' => 'nullable|string|max:255',
        'permanent_street' => 'nullable|string|max:255',
        'permanent_subdivision' => 'nullable|string|max:255',
        'permanent_barangay' => 'nullable|string|max:255',
        'permanent_city' => 'nullable|string|max:255',
        'permanent_province' => 'nullable|string|max:255',
        'permanent_zip_code' => 'nullable|string|max:10',
        'telephone_no' => 'nullable|string|max:20',
        'mobile_no' => 'required|string|max:20',
        'email_address' => 'nullable|email|max:255',
    ]);

    // Process the validated data (e.g., save to the database)
    // Example: PersonalData::create($validatedData);

    // Redirect or return a view
    return redirect()->route('home')->with('success', 'Data submitted successfully!');
}


}
