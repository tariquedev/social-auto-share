<?php
	$photo_url = "Your Post Link/Photo link";
    $access_token = "Grap API token";
    $graph_url= "https://graph.facebook.com/yourversion/yourpageid/feed";
    $postData = "link=" . urlencode($photo_url)
    . "&message=" . urlencode("Post Title")
    . "&access_token=" .$access_token;

    $chf = curl_init();
    curl_setopt($chf, CURLOPT_URL, $graph_url);
    curl_setopt($chf, CURLOPT_HEADER, 0);
    curl_setopt($chf, CURLOPT_POST, 1);
    curl_setopt($chf, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($chf, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($chf, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($chf);
    curl_close($chf);
?>