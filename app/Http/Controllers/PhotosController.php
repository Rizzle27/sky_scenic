<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\News;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function gallery()
    {
        $photos = Photo::inRandomOrder()->get();
        $dailyPhoto = Photo::inRandomOrder()->first();
        $randomPhotos = Photo::inRandomOrder()->take(2)->get();
        $news = News::orderBy('created_at', 'desc')->get();

        Debugbar::info($photos);

        return view('photos/home', [
            'photos' => $photos,
            'dailyPhoto' => $dailyPhoto,
            'randomPhotos' => $randomPhotos,
            'news' => $news,
        ]);
    }

    public function view(int $id)
    {
        $photo = Photo::findOrFail($id);
        $relatedModelPhotos = Photo::where('aircraft', $photo->aircraft)
            ->where('id', '!=', $id)
            ->get();
        $relatedRegisterPhotos = Photo::where('license_plate', $photo->license_plate)
        ->where('id', '!=', $id)
        ->get();
        $relatedAuthorPhotos = Photo::where('author', $photo->author)
        ->where('id', '!=', $id)
        ->get();

        return view('photos/view', [
            'photo' => $photo,
            'relatedModelPhotos' => $relatedModelPhotos,
            'relatedRegisterPhotos' => $relatedRegisterPhotos,
            'relatedAuthorPhotos' => $relatedAuthorPhotos,
        ]);
    }

    public function uploadForm()
    {
        return view('photos/upload');
    }

    public function uploadProcess(Request $request)
    {
        $data = $request->input();

        $data = $request->only(['img_path', 'aircraft', 'airline', 'license_plate', 'location', 'country', 'date']);
        $data['author'] = auth()->user()->username;

        $request->validate(Photo::CREATE_RULES, Photo::CREATE_MESSAGES);

        Photo::create($data);

        return redirect('/fotos/subir')->with('status.message', 'Foto subida con éxito');
    }
}
