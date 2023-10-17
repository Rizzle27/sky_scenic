<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['title', 'subtitle', 'date', 'author', 'img_path', 'body'];

    public const CREATE_RULES = [
        'title' => ['required', 'min:10'],
        'subtitle' => ['required', 'min:10'],
        'date' => ['required'],
        'img_path' => ['required', 'url'],
        'body' => ['required', 'min:30'],
    ];

    public const CREATE_MESSAGES = [
        'title.min' => 'El título debe contener al menos :min caracteres.',
        'title.required' => 'El título no puede estar vacío.',
        'subtitle.min' => 'El subtítulo debe contener al menos :min caracteres..',
        'subtitle.required' => 'El subtítulo no puede estar vacío.',
        'date.required' => 'La fecha no puede estar vacía.',
        'img_path.url' => 'La foto tiene que ser una URL.',
        'img_path.required' => 'La foto no puede estar vacía.',
        'body.min' => 'El cuerpo debe contener al menos :min caracteres.',
        'body.required' => 'El cuerpo no puede estar vacío.',
    ];
}
