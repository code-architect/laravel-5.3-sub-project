<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>
    @yield('title')
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link rel="stylesheet" href="/css/admin/style.css"  type="text/css" media="all"/>
<!--js-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
			  integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ="
			  crossorigin="anonymous"></script>
<!--icons-css-->
<link rel="stylesheet" href="css/admin/font-awesome.css">
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>
<!--inner block start here-->

    @yield('content')

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© {{ date("Y") }} ConvenientCornerr. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/admin/jquery_nicescroll.js"></script>
		<script src="js/admin/scripts.js"></script>
		<!--//scrolling js-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<!-- mother grid end here-->
</body>
</html>




