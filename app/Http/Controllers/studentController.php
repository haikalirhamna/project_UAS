<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student-uploader');
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
            'student_title' => 'required',
            'student_slug' => 'required',
            'student_date' => 'required',
            'student_text' => 'required',
            'student_image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        // get value image
        $image = $request->file('student_image');
        $image_name = $image->hashName();
        $targetDir = 'storage\student-img/';
        $image_store = ($targetDir.$image_name);
        
        // save to local storage
        storage::disk('local')->put('public/student-img/',$image);

        // save to DB
        $article_files = new student ([
            'title' => $request->student_title,
            'slug' => $request->student_slug,
            'student_img' => $image_store,
            'student_body' => $request->student_text,
            'upload_at' => $request->student_date,
        ]);
        $article_files->save();
        return redirect()
        ->route('student-upload')
        ->with('succes', 'Upload file berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
