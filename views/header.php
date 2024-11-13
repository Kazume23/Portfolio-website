<!-- views/header.php -->

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje Portfolio</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css">
</head>
<body>
<header class="header">
        <a href="#" class="logo">{Portfolio} </a>

        <nav class="navbar">
            <a href="#home" style="--i:1;" class="active">Home</a>
            <a href="#about" style="--i:2;">About</a>
            <a href="#skill" style="--i:3;">Skills</a>
            <a href="#project" style="--i:4;">Projects</a>
            <a href="#contact" style="--i:5;">Contact</a>
        </nav>
    </header>
    <script src="<?php echo BASE_URL; ?>/js/navbar.js"></script>
</body>
