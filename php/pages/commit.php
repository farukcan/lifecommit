<?php
	if(isset($_POST["commit"]) && is_string($_POST["commit"])){

		$data = date("Y-m-d H:i")."\t";
		$data .= $_POST["commit"]."\n\n\n";

		$file = "users/".$_SESSION["user"]."/commits.txt";

			file_put_contents($file,$data,FILE_APPEND);
	}
	
	redirect("?p=index");