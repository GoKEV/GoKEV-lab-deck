#!/bin/sh
sudo /bin/php -S 0.0.0.0:8000 -t {{ workshop_web_path }}/deck-ansible/ > /var/log/php_deck.log 2>&1

