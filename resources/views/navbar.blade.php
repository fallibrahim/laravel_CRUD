<!doctype html>
<html lang="en">
    <head>
        <title>navbar</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<div id="nav" style="background-color:chocolate;">      
<nav class="navbar navbar-expand-lg p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}" style="color:black;">Gestion des Etudiants</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}" style="color:black;">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/create') }}" style="color:black;">Ajouter</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
</div>    
</body>
</html>