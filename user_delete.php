<?php
require 'db_conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM dbbnaam WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_id", $id);
$stmt->execute();

header('location: home.php');