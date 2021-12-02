<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://reqres.in/api/users?page=2',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
$resp = (json_decode($response,true));
//print_r($resp['page']);  
curl_close($curl);
$personas = $resp['data'];
foreach($personas as $persona){
    echo $persona['id'].'. '.$persona['first_name'].' '.$persona['last_name'].'<br/>';
}
