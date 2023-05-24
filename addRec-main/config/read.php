<?php
include "db_conn.php";

$sql = "SELECT * FROM tblscreg ORDER BY ResidentID ASC";
$result = mysqli_query($conn, $sql);