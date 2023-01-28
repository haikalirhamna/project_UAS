<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery-uploader');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get value and validate file
        $request->validate([
            'gallery_title' => 'required',
            'gallery_slug' => 'required',
            'gallery_date' => 'required',
            'gallery_text' => 'required',
            'gallery_image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        // get value image
        $image = $request->file('gallery_image');
        $image_name = $image->hashName();
        $targetDir = 'storage\gallery-img/';
        $image_store = ($targetDir.$image_name);
        
        // save to local storage
        storage::disk('local')->put('public/gallery-img/',$image);

        // save to DB
        $article_files = new gallery ([
            'title' => $request->gallery_title,
            'slug' => $request->gallery_slug,
            'gallery_img' => $image_store,
            'gallery_body' => $request->gallery_text,
            'upload_at' => $request->gallery_date,
        ]);
        $article_files->save();
        return redirect()
        ->route('gallery-upload')
        ->with('succes', 'Upload file berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
