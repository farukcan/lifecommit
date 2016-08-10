<?php
	if(!isset($_GET["p"])) $_GET["p"] = "index";
	if(!is_string($_GET["p"])) exit("page invalid");
	if(!preg_match("/^[A-Za-z0-9]*$/", $_GET["p"])) exit("page hack");


	if(is_file("php/pages/".$_GET["p"].".php")){
		include "php/pages/".$_GET["p"].".php";
	}else exit("page not found");