<?php
require __DIR__ . '/../config.php';
include '../src/controllers/blogController.php';

$blogs = getAllBlogs(); // Funkcja wczytująca wszystkie wpisy

include __DIR__ . '/../views/header.php';
?>

<main>
    <section id="latest-blogs">
        <h1>Blog</h1>
        <div class="blog-list">
            <?php if (!empty($blogs)): ?>
                <?php foreach ($blogs as $blog): ?>
                    <div class="blog-post">
                        <h2><?php echo htmlspecialchars($blog['title']); ?></h2>
                        <p class="excerpt"><?php echo htmlspecialchars($blog['excerpt']); ?></p>
                        <p class="date"><?php echo htmlspecialchars($blog['date']); ?></p>
                        <a href="single.php?id=<?php echo $blog['id']; ?>" class="read-more">Czytaj więcej</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Brak wpisów na blogu.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../views/footer.php'; ?>
