<!doctype html>
<html>
<head>
    <title>Proma's Blogs</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 

    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="shortcut icon" type="./images/profile.jpg" href="./images/SadiaSubrunLogo.png">
	<title>Proma's Blogs</title>
</head>

<body>
 
    @include('inc.navbar')

    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
    
</body>
</html>

