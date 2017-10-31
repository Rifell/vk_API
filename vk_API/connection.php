<?php

$permissions = ['offline', 'groups', 'stats'];

$request_params = [
    'client_id' => '6240964',
    'redirect_url' => 'https://oauth.vk.com/blank.html',
    'response_type' => 'token',
    'display' => 'page',
    'scope' => implode(',', $permissions)
];

$url = 'https://oauth.vk.com/authorize?' . http_build_query($request_params);

echo $url;



















