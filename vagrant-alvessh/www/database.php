<?php
$hostname = "192.168.56.4";
$dbname = "posweb";
$username = "posweb";
$pass = "posweb";

// Create connection
$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");

$result = pg_query($db_conn, "select * from pg_stat_activity");
echo  "Conectado ao banco";

var_dump(pg_fetch_all($result));
?>