#!/bin/bash

LOG_FILE="/var/log/student-api-health.log"
URL="http://localhost"

STATUS_CODE=$(curl -s -o /dev/null -w "%{http_code}" $URL)

if [ "$STATUS_CODE" -eq 200 ]; then
    echo "$(date): API is healthy (HTTP $STATUS_CODE)" >> $LOG_FILE
else
    echo "$(date): API is down! (HTTP $STATUS_CODE)" >> $LOG_FILE
fi
