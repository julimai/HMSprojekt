<?php
	session_start();
	require("../../../../../config.php");
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	$id = $_SESSION["userid"];

	$sql = "SELECT answer61 FROM diary WHERE id=".$id.";";
	$result = $mysqli->query($sql);
	while($row = $result->fetch_assoc()) {
		if($row["answer61"]!="Ei kannatanud" || $row["answer61"]!="Töökohustused" ||
		$row["answer61"]!="Suhted sõpradega" || $row["answer61"]!="Suhted sõpradega" ||
		$row["answer61"]!="Välimuse eest hoolitsemine" || $row["answer61"]!="Lemmiklooma eest hoolitsemine"){
			echo "<tr>";
			echo "<td>Jah</td><td>". $row["frequencys"]."%</td>";
			echo "</tr>";
		}	
	}
	$sql->execute();
	$sql->close();
	$mysqli->close();
?>