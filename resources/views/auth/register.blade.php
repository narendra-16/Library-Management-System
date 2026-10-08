<!DOCTYPE html>
<html>
<head>
 <title>Register</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
 <div class="container mt-5">
 <div class="row justify-content-center">
 <div class="col-md-6">
 <div class="card">
 <div class="card-header bg-primary text-white">Register</div>
 <div class="card-body">
 @if(session('success'))
 <div class="alert alert-success">
 {{ session('success') }}
 </div>
 @endif
 @if($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif   
 <form action="{{ route('register') }}" method="POST">
 @csrf
 <div class="mb-3">
 <label>First Name</label>
 <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
 @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
 </div>
 <div class="mb-3">
 <label>Last Name</label>
 <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
 @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
 </div>
 <div class="mb-3">
 <label>Phone Number</label>
 <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}">
 @error('phone_number') <div class="text-danger">{{ $message }}</div> @enderror
 </div>
 <div class="mb-3">
 <label>Email</label>
 <input type="email" name="email" class="form-control" value="{{ old('email') }}">
 @error('email') <div class="text-danger">{{ $message }}</div> @enderror
 </div>
<div class="mb-3">
 <label>Password</label>
 <input type="password" name="password" id="password" class="form-control">
 <div style="margin-top: 10px; display: flex; align-items: center;">
 <input type="checkbox" id="toggle-reg-pass" onclick="toggleRegPassword()" style="width: auto; margin-right: 8px; margin-bottom: 0;">
 <label for="toggle-reg-pass" style="margin-bottom: 0; font-weight: normal; cursor: pointer;">Show Password</label>
 </div>
 @error('password') <div class="text-danger">{{ $message }}</div> @enderror
</div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
 <script>
function toggleRegPassword() {
 var p = document.getElementById("password");
 if (p.type === "password") {
 p.type = "text";
 } else {
 p.type = "password";
 }
}
</script>
</body>
</html>