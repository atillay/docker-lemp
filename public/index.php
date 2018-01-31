<?php

/** Just a test file */

echo 'Checking mysql connection : ';

new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));

echo 'OK';