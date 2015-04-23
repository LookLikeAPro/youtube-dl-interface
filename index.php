<?php
	$link = escapeshellarg($_GET['link']);
	$format = $_GET['format'];
	$formatDict = [
		"mp3" => "140",
		"mp4" => "",
		"HD" => "",
		"SD" => "",
		"360p" => "",
		"480p" => "",
		"720p" => "",
		"1080p" => "",
	];
	if (array_key_exists($format, $formatDict)){
		$format = $formatDict[$format];
	}
	else {
		$format = '';
	}
	if ($format == ''){
		$command = "youtube-dl "."--get-url ".$link;
	}
	else {
		$command = "youtube-dl "."-f ".$format."--get-url ".$link;
	}
	$result =  `$command`;
	echo($result);
?>