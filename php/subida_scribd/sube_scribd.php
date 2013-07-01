<?php
	session_start();

	require_once 'scribd.php';

	$scribd_api_key = "5bdi42g6bioa3a7tz9urh";
	$scribd_secret = "sec-8mskuhnxkwnv96ajgrz9yaogt8"; 

	$scribd = new Scribd($scribd_api_key, $scribd_secret);
	if($scribd){
		$url_scribd = "http://scribd.com/doc/";
		$file = $_FILES['userfile']['tmp_name'];
		$doc_type = null;
		$access = null;
		$rev_id = null;
		$data = $scribd->upload($file, $doc_type, $access, $rev_id); // returns Array ( [doc_id] => 1026598 [access_key] => key-23nvikunhtextwmdjm2i )
		print_r($data);
		echo "<br />";
		$enlace_pegable = $url_scribd.$data[doc_id];
		$_SESSION['scribd'] = $enlace_pegable;

		//print "<div id=prueba>".$_SESSION['scribd']."</div>";

		echo '<head>
				<meta http-equiv=refresh content=0;colecta_enlace.html>
			</head>';
	}else{
		echo "Error. Objeto scribd no creado.";
	}
?>