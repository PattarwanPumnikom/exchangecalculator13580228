<?php

	$DB_SERVER = 'localhost';
	$DB_USER_READER = 'u13580228';
	$DB_PASS_READER = 'DaeABBji8H';
	$DB_NAME = 'db13580228';

	//คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVER, $DB_USER_READER, $DB_PASS_READER, $DB_NAME);

	//ตรวจสอบว่าต่อสำเร็จไหม
	if (!$conn) {
		die("connection failed".mysqli_connect_error());
	}

	mysqli_set_charset($conn, "utf8");

?>