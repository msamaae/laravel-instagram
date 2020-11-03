<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // $user = User::findOrFail($user->id);

        return view('profiles.index', compact('user'));
    }

    public function create()
    {
    }

    public function edit(User $user)
    {
        // $user = User::findOrFail($user->id);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        // Validate request data
        $validatedData = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => '',
        ]);

        // Update the currently authenticated user profile 
        Auth::user()->profile->fill($validatedData)->save();
        
        return redirect("/profile/{$user->id}");
    }
}
