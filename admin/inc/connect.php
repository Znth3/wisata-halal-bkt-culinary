<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "root";
	$port = "5434";
	$dbname = "tourism_bkt";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>