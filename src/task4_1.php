<?php
namespace marima64\myProject;

$departureTime = "11:30";
$travelTime = "50:30";

$secs = strtotime($departureTime) - strtotime("00:00:00"); 
$base = strtotime($travelTime); 

echo date("H:i:s", $base + $secs) . "\n"; 
?>
