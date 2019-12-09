<?php
	$url = $_GET["url"];

	// echo $url;
	echo "Image Downloaded.";
    $save_dir = 'JD_IMAGES/';
    $image_name = basename($url);
    $complete_save_loc = $save_dir.$image_name;
    file_put_contents($complete_save_loc, file_get_contents($url));
?>