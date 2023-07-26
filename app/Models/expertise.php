<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expertise extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category',
        'titre_fr',
        'sous_titre_fr',
        'pdf_fr',
        'contenu_fr',
        'titre_en',
        'sous_titre_en',
        'photo',
        'pdf_en',
        'contenu_en'
        ];
}
