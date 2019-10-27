<html>
<head>
  <title>
      Login in to Meet and Eat
  </title>

  <link href="./css/main.css" rel="stylesheet"/>
  <link href="./css/all.css" rel="stylesheet" />

  <link href="./css/vendor/aos.css" rel="stylesheet"/>


  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <style>
.btn-group{
  width:100%;
}

.btn-group input {
  width:35%;
  height: 80px;
  margin:1%;
  background-color: inherit;
  color:white;
  border: none;
  font-weight: 100;
  border: 1px solid #ccc;
  border-radius: 10px;
  vertical-align: middle;
}

  </style>


</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yhacks";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo ($_POST['password']);
$pass=strval($_POST['password']);

$sql = "SELECT * FROM users where email='".$_POST['email']."' and password='".$pass."'";
$result = $conn->query($sql);



if ($result && $result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

} else {

    echo "Incorrect Password";

}
$conn->close();
?>

<div class="col-md-13 bg-primary border rounded p-5" style="color:white;">
			<form action="login.php" method="post">
				<h3 class="mb-4 text-center" style="font-weight:100">Hello <?php echo $row['name']; ?> !</h3>
<i class="fas fa-map-marker-alt"></i>
        New York City

          <br />
<input type="date">
<br/>

<!-- Date Picker code -->
          <!-- datepicker source: https://github.com/uxsolutions/bootstrap-datepicker -->
          <!-- tutorial: https://formden.com/blog/date-picker -->




<h3 style="color:white; font-weight:100;">Topic Areas</h3>
          <div class="btn-group bg-primary">
  <input type="button" id="button1" onclick="setC(1)"  value="Any" style="color:#194998; background-color:white;">
  <input type="button" id="button2" onclick="setC(2)"  value="Arts">
  <input type="button" id="button3" onclick="setC(3)"  value="Career/Business">

</div>


<div class="btn-group">
<input type="button" id="button4" onclick="setC(4)"  value="Health">
<input type="button" id="button5" onclick="setC(5)"  value="Culture">
<input type="button" id="button6" onclick="setC(6)"  value="Politics">
</div>

<div class="btn-group">
<input type="button" id="button7" onclick="setC(7)"  value="Religion">
<input type="button" id="button8" onclick="setC(8)"  value="Technology">
<input type="button" id="button9" onclick="setC(9)"  value="Family">
</div>
<!-- Categories -->


<nav class="navbar navbar-dark bg-primary">
<div class="container">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-map-marked-alt"></i> Neighborhood (All) </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="./landing.html">Times Square</a>
				<a class="dropdown-item" href="./login.html">High Line</a>
				<a class="dropdown-item" href="./blog.html">Madison Square Gardens</a>
				<a class="dropdown-item" href="./page.html">Central Park</a>
			</div>
			</li>

      		</ul>
</div>

<div class="container">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-home"></i> Establishment Type (Any) </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="./landing.html">Restaurant</a>
				<a class="dropdown-item" href="./login.html">Bar</a>
				<a class="dropdown-item" href="./blog.html">Cafe</a>
				<a class="dropdown-item" href="./page.html">Theatre</a>
			</div>
			</li>
      		</ul>

</div>


<div class="container">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			 <i class="fas fa-money-check-alt"></i>  Price (Any) </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="./landing.html">$</a>
				<a class="dropdown-item" href="./login.html">$$</a>
				<a class="dropdown-item" href="./blog.html">$$$</a>
			</div>
			</li>

      		</ul>

</div>


<div class="container">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			 <i class="fas fa-utensils"></i> Cuisine (All) </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="./landing.html">Mediterranean</a>
				<a class="dropdown-item" href="./login.html">Chinese</a>
				<a class="dropdown-item" href="./blog.html">American</a>
				<a class="dropdown-item" href="./page.html">Indian</a>
			</div>
			</li>
      		</ul>
</div>


</nav>


      </form>
		</div>
	</div>
</div>

<div class="col-md-14 bg-white">

			<div class="border rounded p-5">
        <div class="btn-group">
        <input type="button" id="button1" onclick="setC(1)" value="Languange & Culture" style="color:#194998; background-color:white;">
        <h4 style="color:white; font-weight:100;">Nov 3, 2019</h4>
      </div>
      <button type="button">More Information</button>

      <button type="button">Chatroom</button>
    </br>
  </br>
				</div>


        <div class="border rounded p-5">
          <div class="btn-group">
          <input type="button" id="button2" onclick="setC(2)"  value="Technology & Innovation"style="color:#194998; background-color:white;">
        </div>
        <button type="button">More Information</button>
        <button type="button">Chatroom</button>
      </br>
          </div>



		</div>
	</div>
</div>


<script src="./js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="./js/vendor/popper.min.js" type="text/javascript"></script>
<script src="./js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="./js/functions.js" type="text/javascript"></script>

<!-- Animation -->
<script src="./js/vendor/aos.js" type="text/javascript"></script>
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

<script>

$('.input-group.date').datepicker({format: "dd.mm.yyyy"});


var count=1;
function setC(btn){


        var i;
        for (i=1;i<10;i++){

          if(btn!=i){

            var property = document.getElementById("button"+i.toString());

                property.style.backgroundColor = "#194998";
                property.style.color="#FFF";
          }

          else{

            var property = document.getElementById("button"+btn.toString());

                property.style.backgroundColor = "#FFFFFF";
                property.style.color="#194998";

          }


        }
}


</script>


</body>

</html>
