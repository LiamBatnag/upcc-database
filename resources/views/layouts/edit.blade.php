<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Edit')</title>

    {{-- W3.CSS --}}
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
</head>

<body class="w3-light-grey">

    <main class="w3-container w3-margin-top" style="max-width:700px;">
        <div class="w3-card w3-white w3-padding">
            @yield('content')
        </div>
    </main>


    {{--footer--}}
    <footer class="w3-center w3-padding-16 w3-theme-d3 w3-margin-top">
        <p>© 2025 Liam Batnag</p>
    </footer>

</body>
</html>
