<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>@yield('title', 'UP Chess Club Database')</title>

   {{-- W3CSS --}}
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   {{-- FontAwesome Icons --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   {{-- Custom Styles --}}
   <style>
       body {
           background-color: #000000; /* Page background light gray */
           color: #ffffff;                /* Default text black */
       }

       /* Header & Footer */
       .w3-theme-header {
           background-color: #013220;  /* Dark green header/footer */
           color: #fff;
           /* 6b1d1d */
       }

       .w3-bar-item.w3-button:hover {
           background-color: #800000;  /* Maroon hover for buttons */
           color: #fff;
       }

       /* Containers for page content */
       main.w3-container {
           background-color: #000000; /* Light gray for containers */
           padding: 20px;
           border-radius: 8px;
           margin-top: 20px;
       }

       /* Table header */
       table.w3-table-all th {
           background-color: #013220; /* Dark green header row */
           color: #fff;
       }

       /* Buttons */
       .w3-button {
           background-color: #013220;
           color: #fff;
       }

       .w3-button:hover {
           background-color: #800000;
           color: #fff;
       }
       
    .dark-table td {
        background-color: #2b2b2b !important;
        color: #f1f1f1;
        /*2b2b2b*/
    }

    .dark-table th {
        background-color: #6b1d1d !important;
        color: #ffffff;
    }

    .dark-table tr:hover td {
        background-color: #3a3a3a !important;
    }

    table.w3-table-all > tbody > tr > td {
        background-color: #2b2b2b !important;
        color: #f1f1f1 !important;
    }

    table.w3-table-all > thead > tr > th {
        background-color: #6b1d1d !important;
        color: #ffffff !important;
    }

    table.w3-table-all > tbody > tr:hover > td {
        background-color: #3a3a3a !important;
    }

   </style>
</head>

<body>

   {{-- HEADER --}}
   <header class="w3-bar w3-theme-header">
       <a href="/" class="w3-bar-item w3-button">Home</a>
       <a href="/Players" class="w3-bar-item w3-button">Players</a>
       <a href="/Pairings" class="w3-bar-item w3-button">Games</a>
       <a href="/Rounds" class="w3-bar-item w3-button">Rounds</a>
       <a href="/Tournaments" class="w3-bar-item w3-button">Tournaments</a>
   </header>

   {{-- MAIN CONTENT --}}
   <main class="w3-container">
       @yield('content')
   </main>

   {{-- FOOTER --}}
   <footer class="w3-center w3-padding-16 w3-theme-header" style="margin-top:20px;">
       <p>© 2025 Liam Batnag</p>
   </footer>

</body>
</html>
