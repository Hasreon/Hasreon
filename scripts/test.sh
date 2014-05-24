echo "Starting test"
timeout -k 10s 30s "php -s index.php"
# Maybe PHPunit?