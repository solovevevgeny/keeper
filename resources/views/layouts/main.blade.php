<html>
<head>
    <title>Keeper @yield('title')</title>
    <!-- BOOTSTAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- /BOOTSTAP -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<header>
    @include('layouts.header')
</header>



<body>
<div class="container">
    @yield("content")
</div>
</body>


<footer>
@include('layouts.footer')
</footer>
</html>