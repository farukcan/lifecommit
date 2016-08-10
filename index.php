<?php
	session_start();

	if(isset($_SESSION["user"])){
		include "php/main.php";
	}else{
		include "php/login.php";
	}

	function redirect($url){
    if (!headers_sent()){  
        header('Location: '.$url); exit; 
    }else{ 
        $sayfaKod.= '<script type="text/javascript">'; 
        $sayfaKod.= 'window.location.href="'.$url.'";'; 
        $sayfaKod.= '</script>'; 
        $sayfaKod.= '<noscript>'; 
        $sayfaKod.= '<meta http-equiv="refresh" content="0;url='.$url.'" />'; 
        $sayfaKod.= '</noscript>'; exit; 
    }
}