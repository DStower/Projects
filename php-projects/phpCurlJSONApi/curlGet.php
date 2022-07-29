<?php
    // Initialize cURL session
    $ch = curl_init();

    $url = "https://reqres.in/api/users?page=2";

    curl_setopt($ch, CURLOPT_URL, $url); // Specifies URL to work on
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 'true' return transfer as string of return value of curl_exec() instead of outputting it directly

    // Perform/Execute cURL session
    $resp = curl_exec($ch);

    if($err = curl_error($ch)){
        echo $err;
    }else{
        $decoded = json_decode($resp, true);
        print_r($decoded);
    }

    // Close cURL session
    curl_close($ch);

?>