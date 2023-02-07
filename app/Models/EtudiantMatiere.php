<?php

namespace App\Models;
use App\Models\Etudiant;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantMatiere extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['etudiant_id','matiere_id'];
    public function matieres()
    {
        # code...
        return $this->belongsToMany(Matiere::class);
    }

    public function etudiants()
    {
        # code...
        return $this->belongsToMany(Etudiant::class);
    }


}
