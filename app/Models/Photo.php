<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['img_path', 'img_path_copyright', 'aircraft', 'airline', 'license_plate', 'location', 'country', 'author', 'date'];

    public const CREATE_RULES = [
        'img_path' => ['required'],
        'img_path_copyright' => ['required'],
        'aircraft' => ['required'],
        'airline' => ['required'],
        'license_plate' => ['required'],
        'location' => ['required'],
        'country' => ['required'],
        'date' => ['required', 'date'],
    ];

    public const CREATE_MESSAGES = [
        'img_path.required' => 'La foto de la aeronave sin marca de agya no puede estar vacía.',
        'img_pathcopyright.required' => 'La foto de la aeronave con marca de agua no puede estar vacía.',
        'aircraft.required' => 'El nombre de la aeronave no puede estar vacío.',
        'license_plate.required' => 'La matrícula de la aeronave no puede estar vacía.',
        'airline.required' => 'La erolínea de la aeronave no puede estar vacía.',
        'location.required' => 'La locación de la foto no puede estar vacía.',
        'country.required' => 'El país de la foto no puede estar vacío.',
        'date.required' => 'La fecha de la foto no puede estar vacía.',
    ];
}
