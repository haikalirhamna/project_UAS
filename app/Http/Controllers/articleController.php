<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article-uploader');
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
            'article_title' => 'required',
            'article_slug' => 'required',
            'article_date' => 'required',
            'article_text' => 'required',
            'article_image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        // get value image
        $image = $request->file('article_image');
        $image_name = $image->hashName();
        $targetDir = 'storage\article-img/';
        $image_store = ($targetDir.$image_name);
        
        // save to local storage
        storage::disk('local')->put('public/article-img/',$image);

        // save to DB
        $article_files = new article ([
            'title' => $request->article_title,
            'slug' => $request->article_slug,
            'article_img' => $image_store,
            'article_body' => $request->article_text,
            'upload_at' => $request->article_date,
        ]);
        $article_files->save();
        return redirect()
        ->route('article-upload')
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
