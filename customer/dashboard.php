<?php

require_once "../includes/session.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login.php");
    exit;
}

if ($_SESSION["role"] !== "customer") {
    header("Location: ../login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Customer Dashboard | PawCare</title>
</head>

<body>

    <h1>
        Welcome,
        <?php echo htmlspecialchars($_SESSION["full_name"]); ?>
    </h1>

    <p>Customer Dashboard</p>

    <p>
        Username:
        <?php echo htmlspecialchars($_SESSION["username"]); ?>
    </p>

</body>

</html>