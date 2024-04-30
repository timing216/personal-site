#!/bin/bash

# MySQL login credentials
username="utaro"
password="newPassword123"
database="registrationForm"
table="users"

# Command to login to MySQL and run queries
mysql -u "$username" -p"$password" -e "USE $database; SELECT * FROM $table;"
