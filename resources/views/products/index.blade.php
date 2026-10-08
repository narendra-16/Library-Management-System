<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset ="UTF-8">
<meta name ="viewport" content="width=device-width,initial-scale =1">
<title> Laravel CRUD operation </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
<ul class="nav navbar-nav">
<li class="active"><a href="/">Home</a></li>
</ul>
</nav>    
<div class ="container mt-3">
<div>
<a href ="product/create" class = "btn btn-dark">New book</a>    
</div>    
<h2>Details of available books </h2>
<table class="table">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Author</th>
<th>Role</th>
</tr>
</thead>
<tbody>
@foreach ($products as $value )
<tr>
<td>{{$value->id}}</td>
<td>{{$value->name}}</td>
<td>{{$value->author}}</td>
<td>{{$value->role}}</td>
<td> <a href ="product/{{$value->id}}/edit" class ="btn btn-light btn-sm">Edit</a>
<a href ="product/{{$value->id}}/delete" class ="btn btn-light btn-sm">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>    
</div>    
</body>
</html>