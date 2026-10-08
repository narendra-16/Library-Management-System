<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
</head>
<body style="font-family: sans-serif; margin: 0; padding: 0;">
<nav style="display: flex; justify-content: space-between; align-items: center; padding: 15px 30px; background-color: #f8f9fa; border-bottom: 1px solid #dee2e6;">
 <div style="font-weight: bold; color: #333;">My Dashboard</div>
 <div style="display: flex; align-items: center; gap: 15px;">
 <span style="color: #333;">Welcome, {{ Auth::user()->name }}</span>
 <form action="/logout" method="POST" style="margin: 0;">
 @csrf
 <button type="submit" style="padding: 6px 12px; background-color: #e3342f; color: white; border: none; border-radius: 4px; cursor: pointer;">Logout</button>
 </form>
 </div>
 </nav>
<div style="padding: 30px;">
 <h1>Welcome to Dashboard</h1>
 <p>Aap successfully login ho chuke hain!</p>
 </div>
 </body>
</html>