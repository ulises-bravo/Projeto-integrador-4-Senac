<?php
error_reporting(0);

switch ($_GET['pag']){
	
	case 'home': include "home.php";
	break;
	
	case 'artigos': include "home.php";
	break;
	
	case 'quemsomos': include "quemsomos.php";
	break;
	
	case 'linhaeditorial': include "linhaeditorial.php";
	break;
	
	case 'podcast': include "podcast.php";
	break;
	
	case 'ajude': include "ajude.php";
	break;
	
	default: include "home.php";
	break;
}
?>