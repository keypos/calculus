<?php
    session_start();
    session_destroy();
    session_unset();
    session_start();
    require("dbconnect.php");
    $message="Please login";
    $method  = $_SERVER["REQUEST_METHOD"];
    IF ($method=="POST") {
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        try {
            $conn = get_conn();
            $sql = "SELECT first_name, last_name FROM users WHERE user_name = ? AND password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $user_name, $password);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($first_name,$last_name);
            $num_of_rows = $stmt->num_rows;
            $success = false;
            $message = "Invalid user: Contact support";
            if ($num_of_rows > 0) {
                while ($stmt->fetch()) {
                    $message = "Login successfully completed. Welcome ".$first_name.' '.$last_name;
                    $_SESSION['user_name']  = $user_name;
                    $_SESSION['password']  = $password;
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['last_name'] = $last_name;
                    $_SESSION["footer"] = "Current User: ".$user_name." ".$first_name." ".$last_name;
                    $success = true;
                }
            }
            $stmt->close();
            $conn->close();
            if ($success==true) {
                header("Location: index.php");
                exit;
            }
        } catch (Exception $e) {
            $message = "Error: ".$e->getMessage();
            $message = "Invalid username or password";
        }
    }
?>

<div class="login">
    <form name="login" action="" method="POST">
        <label>Username: </label>
        <input name="user_name" type="text" size="32" required></input>
        <label>Password: </label>
        <input name="password" type="password" size="32" required></input>
        <button name="login" type="submit">Login</button>
        <div class="message">
            <?php echo($message); ?>
        </div>
    </form>
</div>

<style>
    * {
        font-family: sans-serif;
    }

    .message {
        color: grey;
    }

    .login {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
        padding: 20px;
        border: 1px solid #cccccc;
        border-radius: 8px;
    }

    input {
        margin-bottom: 10px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #cccccc;
        border-radius: 8px;
    }

    button {
        font-weight: 500;
        color: #FFFFFF;
        padding: 10px;
        width: 100%;
        cursor: pointer;
        background-color: #6f5be3;;
        border: 1px solid #cccccc;
        border-radius: 8px;
        box-sizing: border-box;
    }
    button:hover{
        background-color: #5f4bd3;
    }
</style>