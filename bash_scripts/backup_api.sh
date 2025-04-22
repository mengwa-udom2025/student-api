#!/bin/bash

BACKUP_DIR="/var/backups/student-api"
DATE=$(date +%F_%T)
DB_NAME="laravel"
DB_USER="root"
DB_PASS="admin"
LOG_FILE="/var/log/student-api-backup.log"

mkdir -p $BACKUP_DIR

# Database backup
mysqldump -u $DB_USER -p$DB_PASS $DB_NAME > $BACKUP_DIR/db_backup_$DATE.sql

# API directory backup
tar -czf $BACKUP_DIR/api_backup_$DATE.tar.gz /var/www/student-api

echo "$(date): Backup completed" >> $LOG_FILE
