<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
    <title>Document</title>
</head>
<body>
    <marquee direction="right" style="font-size:25px; color:white;"> 
           <div class="card text-center bg bg-primary">Bienvenu dans le formulaire</div>
    </marquee>
        <div class="card mt-2 container col-md-5 mb-4 ">
            <div class="card-header  text-white text-center bg bg-secondary" style="border-radius : 12px;">
                <h4>AJOUT Etudiant</h4>
            </div>  
            <div class="card-body">
                <form action="{{route('etudiants.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <label for="" class="h6">Nom</label>
                            <input type="text" name="nom" id="" class="form-control">
                        </div>
                    </div>  
                            <div class="row">  
                                <div class="col-md-9">
                                    <label for="" class="h6">Prenom</label>
                                    <input type="text" name="prenom" id="" class="form-control">
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="" class="h6">Semestre</label>
                                    <select name="semestres" id="" style="border-radius:12px; border:1px solid white; width:300px; height:40px;">
                                        <option  class="mt-2" value="">Faite votre choix</option> 
                                            @foreach ($semestres as $semestreso)
                                                <option value="{{$semstre->id}}">
                                                {{$semestreo->semestre}}
                                                </option>    
                                            @endforeach      
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="" class="h6">Matiere</label>
                                    <select name="matieres" id="" style="border-radius:12px; border:1px solid white; width:300px; height:40px;">
                                        <option  class="mt-2" value="">Faite votre choix</option> 
                                            @foreach ($matieres as $mat)
                                                <option value="{{$mat->id}}">
                                                {{$mat->nom}}
                                                </option>    
                                            @endforeach      
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="" class="h6">Note 1</label>
                                    <input type="double" name="note1" class="form-control" id="">
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="" class="h6">Examen</label>
                                    <input type="double" name="examen" class="form-control" id="">
                                </div>
                            </div>     
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Enregistrer</button>
                        </div>
                </form>
            </div>
        </div> 
</body>
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
</html>