<?php
$url_to_file = 'https://getcomposer.org/installer';
$my_save_dir = './';
$filename = basename('composer-setup.php');
$complete_save_loc = $my_save_dir . $filename;
file_put_contents($complete_save_loc, file_get_contents($url_to_file));
?>