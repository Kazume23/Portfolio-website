<?php
require __DIR__ . '/../config.php';
include '../src/controllers/blogController.php';

$blogs = getAllBlogs(); // Funkcja wczytująca wszystkie wpisy

include __DIR__ . '/../views/header.php';

?>

<main>
    <h1>Blog</h1>
    <section id="blog-list">
        <?php if (!empty($blogs)): ?>
            <ul>
                <?php foreach ($blogs as $blog): ?>
                    <li>
                        <h2><?php echo htmlspecialchars($blog['title']); ?></h2>
                        <p><?php echo htmlspecialchars(substr($blog['content'], 0, 100)) . '...'; ?></p>
                        <small><?php echo htmlspecialchars($blog['date']); ?></small>
                        <a href="single.php?id=<?php echo $blog['id']; ?>">Czytaj więcej</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Brak wpisów na blogu.</p>
        <?php endif; ?>
    </section>
</main>

<?php include __DIR__ . '/../views/footer.php'; ?>