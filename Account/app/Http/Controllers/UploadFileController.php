<?php

namespace App\Http\Controllers;

use App\Models\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $file = $request->file('uploadedfile');
        $filename = $file->getClientOriginalName();
        $filename = time().'.'. $filename;
        $fileuser = Auth::user()->id;
        $file->storeAs('public', $filename);
        UploadFile::create([
            'user_id' => $fileuser,
            'file' => $filename,
        ]);
        return back()->with('file_created', 'Faktury został przesłane!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function show(UploadFile $uploadFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadFile $uploadFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadFile $uploadFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadFile $uploadFile)
    {
        //
    }
}
