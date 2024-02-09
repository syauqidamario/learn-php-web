<?php
header('Application: Learn PHP Web');
header('Author: Shin Ishikawa');
$client = $_SERVER['HTTP_CLIENT_NAME'];
echo "Hello $client";