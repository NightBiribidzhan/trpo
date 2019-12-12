path=H:\Cremza\PortableGit\bin;%path%
git symbolic-ref --short -q HEAD>version
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"