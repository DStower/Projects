<?php

    $url = "https://reqres.in/api/users";

    $data_array = array(
        'name' => 'John Doe',
        'job' => 'Web Developer'
    );

    $data = http_build_query($data_array); // Generates URL-encoded query string

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url); // Specifies URL to work on
    curl_setopt($ch, CURLOPT_POST, true); // Issue an HTTP POST request
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Send a POST with this data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 'true' to return string of return value of curl_exec() instead of outputting it directly

    $response = curl_exec($ch);

    if($err = curl_error($ch)){
        echo $err;
    }else{
        $decoded = json_decode($response);
        foreach($decoded as $key => $val){
            echo $key . ': ' . $val . '<br>';
        }
    }
    curl_close($ch);
?>

