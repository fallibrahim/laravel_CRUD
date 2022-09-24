<!doctype html>
<html lang="en">
<head>
<title>titre page</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="card">
  <img src="https://www.campus-teranga.com/site/images/actualite/20210416-6079b8e52171b.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Systeme de gestion des étudiants</h5>
    <table class="table">
  <thead style="background-color:chocolate;">
    <tr>
      <th>INE</th>
      <th>Nom</th>
      <th>Email</th>
      <th>Téléphone</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $std)
    <tr>
      <td>{{$std->student_id}}</td>
      <td>{{$std->nom}}</td>
      <td>{{$std->email}}</td>
      <td>{{$std->téléphone}}</td>
      <td>
      <a href="{{ url('/edit/'.$std->id)}}" class="btn btn-sm btn-primary">Modifier</a>        
    </td>
    @endforeach
  </tbody>
</table>
  </div>
</div>
</body>
</html>