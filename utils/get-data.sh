#!/bin/bash
python3 scrapper.py
python3 insert.py
cd /var/www/html/backoffice
php a.php