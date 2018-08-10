<?php
require_once 'header.php';
$post_sn = "23";
$sql = "SELECT * FROM `cmt` WHERE `post_sn`='{$post_sn}'";
$result = $mysqli->query($sql) or die($mysqli->connect_error);
while ($test = $result->fetch_assoc()) {
    echo $test['cmt_sn'];
}