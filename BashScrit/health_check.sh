#!/bin/bash

LOG_FILE="/var/log/server_health.log"
TIMESTAMP=$(date "+%Y-%m-%d %H:%M:%S")

CPU=$(top -bn1 | grep "Cpu(s)" | awk '{print $2 + $4}')
MEM=$(free | grep Mem | awk '{print $3/$2 * 100.0}')
DISK=$(df / | grep / | awk '{ print $5 }' | sed 's/%//g')

API1=$(curl -s -o /dev/null -w "%{http_code}" http://localhost/api/students)
API2=$(curl -s -o /dev/null -w "%{http_code}" http://localhost/api/subjects)

echo "$TIMESTAMP CPU: $CPU%, MEM: $MEM%, DISK: $DISK%" >> $LOG_FILE

if [ "$API1" -ne 200 ] || [ "$API2" -ne 200 ] || [ "$DISK" -gt 90 ]; then
    echo "$TIMESTAMP WARNING: Health check failed" >> $LOG_FILE
fi
