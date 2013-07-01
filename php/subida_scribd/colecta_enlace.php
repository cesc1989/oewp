<?php session_start(); ?>
<body>
	<div id="scribd"><?php echo $_SESSION['scribd']; ?></div>
</body>
<?php echo '<head>
		<meta http-equiv=refresh content=1;/subida_scribd/index.html>
	</head>';
?>