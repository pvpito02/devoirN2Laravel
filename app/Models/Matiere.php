<?php

namespace App\Models;
use App\Models\Etudiant;
use App\Models\EtudiantMatiere;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom'];
    public function etudiants()
    {
        # code...
        return $this->belongsToMany(Etudiant::class);
    }

    public function etudiant_matiere()
    {
        # code...
        return $this->hasMany(EtudiantMatiere::class);
    }
}
