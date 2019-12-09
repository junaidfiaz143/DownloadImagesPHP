<?php
	$url = "http://localhost/get_images.php";

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$json_response = curl_exec($curl);

	curl_close($curl);
	$urls = explode("\n", $json_response);
	
	$id = 0;
	foreach ($urls as $url) { 
		$id++;
	    // $array_url[] = $url;
	    echo "<img id=".$id." onclick='getImageId(".$id.")' src=".$url.">";
	};
	// print_r($array_url); 
	// echo $array_url[1]; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>images</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		function getImageId(id){
        	var src =  document.getElementById(id).src;
     		// alert(src);
			$.ajax({
			    type: "GET",
			    url: "download_image.php?url="+src,
			    success: function(data){
			    	alert(data);
			    }
			});

		}
	</script>
</head>
<body>

</body>
</html>