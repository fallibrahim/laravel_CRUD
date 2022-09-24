<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Student management System</title>
  </head>
  <body style="background-color:#F1EEEC;">
    @include("navbar")
    <h1 class="text-center">Université virtuelle du Sénégal</h1>
    @if($layout == 'index')
    <div class="container-fluid">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <section class="col-md-7">
        @include("studentList")
        </section>
    </div>
    </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid">
    <div class="row">
        <section class="col">
        @include("studentList")
        </section>
        <section class="col">
        <div class="card">
       <img src="https://www.campus-teranga.com/site/images/actualite/20210427-60883f3464f8c.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Mettre à jour les données de l'Etudiant</h5>
       
       <form action="{{ url('/update/'.$studen->id) }}" method="post">
      @csrf
      <div class="form-group">
      <label>INE</label>
      <input value="{{ $studen->student_id }}" name="student_id" type="text" class="form-control" placeholder="Entrer votre INE"/>
      </div>
      <div class="form-group">
      <label>Nom</label>
      <input  value="{{ $studen->nom }}" name="nom" type="text" class="form-control" placeholder="Entrer votre nom"/>
      </div>
      <div class="form-group">
      <label>Email</label>
      <input value="{{ $studen->email }}" name="email" type="email" class="form-control" placeholder="Entrer votre addresse email"/>
      </div>
      <div class="form-group">
      <label>Téléphone</label>
      <input value="{{ $studen->téléphone }}" name="téléphone" type="number" class="form-control" placeholder="Entrer votre numéro"/>
      </div>
      <br>
      <input type="submit" value="mettre à jour" class="btn btn-info"/>
      <input type="reset" value="annuller" class="btn btn-warning"/>
     </form>
    </section>
    </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
    <div class="row">
    <section class="col">
        @include("studentList")
    </section>
    <section class="col">
        
    </section>
    </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid">
    <div class="row">
    <section class="col">
        @include("studentList")
    </section>
    <section class="col">
    <div class="card">
  <img src="https://www.campus-teranga.com/site/images/actualite/20210427-60883f3464f8c.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ajouter un nouveau Etudiant</h5>
    <form action="{{ url('/store') }}" method="post">
      @csrf
      <div class="form-group">
      <label>INE</label>
      <input name="student_id" type="text" class="form-control" placeholder="Entrer votre INE"/>
      </div>
      <div class="form-group">
      <label>Nom</label>
      <input name="nom" type="text" class="form-control" placeholder="Entrer votre nom"/>
      </div>
      <div class="form-group">
      <label>Email</label>
      <input name="email" type="email" class="form-control" placeholder="Entrer votre addresse email"/>
      </div>
      <div class="form-group">
      <label>Téléphone</label>
      <input name="téléphone" type="number" class="form-control" placeholder="Entrer votre numéro"/>
      </div>
      <br>
      <input type="submit" value="ajouter" class="btn btn-success"/>
      <input type="reset" value="annuller" class="btn btn-warning"/>
     </form>
  </div>
</div>
  </div>
</div>
</section>
</div>
</div>
 @endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>