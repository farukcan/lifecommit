<?php
	function isValid($that){
		if(!is_string($that)) return false;
		if(strlen($that)<3 || strlen($that)>18) return false;
		if(!preg_match("/^[A-Za-z0-9]*$/", $that)) return false;

		return true;
	}

	if(isset($_POST["username"]) && (isset($_POST["password"]))){

		if(isValid($_POST["username"])  && isValid($_POST["password"])) {

			if(is_dir("users/".$_POST["username"])){
				if(file_get_contents("users/".$_POST["username"]."/password.txt") == $_POST["password"]){
					$_SESSION["user"] = $_POST["username"];
					redirect("?p=index");
					exit();
				}else{
					echo "Password invalid";
				}
			}else{
				// yeni kullanıcı oluştur
				echo "User not found. Add dir to users folder and push a password.txt";
			}

		}else{
			echo "Not Valid";
		}
		

	}

?>



<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title> Login Page </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>

	<body>

		<div class="jumbotron">
			<p class="navbar-text">
				<h1> Login </h1>

			</p>

			<blockquote>
				<form method="post">

							<label>Username</label>
							<input type="text" name="username" class="form-control" placeholder="Username" />
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password"/>
							<br>
							<input type="submit"  class="btn btn-default">
				</form>
			 </blockquote>



		</div>

	</body>




</html>