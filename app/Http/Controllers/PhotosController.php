<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function gallery()
    {
        $photos = Photo::all();
        $dailyPhoto = Photo::inRandomOrder()->first();
        $randomPhotos = Photo::inRandomOrder()->take(3)->get();

        Debugbar::info($photos);

        return view('photos/home', [
            'photos' => $photos,
            'dailyPhoto' => $dailyPhoto,
            'randomPhotos' => $randomPhotos,
        ]);
    }

    public function view(int $id)
    {
        $photo = Photo::findOrFail($id);
        $photos = Photo::all();

        return view('photos/view', [
            'photo' => $photo,
            'photos' => $photos
        ]);
    }

    public function uploadForm()
    {
        return view('photos/upload');
    }

    public function uploadProcess(Request $request)
    {
        $data = $request->input();

        $data = $request->except(['_token']);

        Photo::create($data);

        return redirect('/fotos/subir')->with('status.message', 'Foto subida con éxito');
    }
}
