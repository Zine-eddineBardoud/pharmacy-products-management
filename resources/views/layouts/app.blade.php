<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Pharmacy Drugs Managment</title>
</head>
<body>

    <div class="header">
        <div class="logo">
            <h2>Pharmacy Drugs Managment</h2>
            <small>Zine-eddine Bardoud</small>
        </div>
        <div class="pages">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/drugs">Our Products</a></li>
            </ul>
        </div>
    </div>

    @yield('content')
    
</body>
</html>
