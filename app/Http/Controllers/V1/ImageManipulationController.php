<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\ImageManipulation;
<<<<<<< HEAD
use App\Http\Requests\ResizeRequest;
=======
use App\Http\Requests\ResizeImageRequest;
>>>>>>> test

class ImageManipulationController extends Controller
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

    public function byAlbum(Album $album)
    {
        return $album;
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
     * @param  \App\Http\Requests\ResizeRequest  $request
     * @return array
     */
    public function resize(ResizeImageRequest $request)
=======
     * @param  \App\Http\Requests\ResizeImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function resize(ResizeImageRequest $request)
>>>>>>> test
    {
        return [];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageManipulation  $imageManipulation
     * @return \Illuminate\Http\Response
     */
    public function show(ImageManipulation $imageManipulation)
    {
        //
    }

<<<<<<< HEAD

=======
>>>>>>> test
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageManipulation  $imageManipulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageManipulation $imageManipulation)
    {
        //
    }
}
