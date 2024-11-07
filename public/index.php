<?php
require __DIR__ . '/../config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Załaduj kontroler
include BASE_PATH . '/src/controllers/blogController.php';

// Pobierz najnowsze blogi
$latestBlogs = getLatestBlogs();

// Załaduj widok strony
include BASE_PATH . '/views/header.php';
include BASE_PATH . '/views/templates/hero.php';
include BASE_PATH . '/views/templates/latest_blogs.php';
include BASE_PATH . '/views/footer.php';
?>
