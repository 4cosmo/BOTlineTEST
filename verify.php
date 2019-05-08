<?php
$access_token = 'CeFxL0Lt+5C9Py3En51uL6/yjVwd3jOGCDvTg3dv95JDWRcw6kv0RaE1v6vAGcToZkQye3dhYif82t2fxLcSfUbaiRNIO+C4FvIdl62NzqWrFG4TaqpzFD3QFVxBjy4ZOmfbfYVJ91r4k0kc2CYIyAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
