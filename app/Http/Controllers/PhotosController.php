<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function galeria()
    {
        $photos = Photo::all();

        return view('galeria', [
            'photos' => $photos
        ]);
    }

    public function view(int $id)
    {

    }
}
