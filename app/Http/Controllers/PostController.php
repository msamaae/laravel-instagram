<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) 
    {
        // Get image path 
        $imagePath = $request->file('image')->getRealPath();

        // Upload image to Cloudinary
        Cloudder::upload($imagePath, null);
        
        // Get the image url and resize the image
        $imageURL = Cloudder::show(Cloudder::getPublicId(), ["crop" => "fill", "width" => 250, "height" => 250]);

        // Validate request 
        $validatedData = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'mimes:jpeg,bmp,jpg,png', 'between:1, 2000']
        ]);

        // Create post 
        Auth::user()->posts()->create([
            'caption' => $validatedData['caption'],
            'image' => $imageURL
        ]);

        return redirect("/profile/" . Auth::id());
    }
}
