<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/screen.css') }}">
    <title>master file</title>
</head>
<body>
    <header>
        <h1>GITL</h1>
    </header>
    
    <main>
        
        @yield("main-content")

    </main>

    <footer>
        <div id="clock"></div>
        <img src="" alt="gtil img">
        &copy; Flor Stellamans
    </footer>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>