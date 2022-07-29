<?php
    $ch = curl_init(); // Initialize cURL

    $url = "https://reqres.in/api/users?page=2";

    $fh = fopen("file.txt", "w");

    curl_setopt($ch, CURLOPT_URL, $url); // Specifies URL to work on
    curl_setopt($ch, CURLOPT_FILE, $fh);

    curl_exec($ch);

    if($err = curl_errpr($ch)){
        echo $err;
    }

    fclose($fh);
    curl_close($ch); // Close cURL
?>