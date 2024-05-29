<?php
    $log_btn = "Login";
    IF (isset($_SESSION["user_name"])) {
        $log_btn = "Logout";
    }
?>
<?php require('session_check.php');?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="./src/favicon.png">
    <title>Calctastic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script type="text/javascript" id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<nav class="nav">
    <div class="logo">∫ Calctasti<a>+</a>c</div>
    <ul class="nav-links">
        <li class="dropdown">
            <a href="index.php" class="dropbtn"><span class="material-symbols-outlined" style="vertical-align: middle; display: inline-block; height: 20px; line-height: 14px; padding-right:6px;">home</span>Home</a>
        </li>
        <li class="dropdown">
            <a href="differentiation.php" class="dropbtn">Differentiation</a>
            <div class="dropdown-content">
                <a href="./differentiation.php">Introduction</a>
                <a href="./differentiation_first_principles.php">First Principles</a>
                <a href="./differentiation_notation.php">Notation</a>
                <a href="./differentiation_polynomials.php">Polynomials</a>
                <a href="./differentiation_exponential.php">Exponentials</a>
                <a href="./differentiation_logarithms.php">Logarithms</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="integration.php" class="dropbtn">Integration</a>
            <div class="dropdown-content">
                <a href="./integration.php">Introduction</a>
                <a href="./integration_trapezoidal.php">Trapezoidal Rule</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="advanced_calculus.php" class="dropbtn">Advanced Calculus</a>
            <div class="dropdown-content">
                <a href="substitution_rule.php">Substitution Rule</a>
            </div>
        </li>
        <li>
            <a href="practice_problems.php">Practice Problems</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="login.php" class="dropbtn">Logout</a>
        </li>
    </ul>
</nav>
