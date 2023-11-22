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
        $request->validate([
            'img_path' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'img_path_copyright' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'aircraft' => 'required',
            'airline' => 'required',
            'license_plate' => 'required',
            'location' => 'required',
            'country' => 'required',
            'date' => 'required',
        ]);

        if ($request->hasFile('img_path')) {
            $imageFile = $request->file('img_path');
            $imageName = time() . '.' . $imageFile->extension();
            $imageFile->move(public_path('images/photos'), $imageName);
        }

        if ($request->hasFile('img_path_copyright')) {
            $copyrightFile = $request->file('img_path_copyright');
            $copyrightName = time() . '_copy.' . $copyrightFile->extension();
            $copyrightFile->move(public_path('images/photos/copy'), $copyrightName);
        }

        $data = $request->only(['aircraft', 'airline', 'license_plate', 'location', 'country', 'date']);
        $data['img_path'] = $imageName ?? null;
        $data['img_path_copyright'] = $copyrightName ?? null;
        $data['author'] = auth()->user()->username;

        Photo::create($data);

        return redirect('/fotos/subir')->with('status.message', 'Foto subida con éxito');
    }


    public function editForm(int $id)
    {
        return view('photos.edit', [
            'photo' => Photo::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $photo = Photo::findOrFail($id);

        $request->validate([
            'img_path' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'img_path_copyright' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'aircraft' => 'required',
            'airline' => 'required',
            'license_plate' => 'required',
            'location' => 'required',
            'country' => 'required',
            'date' => 'required',
        ]);

        if ($request->hasFile('img_path')) {
            $imageFile = $request->file('img_path');
            $imageName = time() . '.' . $imageFile->extension();
            $imageFile->move(public_path('images/photos'), $imageName);
        }

        if ($request->hasFile('img_path_copyright')) {
            $copyrightFile = $request->file('img_path_copyright');
            $copyrightName = time() . '_copy.' . $copyrightFile->extension();
            $copyrightFile->move(public_path('images/photos/copy'), $copyrightName);
        }

        $data = $request->only(['aircraft', 'airline', 'license_plate', 'location', 'country', 'date']);
        $data['img_path'] = $imageName ?? null;
        $data['img_path_copyright'] = $copyrightName ?? null;

        $photo->update($data);

        return redirect('/')->with('status.message', 'Foto editada con éxito');
    }

    public function deleteForm(int $id)
    {
        return view('photos.delete', [
            'photo' => Photo::findOrFail($id)
        ]);
    }

    public function deleteProcess(int $id)
    {
        $photo = Photo::findOrFail($id);

        $photo->delete();

        return redirect('/')->with('status.message', 'Foto eliminada con éxito');
    }
}
