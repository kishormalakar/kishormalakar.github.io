<?php

	function auto_version($file){

		$filemtime = filemtime(__DIR__."/".$file);
		$filemtime = ".".$filemtime;
		$index = strrpos($file, ".");
		return substr_replace($file, $filemtime, $index, 0);

	}

?>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="author" content="Kishor Malakar">
<link rel="author" href="https://www.facebook.com/kishor.malakar" />
<link rel="author" href="https://www.linkedin.com/in/kishormalakar" />

<base href="/projects/portfolio_new/">

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo auto_version('css/index.css'); ?>">
<link rel="stylesheet" type="text/css" href="css/Montserrat.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="icon" type="image/png" href="img/coding.png"/>
<meta name="theme-color" content="#03a9f4">

<meta name="viewport" content="width=device-width, initial-scale=1.0">