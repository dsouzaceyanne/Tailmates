<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, generate HTML for Logout
    $accountLink = '<li><a href="backend/logout.php">Logout</a></li>';
    $signInLink = '';
} else {
    // User is not logged in, generate HTML for Sign In
    $accountLink = '';
    $signInLink = '<li><a href="signup.php">Sign In</a></li>';
}
?>

<header>
    <head>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="icon/x-icon" href="resources/Tail Mates-4.png">
    </head>
    <div class="header-container">
        <a href="home.php">
            <div class="logo-section">
                <img id="paw" src="resources/6.png" alt="logo">
                <img id="paw2" src="resources/5.png" alt="logo">
            </div>
        </a>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="browse-pets.php">Browse Pets</a></li>
                <li><a href="adopt.php">Adopt</a></li>
                <li><a href="volunteer.php">Get Involved</a></li>
                <li><a href="donate.php">Donate</a></li>
                <?php echo $accountLink; ?>
                <?php echo $signInLink; ?>
            </ul>
        </nav>
    </div>
</header>
