<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website; // Import the Website model

class WebsiteController extends Controller
{
    // Retrieve all websites
    public function index()
    {
        $websites = Website::all();
        return response()->json(['websites' => $websites], 200);
    }

    // Create a new website
    public function store(Request $request)
    {
        $request->validate([
            'website_name' => 'required',
            'website_url' => 'required|url',
            // 'status' => 'required|in:Planning,Design,Staging Development,Testing,Deployment,Production',
        ]);

        $website = Website::create($request->all());
        return response()->json(['website' => $website], 201);
    }

    // Retrieve a specific website by ID
    public function show($id)
    {
        $website = Website::findOrFail($id);
        return response()->json(['website' => $website], 200);
    }

    // Update an existing website
    public function update(Request $request, $id)
    {
        $request->validate([
            'website_name' => 'required',
            'website_url' => 'required|url',
            // 'status' => 'required|in:Planning,Design,Staging Development,Testing,Deployment,Production',
        ]);

        $website = Website::findOrFail($id);
        $website->update($request->all());
        return response()->json(['message' => 'Website updated successfully', 'website' => $website], 200);
    }

    // Delete a website
    public function destroy($id)
    {
        $website = Website::findOrFail($id);
        $website->delete();
        return response()->json(['message' => 'Website deleted successfully'], 200);
    }
}
