#!/bin/bash

echo "CREATE DATABASE IF NOT EXISTS prestashop DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;" > config/dump.sql
echo "USE prestashop;" >> config/dump.sql

docker exec $1 /usr/bin/mysqldump -u root --password=admin prestashop >> config/dump.sql