<?php

$request_params1 = [
    'country_id' => $_GET['id'],
    'need_all' => 0,
    'offset' => 0,
    'count' => 236,
    'access_token' => 'a61ca664a6ac4d52443ec05b2d6af60fd71da914d29b6b2ed35a0f3889b0ce6e79b03b41e69f6c63e15a4'
];

$url1 = "https://api.vk.com/method/database.getCities?" . http_build_query($request_params1);
$result1 = file_get_contents($url1);
$arr_json1 = json_decode($result1, true);

foreach($arr_json1 as $key => $val)
{
    for($i = 0; $i < count($val); $i++)
    {
        echo $val[$i]['title'] ."<br>"; 
    }
}