<!-- <html>
  <head>
      <title> Meet and Eat </title>
      <style>


      @media (min-width: 768px) {
          .h-md-100 { height: 100vh; }
      }
      .btn-round { border-radius: 30px; }
      .bg-indigo { background: indigo; }
      .text-cyan { color: #35bdff; }



        .middle_container{
          margin: 50px auto;
          display: block;
          width:35%;
          border: solid red 1px;
          height: 500px
        }

        .logo{
          width: 30%;
          display: block;
          margin: 10px auto
        }


        h3{
          display: block;
          width: 30%;
          margin: auto;
        }
       </style>
  </head>
<body>
<div class="middle_container">
  <img class="logo" src="images/logo.png" />

  <form>


  </form>

</div>


<div class="d-md-flex h-md-100 align-items-center">


<div class="col-md-6 p-0 bg-indigo h-md-100">
    <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
        <div class="logoarea pt-5 pb-5">
            First half content here
        </div>
    </div>
</div>


<div class="col-md-6 p-0 bg-white h-md-100 loginarea">
    <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
        Second half content here
    </div>
</div>

</div>

Old code

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Meet and Eat</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- Main CSS -->
<link href="./css/main.css" rel="stylesheet"/>

<!-- Animation CSS -->
<link href="./css/vendor/aos.css" rel="stylesheet"/>

</head>

<body>


<!--------------------------------------
NAVBAR
--------------------------------------->
<!-- <nav class="topnav navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
<div class="container">
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02" style="">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="./index.html">Home</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Examples </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="./landing.html">Home Landing</a>
				<a class="dropdown-item" href="./login.html">User Login</a>
				<a class="dropdown-item" href="./blog.html">Blog Index</a>
				<a class="dropdown-item" href="./page.html">Sample Page</a>
			</div>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./docs.html">Contact</a>
			</li>
		</ul>
	</div>
</div>
</nav> -->
<!-- End Navbar -->

<!-- Main -->
<div class="d-md-flex h-md-100 align-items-center">
	<div class="col-md-6 p-0 bg-indigo ">
		<div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
			<div class="logoarea pt-5 pb-5">
				<p>
					<img src="images/logo.png" style="width:200px;" />
				</p>
				<h1 class="mb-0 mt-3 display-4" style="font-size:250%;">Meet, Mix & Mingle</h1>
				<h5 class="mb-4 font-weight-light">With New  People</h5>
        <br />

				<a class="btn btn-outline-white btn-lg btn-round" href="#" data-toggle="modal" data-target="#modal_newsletter">Sign Up  <a href="https://github.com/wowthemesnet/Anchor-Bootstrap-UI-Kit/archive/master.zip" class="downloadzip" class="hidden"></a>
				</a>
			</div>
		</div>
	</div>
	<div class="col-md-6 p-0 bg-white h-md-100 loginarea">
		<div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
			<form class="border rounded p-5" action="login.php" method="post">
				<h3 class="mb-4 text-center">Sign In</h3>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required="" name="email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="" name="password">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label small text-muted" for="exampleCheck1">Remember me</label>
				</div>
				<button type="submit" class="btn btn-success btn-round btn-block shadow-sm">Sign in</button>
				<small class="d-block mt-4 text-center"><a class="text-gray" href="#">Forgot your password?</a></small>
			</form>
		</div>
	</div>
</div>





<!-- End Main -->




<!--------------------------------------
JAVASCRIPTS
--------------------------------------->
<script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/functions.js" type="text/javascript"></script>

<!-- Animation -->
<script src="./assets/js/vendor/aos.js" type="text/javascript"></script>
<noscript>
    <style>
        *[data-aos] {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
</noscript>
<script>
    AOS.init({
        duration: 700
    });
</script>

<!-- Disable animation on less than 1200px, change value if you like -->
<script>
AOS.init({
  disable: function () {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
});
</script>

</body>
</html>
