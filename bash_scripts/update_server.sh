#!/bin/bash

PROJECT_DIR="/var/www/student-api"
LOG_FILE="/var/log/student-api-update.log"

cd $PROJECT_DIR

# Pull latest changes
git pull origin main

# Set permissions (if needed)
sudo chown -R www-data:www-data $PROJECT_DIR
sudo chmod -R 775 $PROJECT_DIR/storage $PROJECT_DIR/bootstrap/cache

# Restart services
sudo systemctl reload php8.3-fpm
sudo systemctl reload nginx

echo "$(date): Server updated and services reloaded" >> $LOG_FILE
