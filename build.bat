path=H:\Cremza\PortableGit\bin;%path%
git symbolic-ref --short -q HEAD>version



php -r "$url_to_file = 'https://getcomposer.org/installer'; $my_save_dir = 'build.bat'; $filename = basename("composer-setup.php"); $complete_save_loc = $my_save_dir . $filename; file_put_contents($complete_save_loc, file_get_contents($url_to_file));"

php composer-setup.php
php -r "unlink('composer-setup.php');"
PAUSE