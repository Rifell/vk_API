<?php

$request_params = [
    'need_all' => '1',
    'offset' => 0,
    'count' => 236,
    'access_token' => 'a61ca664a6ac4d52443ec05b2d6af60fd71da914d29b6b2ed35a0f3889b0ce6e79b03b41e69f6c63e15a4'
];

$url = "https://api.vk.com/method/database.getCountries?" . http_build_query($request_params);
$result = file_get_contents($url);
$arr_json = json_decode($result, true);

echo "Кликните по стране, чтобы увидеть основные города: <br>";

foreach($arr_json as $key => $val)
{
    for($i = 0; $i < count($val); $i++)
    { 
       $cid = $val[$i]['cid'];
       echo "<a href='cities.php?id=$cid'>".$val[$i]['title']. "</a>". "<br>"; 
    }
} 







