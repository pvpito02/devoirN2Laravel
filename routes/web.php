<?php

use Illuminate\Support\Facades\Route;
use App\Models\Etudiant;
use App\Http\Controllers\EtudiantController;
use App\Models\Matiere;
use App\Http\Controllers\MatiereController;
use App\Models\EtudiantMatire;
use App\Http\Controllers\EtudiantMatireController;
use App\Models\Semestre;
use App\Http\Controllers\SemestreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/test', function () {
//     return view('AjoutEtudiant');
// });
Route::resource('etudiants',EtudiantController::class);
Route::resource('matieres',MatiereController::class);
Route::resource('semestres',SemestreController::class);
