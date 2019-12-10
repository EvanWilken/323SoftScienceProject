<?php

include "connection.php"

$name = $_POST['name'];
$score = $_POST['score'];



$sql = "INSERT INTO PLAYERS (name, score) VALUES ('$name', '$score')";