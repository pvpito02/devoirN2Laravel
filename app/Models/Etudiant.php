<?php

namespace App\Models;
use App\Models\Matiere;
use App\Models\Semestre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['prenom','nom'];

    public function matieres()
    {
        # code...
        return $this->belongsToMany(Matiere::class);
    }

    public function etudiant_matieres()
    {
        # code...
        return $this->hasMany(EtudiantMatiere::class);
    }

    public function semestres()
    {
        # code...
        return $this->belongsToMany(Semestre::class);
    }

    public function etuidiant_semestre()
    {
        # code...
        return $this->hasMany(EtudiantSemestre::class);
    }
}
