<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        foreach ($testimonials as $testimonial) {
            $testimonial->image_url = Storage::disk('public')->url($testimonial->image);
        }

        return view('testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');


        // Storage::put($image, $contents, 'public');

        $path = $image->storePublicly('testimonials', ['disk' => 'public']);

        // $data = $request->validate([
        //     'name' => 'required',
        //     'testimonial' => 'required',
        //     'image' => 'required|image',
        // ]);

        Testimonial::create([
            'name'=> $request->input('name'),
            'testimonial'=>$request->input('testimonial'),
            'image'=>$path,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
