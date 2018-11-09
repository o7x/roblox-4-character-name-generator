<?php
$seed = str_split('abcdefghijklmnopqrstuvwxyz1234567890'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$name = '';
foreach (array_rand($seed, 4) as $k) $name .= $seed[$k];
$url = 'https://www.roblox.com/UserCheck/DoesUsernameExist?username=' . $name;

$check = file_get_contents($url);

if ($check == '{"success":true}') {
    echo $name . ' [taken]';
} else {
    $data = $name . PHP_EOL;
    $fp = fopen('names.txt', 'a');
    fwrite($fp, $data);    
    echo $name . ' [available]';
}

?>