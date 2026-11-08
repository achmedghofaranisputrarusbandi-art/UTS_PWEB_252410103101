<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Kantin Kampus</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f8; color: #333; }
        nav { background: #2c3e50; padding: 12px 20px; display: flex; flex-wrap: wrap; gap: 15px; align-items: center; }
        nav a { color: white; text-decoration: none; }
        nav .brand { font-weight: bold; margin-right: auto; color: white; }
        .container { max-width: 800px; margin: 20px auto; padding: 0 15px; min-height: 60vh; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,.1); overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        input, button { padding: 10px; width: 100%; margin-top: 10px; }
        button { background: #27ae60; color: white; border: none; border-radius: 4px; cursor: pointer; }
        footer { text-align: center; padding: 15px; background: #2c3e50; color: white; }
        .error { color: red; }
    </style>
</head>
<body>
    <x-navbar :username="$username ?? null" />

    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>