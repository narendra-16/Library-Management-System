<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset ="UTF-8">
<meta name ="viewport" content="width=device-width,initial-scale =1">
<title> Laravel CRUD Operation </title>
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
@if ($message = Session::get('success'))
<div class ="alert alert-success alert-block">
<strong>{{$message}}</strong>
</div>    
@endif    
<div class ="container mt-3">
<div class ="row justify-content-center">
<div class ="col-sm-7">
<div class="card mt-4">    
<form method="POST" action ="/product/store">
@csrf
<div class="form-group">
<label>Id</label>
<input type="text" name="id" class ="form-control" value="{{old('id')}}"/>
@if ($errors->has('id'))
<span class ="text-danger">{{$errors->first('id')}}</span>
@endif   
</div>
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class ="form-control" value="{{old('name')}}"/>    
@if ($errors->has('name'))
<span class ="text-danger">{{$errors->first('name')}}</span>
@endif   
</div>
<div class="form-group">
<label>Author</label>
<input type="text" name="author" class ="form-control" value="{{old('author')}}"/>
@if ($errors->has('author'))
<span class ="text-danger">{{$errors->first('author')}}</span>
@endif   
</div>
<button type="submit" class="btn btn-light">Submit</button>   
</form>    
</div>
</div>    
</div>      
</div>    
</body>
</html>