<?php
	session_start();
	require("../../../../../config.php");
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	$stmt = $mysqli->prepare("INSERT INTO diary (id, type, answer1, answer2, answer3, answer4, answer5, answer61, answer7) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
	$stmt->bind_param("iiiiiisss", $_SESSION['userid'], $_REQUEST["t"], $_REQUEST["a1"], $_REQUEST["a2"],$_REQUEST["a3"],$_REQUEST["a4"], $_REQUEST["a5"],$_REQUEST["a6"],$_REQUEST["a7"]);
	$stmt->execute();
	$stmt->close();
	$mysqli->close();
?>