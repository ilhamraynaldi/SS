<?php

	$html_path = 'assets/html/';
	$html_rootpath = '../assets/html/';
	$css_path = 'assets/css/';
	$page_view = 'home';
	$type_view = '';

	$lipsum = "Aoccdrnig to rseearch at an Elingsh uinervtisy, it deosn't mttaer in waht oredr the ltteers in a wrod are, the olny iprmoatnt tihng is that the frist and lsat ltteer is at the rghit pclae. The rset can be a toatl mses and you can sitll raed it wouthit a porbelm. Tihs is bcuseae we do not raed ervey lteter by it slef but the wrod as a wlohe. ";
	
	$blank = '<center style="padding:100px; font-size:48px; color:#CCC; font-weight:100;">time for coffee break<div style="font-size:200px; color:#DDDDDD; margin-top:30px">&#9749;</div></center>';


	if( isset($_GET["page"])) {
		$page_view = $_GET["page"];

		if( isset($_GET["view"])) { 
			$type_view=$_GET["view"]; 
		}
	}

	include ($html_path.'head.html');
	include ($html_path.'header.html');

	if (file_exists($html_path.$page_view.'.html')) {
		include ($html_path.$page_view.'.html');
	}else{
		print $blank;
	}

	
	include ($html_path.'footer.html');



?>