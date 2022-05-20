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

<base href="/projects/ministry/">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" type="image/png" href="assets/images/favicon-32.png" />

<link rel="stylesheet" type="text/css" href="<?php echo auto_version('assets/css/main.css'); ?>">
<link rel="stylesheet" type="text/css" href="assets/css/Open-Sans.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/material-icons.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">