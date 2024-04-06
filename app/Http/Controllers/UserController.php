<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class UserController extends Controller
{
    // Retrieve all users
    public function index()
    {
        $users = User::all();
        return response()->json(['users' => $users], 200);
    }

    // Create a new user
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            // Add validation rules for other fields here
        ]);

        $user = User::create($request->all());
        return response()->json(['user' => $user], 201);
    }

    // Retrieve a specific user by ID
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['user' => $user], 200);
    }

    // Update an existing user
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|unique:users,username,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            // Add validation rules for other fields here
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['message' => 'User updated successfully', 'user' => $user], 200);
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
