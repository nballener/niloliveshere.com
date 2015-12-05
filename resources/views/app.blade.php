<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nilo Lives Here</title>
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/uikit.almost-flat.min.css" />
        <link rel="stylesheet" href="css/mytheme.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
    </head>

    <body>
        @include('partials.navbar')
        
        @yield('content')
    </body>
</html>
