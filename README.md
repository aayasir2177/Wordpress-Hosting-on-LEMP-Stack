# WordPress Hosting on LEMP Stack

## Overview
In this project, I will demonstrate how to deploy a WordPress website on a LEMP stack (Linux, Nginx, MySQL, PHP).

## My Tech Stack
- Ubuntu 24 LTS
- Nginx
- MySQL
- PHP-FPM
- WordPress

## Setup Steps

### Updating System
```
sudo apt update 
sudo apt upgrade
```

### Setting up a new user
```
sudo useradd wordpress
sudo usermod -aG sudo wordpress
```

### Installing apps
```
sudo apt install nginx php-fpm php-mysql mysql-server
```

### Running mysql secure installation script
```
sudo mysql_secure_installation
```

### Downloading WordPress
```
wget https://wordpress.org/latest
tar -xzvf latest
sudo mv wordpress /home/wordpress/public_html
```

### Configuring Database
```
mysql -u root -p
CREATE DATABASE db;
CREATE USER 'yasir'@'localhost' IDENTIFIED BY 'mypassword';
GRANT ALL PRIVILEGES ON db.* TO 'yasir'@'localhost';
FLUSH PRIVILEGES;
```

### Editing wp-config.php (added mysql data)
```
cd /home/wordpress/public_html
cp wp-config-sample.php wp-config.php
```

### Configuring Nginx (created server block and added php processing)
```
cd /etc/nginx/sites-available
sudo mv default wordpress-site.conf
sudo vim wordpress-site.conf
```

### Restarting Services
```
sudo systemctl restart nginx
sudo systemctl restart php8.3-fpm
```

## Issue I faced
Nginx showed 404 Not Found. I then did "sudo tail -15 /var/log/nginx/error.log", there I found nginx wasn't able to access the files due to permission issues, which I then solved. 

### Setting Permissions
```
sudo chown -R www-data:www-data /home/wordpress/public_html
sudo chmod -R 755 /home/wordpress/public_html
```

## What I Learned
- Complete LEMP stack setup
- Nginx configuration
- Importance of file permissions
