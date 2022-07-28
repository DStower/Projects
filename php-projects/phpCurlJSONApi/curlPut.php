<?php

    $url = "https://reqres.in/api/users/2";

    $data_array = array(
        'name' => 'John Doe',
        'job' => 'Web Developer'
    );

    $data = http_build_query($data_array); // Generates URL-encoded query string

    $header = array(
        'Authorization: fsefeffesfs'
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url); // Specifies URL to work on
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); // Issue an HTTP PUT request
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Send a POST with this data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 'true' to return string of return value of curl_exec() instead of outputting it directly
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $response = curl_exec($ch);

    if($err = curl_error($ch)){
        echo $err;
    }else{
        $decoded = json_decode($response, true);
/*         foreach($decoded as $key => $val){
            echo $key . ': ' . $val . '<br>';
        } */
        $decoded = json_decode($response); // json_decode decodes a JSON string
        var_dump($response); // var_dump dumps more information about a variable 
        var_dump($decoded);
        $encoded = json_encode($decoded); // json_encode returns JSON representation of a string
        var_dump($encoded);
    }
    curl_close($ch);
?>
