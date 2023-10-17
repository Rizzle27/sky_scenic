<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['img_path', 'aircraft', 'airline', 'license_plate', 'location', 'country', 'author', 'date'];

    public const CREATE_RULES = [
        'img_path' => ['required', 'url'],
        'aircraft' => ['required', 'min:3'],
        'airline' => ['required'],
        'license_plate' => ['required'],
        'location' => ['required'],
        'country' => ['required'],
        'date' => ['required', 'date'],
    ];

    public const CREATE_MESSAGES = [
        'img_path.url' => 'La foto de la aeronave tiene que ser una URL.',
        'img_path.required' => 'La foto de la aeronave no puede estar vacía.',
        'aircraft.min' => 'El nombre de la aeronave tiene que tener al menos :min caracteres.',
        'aircraft.required' => 'El nombre de la aeronave no puede estar vacío.',
        'license_plate.required' => 'La matrícula de la aeronave no puede estar vacía.',
        'airline.required' => 'La erolínea de la aeronave no puede estar vacía.',
        'location.required' => 'La locación de la foto no puede estar vacía.',
        'country.required' => 'El país de la foto no puede estar vacío.',
        'date.required' => 'La fecha de la foto no puede estar vacía.',
    ];
}
