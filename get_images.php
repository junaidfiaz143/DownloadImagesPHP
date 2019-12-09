<?php
  $query = "laptop";
  $api_key = "14531194-5862d84ec808dedb1b55ca50a";
  $type = "photo";

  $url = "https://pixabay.com/api/?key=".$api_key."&per_page=5&page=10&q=".$query."&image_type=".$type;

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $json_response = curl_exec($curl);
  curl_close($curl);

  $urls = json_decode($json_response);

  foreach ($urls->hits as $key => $value ) {
    $url = $value->webformatURL;
    echo $url."\n";
  }

?>