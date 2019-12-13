<?php
$url = 'https://getcomposer.org/installer';
$path = 'composer-setup.php';
file_put_contents($path, file_get_contents($url));
?>