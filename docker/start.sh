#!/bin/bash

# Start the run once job. echo "Docker container has been started"

# Setup a cron schedule
* * * * * php /var/www/artisan schedule:run >> /var/log/cron.log 2>&1
# This extra line makes it a valid cron" > scheduler.txt

crontab scheduler.txt 
cron -f