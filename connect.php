<?php
require 'vendor/autoload.php';

$servername = "localhost:27017";
$dbname = "airteach";
$collectionName = "registration";

$client = new MongoDB\Client("mongodb://$servername");
$collection = $client->selectDatabase($dbname)->selectCollection($collectionName);
?>