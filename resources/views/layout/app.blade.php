<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | Layanan Psikolog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <style>
    .form-section {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .navbar-brand {
      font-weight: 700;
    }
    .sidebar {
      min-height: 100vh;
      background: #212529;
      color: white;
    }
    .sidebar .nav-link {
      color: rgba(255,255,255,.75);
    }
    .sidebar .nav-link:hover {
      color: white;
    }
    .sidebar .nav-link.active {
      color: white;
      background: rgba(255,255,255,.1);
    }
  </style>
</head>
<body>
  @yield('content')
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>