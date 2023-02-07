<?php

namespace App\Models;
use App\Models\Semestre;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantSemestre extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'semestres';
    protected $fillable= ['etudiant_id','semestre_id'];
    public function etudiants()
    {
        # code...
        return $this->belongsToMany(Etudiant::class);
    }

     public function semestres()
    {
        # code...
        return $this->belongsToMany(Semestre::class);
    }
}
