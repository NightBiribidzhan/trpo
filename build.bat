path=H:\Cremza\PortableGit\bin;%path%




php $url_to_file = 'https://getcomposer.org/installer';
php $my_save_dir = 'trpo/';
php $filename = basename($url_to_file);
php $complete_save_loc = $my_save_dir . $ilename;
php file_put_contents($complete_save_loc, file_get_contents($url_to_file)); 



git symbolic-ref --short -q HEAD>version
php composer-setup.php
php -r "unlink('composer-setup.php');"
PAUSE