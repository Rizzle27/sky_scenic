<?php

namespace App\Http\Controllers;

use App\Models\News;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        Debugbar::info($news);

        return view('news/news', [
            'news' => $news
        ]);
    }

    public function uploadForm()
    {
        return view('news/upload');
    }

    public function uploadProcess(Request $request)
    {
        $data = $request->input();

        $data = $request->only(['title', 'subtitle', 'date', 'img_path', 'body']);
        $data['author'] = auth()->user()->username;

        $request->validate(News::CREATE_RULES, News::CREATE_MESSAGES);

        News::create($data);

        return redirect('/noticias/subir')->with('status.message', 'Noticia subida con éxito');
    }
}
