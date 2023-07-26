<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    protected $fillable=[
        "id",'nom',"photo","adresse_physique","pays",
        "email","telephone","description_fr","description_en"
    ];
    public function avocats()
    {
        return $this->belongsToMany(Avocat::class, 'avocat_bureau');
    }
}

