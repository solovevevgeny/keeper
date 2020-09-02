<html>
<head>
    <title>Keeper @yield('title')</title>
    <!-- BOOTSTAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- /BOOTSTAP -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<header>
    @include('layouts.header')
</header>



<body>
<div style="width:800px">
<div class="container-fluid">
    @yield("content")
</div>
</div>
</body>


<footer>
@include('layouts.footer')
</footer>
</html>