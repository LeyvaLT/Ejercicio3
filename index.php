<?php

echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$navegador = get_browser(null, true);
print_r($navegador);



$new_arr[]=unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
echo "<br>";
echo "\n\nIP:".$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "\n\nLatitud:".$new_arr[0]['geoplugin_latitude']."     Longitud:".$new_arr[0]['geoplugin_longitude'];




?>
