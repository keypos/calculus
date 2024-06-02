<?php
function get_conn() {
    define("dbserver", $_SERVER['SERVER_NAME']);
    define("dbusername", "TUBM01");
    define("dbpassword", "TUBM01");
    define("dbname", "tubm01db");

    $conn = new mysqli(dbserver, dbusername, dbpassword, dbname);

    if (!$conn) {
        die("Failed to connect to the database: " .mysqli_connect_error());
    }
    return $conn;
}
?>