<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width initial-scale=1.0">
	<title>All products - Bajracharya store </title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	

	<div class = "container">
		<div class= "navbar">
		<div class = "logo">
			<img src = "images/logo.png" width="125px">
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="index.php">Home </a></li>
				<li><a href="products.php">Products </a></li>
				<li><a href="">About </a></li>
				<li><a href="">Contact </a></li>
				<li><a href="user_page.php">Account </a></li>
			</ul>
		</nav>
		<img src="images/cart.png" width="30px" height="30px">
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
			
	</div>

<!---------account-page------->
 

 <div class="account-page">
 	<div class="container">
 		<div class="row">
 			<div class="col-2">
 				<img src="images/image1.png" width="100%">
 			</div>
 				<div class="col-2">
 				<div class="form-container">
 					<div class="form-btn">
 						<span onclick="login()">Login</span>
 						<span onclick="register()">Register</span>
 						<hr id="Indicator"> 
 						
 			</div>
 			<form id="LoginForm">
 				<input type="text" placeholder="Username">
 				<input type="password" placeholder="password">
 				<button type="submit" class="btn">Login </button>
 				<a href="">Forget password </a>
 			</form>
 			<form id="RegForm">
 				<input type="text" placeholder="Username">
 				<input type="email" placeholder="Email">
 				<input type="password" placeholder="password">
 				
 				<button type="submit" class="btn">Register </button>
 				
 			</form>
 			
 		</div>
 	</div>
 </div>
</div>
	

		
		
		

		
		
	
					

<!---------------------------------footer------------>
  		<div class="footer">
			<div class="container">
				<div class="row">
			<div class="footer-col-1">
				<h3>Download our app </h3>
				<p> Download app for android and ios mobile phone </p>
				<div class="app-logo">
					<img src="images/play-store.png">
					<img src="images/app-store.png">
				</div>
				</div>
			
			<div class = "footer-col-2">
				<img src="images/logo-white.png">
				<p>  Hamro udesya vannu nai saral ra sahaj shopping exprerince garaunu ho  </p> 
			</div>
			<div class="footer-col-3">
				<h3> UseFul links </h3>
				<ul>
					<li> Coupons </li>
					<li> Blog Post </li>
					<li> Return Policy </li>
					<li> Join Affilate </li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3> Follow Us </h3>
				<ul>
					<li> Facebook </li>
					<li> Twitter </li>
					<li> Instagram </li>
					<li> Youtube </li>
				</ul>
			</div>
		
		</div>
		<hr> 
		<p class="Copyright">Copyright 2022 </p> 
	</div>
</div>

<!--------------Js for toggle menu------------->
<script>
	var MenuItems = document.getElementById("MenuItems");

	MenuItems.sytle.maxHeight == "0px";

	function menutoggle() {
		if(MenuItems.style.maxHeight == "0px")
		{
			MenuItems.style.maxHeight = "200px";
		}
		else
		{
			MenuItems.style.maxHeight = "0px";
		}
	}
</script>


<!-------js toggle from----->
<script>
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");

		function register(){
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform="translateX(0px)";
			Indicator.style.transform = "translateX(100px)";
		}
		function login(){
			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform="translateX(300px)";
			Indicator.style.transform = "translateX(100px)";
		}
		
	</script>
</body>
</html>