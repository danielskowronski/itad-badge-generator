#!/usr/bin/env bash

apt-get update
apt-get install -y apache2
if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi
apt-get install -y libapache2-mod-php5
a2enmod php5
a2enmod rewrite
service apache2 restart