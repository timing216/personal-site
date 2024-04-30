#!/bin/bash

# MySQL login credentials
username="utaro"
password="newPassword123"
database="registrationForm"
table="users"

# Command to truncate the table
mysql -u "$username" -p"$password" -e "USE $database; TRUNCATE TABLE $table;"
