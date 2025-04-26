#!/bin/bash

TIMESTAMP=$(date "+%Y-%m-%d %H:%M:%S")
LOG_FILE="/var/log/update.log"
REPO_DIR="/var/www/your_api"

{
  echo "$TIMESTAMP Starting update..."
  sudo apt update && sudo apt upgrade -y
  cd $REPO_DIR || exit 1
  git pull origin main || { echo "$TIMESTAMP Git pull failed"; exit 1; }
  sudo systemctl restart apache2
  echo "$TIMESTAMP Update completed"
} >> $LOG_FILE 2>&1
