<?php 

class headers {

	function set_title($param){
		print "<html><head><title>".$param."</title>";
		print "<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>";
		print "<link rel='stylesheet' type='text/css' href='../css/bootstrap/bootstrap.css'>";
		print "<script src='../javascript/libs/jquery-1-11-0.js' type='text/javascript'></script>";
		print "<script src='../javascript/libs/modernizr.js'></script>";
		print "<script src='../javascript/bootstrap.js' type='text/javascript'></script>";
		
		print "</head><body>";	
	}

	function set_foot (){
		print "<script src='../javascript/datepicker.js' type='text/javascript'></script>";
		print "</body></html>";
	}


}
?>