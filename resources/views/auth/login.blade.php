<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <style>
 body {
 font-family: 'Segoe UI', sans-serif;
 background-color: #f4f6f9;
 display: flex;
 justify-content: center;
 align-items: center;
 height: 100vh;
 margin: 0;
 }
 .login-card {
 background: #ffffff;
 padding: 40px;
 border-radius: 10px;
 box-shadow: 0 4px 12px rgba(0,0,0,0.1);
 width: 100%;
 max-width: 400px;
 }
 .form-group {
 margin-bottom: 20px;
 }
 .form-group label {
 display: block;
 margin-bottom: 8px;
 color: #555555;
 font-weight: 600;
 }
 .form-group input {
 width: 100%;
 padding: 12px;
 border: 1px solid #cccccc;
 border-radius: 6px;
 box-sizing: border-box;
 }
 .btn-submit {
 width: 100%;
 padding: 12px;
 background-color: #3490dc;
 color: white;
 border: none;
 border-radius: 6px;
 font-weight: bold;
 cursor: pointer;
 }
 .error-messages {
 background-color: #f8d7da;
 color: #721c24;
 padding: 12px;
 border-radius: 6px;
 margin-bottom: 20px;
 }
 </style>
</head>
<body>
 <div class="login-card">
 <h2>Login</h2>
@if ($errors->any())
 <div class="error-messages">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="POST" action="/login">
 @csrf
 <div class="form-group">
 <label for="email">Email Address</label>
 <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
 </div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" id="password" name="password" required>
<div style="margin-top: 10px; display: flex; align-items: center;">
<input type="checkbox" id="toggle-pass" onclick="togglePassword()" style="width: auto; margin-right: 8px; margin-bottom: 0;">
<label for="toggle-pass" style="margin-bottom: 0; font-weight: normal; cursor: pointer;">Show Password</label>
</div>
</div>
<button type="submit" class="btn-submit">Login</button>
 </form>
</div>
<script>
function togglePassword() {
 var x = document.getElementById("password");
 if (x.type === "password") {
 x.type = "text";
 } else {
 x.type = "password";
 }
}
</script>
</body>
</html>    