<?php
function get_conn() {
    define("dbserver", $_SERVER['SERVER_NAME']);
    define("dbusername", "tubm01");
    define("dbpassword", "tubm01");
    define("dbname", "12ipt");

    $conn = new mysqli(dbserver, dbusername, dbpassword, dbname);

    if (!$conn) {
        die("Failed to connect to the database: " .mysqli_connect_error());
    }
    return $conn;
}
?>