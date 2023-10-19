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

    public function view(int $id)
    {
        $new = News::findOrFail($id);

        return view('news/view', [
            'new' => $new,
        ]);
    }

    public function editForm(int $id)
    {
        return view('news.edit', [
            'new' => News::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $new = News::findOrFail($id);

        $request->validate(News::CREATE_RULES, News::CREATE_MESSAGES);

        $data = $request->only(['img_path', 'title', 'subtitle', 'date', 'author', 'country', 'body']);

        $new->update($data);

        return redirect('/admin/noticias')->with('status.message', 'Noticia editada con éxito');
    }

    public function deleteForm(int $id)
    {
        return view('news.delete', [
            'new' => News::findOrFail($id)
        ]);
    }

    public function deleteProcess(int $id)
    {
        $new = News::findOrFail($id);

        $new->delete();

        return redirect('/admin/noticias')->with('status.message', 'Noticia eliminada con éxito');
    }
}
