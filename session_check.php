<?php
    session_start();

    $time = $_SERVER['REQUEST_TIME'];
    $timeout_duration = 1000;

    $last = 0;
    $duration = 0;
    IF (isset($_SESSION['LAST_ACTIVITY'])) {
        $last = $_SESSION['LAST_ACTIVITY'];
        $duration = $time-$last;
        IF ($duration > $timeout_duration)  {
            header("Location: login.php");
        }
    }

    $_SESSION['LAST_ACTIVITY'] = $time;

    IF (!isset($_SESSION["user_name"])) {
        header("Location: login.php");
        exit;
    }
?>