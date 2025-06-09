<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Psikolog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Login Psikolog</h2>
    <form action="/login" method="POST">
  @csrf
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-warning w-100">Login</button>
    </form>
  </div>
</body>
</html>
