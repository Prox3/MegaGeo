<?php
	  $urlAbsoluta = "http://". $_SERVER["HTTP_HOST"] . "/clientes/MegaGeo/";
	  $title = 'MegaGeo';
	  $description = 'Com equipamentos modernos aliados a um com corpo técnico especializado, a MegaGeo está altamente capacitada para trabalhos de fundação.';
	  $keywords = 'engenharia, fundacoes, bate estaca, obras';
	  $organization = 'MegaGeo';
	  $activeMenu = '#home';
?>
<?php 
include("header.php");
$_SERVER["REQUEST_URI"];
$parte1 = strrchr($_SERVER["REQUEST_URI"],"?");
$parte2 = str_replace($parte1,"", $_SERVER["REQUEST_URI"]);
$url = explode("/", strtolower($parte2));

array_shift($url);
if(!empty($url[2])){
	if(file_exists($url[2].".php")){
		include($url[2].".php");
	}
}
else{
	include("home.php");
}

include("footer.php");
?>