<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "bukutamu";
$conn = mysqli_connect($hostmysql, $username, $password, $database);
if ($conn) {
    echo "<b>   </b>";
} else {
    die("<b> Gagal!  </b>");
}
