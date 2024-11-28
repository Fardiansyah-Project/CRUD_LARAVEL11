<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3">Data Mahasiswa</h1>
        <div class="mt-3 container">
            @yield('content')
        </div>
    </div>
</body>
</html>