<?php

namespace App\Http\Controllers;

use App\Models\News;

class AdminController extends Controller
{
    public function admin() {
        return view('admin/dashboard');
    }

    public function news()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        return view('admin/news', [
            'news' => $news
        ]);
    }
}
