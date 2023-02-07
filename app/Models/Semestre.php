<?php

namespace App\Models;
use App\Models\Etudiant;
use App\Models\EtudiantSemestre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['semestre'];
    public function etudiants()
    {
        # code...
        return $this->belongsToMany(Etudiant::class);
    }

    public function etudiants_semestres()
    {
        # code...
        return $this->hasMany(EtudiantSemestre::class);
    }

}
