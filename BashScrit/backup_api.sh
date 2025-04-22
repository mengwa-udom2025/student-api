#!/bin/bash

TIMESTAMP=$(date +%F)
BACKUP_DIR="/home/ubuntu/backups"
API_DIR="/var/www/your_api"
DB_NAME="your_db"
DB_USER="your_user"
DB_PASS="your_password"

mkdir -p $BACKUP_DIR

# API Backup
tar -czf $BACKUP_DIR/api_backup_$TIMESTAMP.tar.gz $API_DIR

# DB Backup (MySQL example)
mysqldump -u $DB_USER -p$DB_PASS $DB_NAME > $BACKUP_DIR/db_backup_$TIMESTAMP.sql

# Cleanup old backups
find $BACKUP_DIR -type f -mtime +7 -exec rm {} \;

# Log
echo "$(date) Backup completed" >> /var/log/backup.log
