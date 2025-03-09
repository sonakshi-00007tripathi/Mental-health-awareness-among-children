<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindHorizon - Home</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.html">About</a></li>

            <?php if (isset($_SESSION['user_name'])): ?>
                <li>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.html">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<h1>Welcome to MindHorizon</h1>

</body>
</html>
