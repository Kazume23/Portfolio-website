<?php if (!empty($latestBlogs)): ?>
    <section id="latest-blogs">
        <br><br><br>
        <h2>Ostatnie wpisy na blogu</h2>
        <ul>
            <?php foreach ($latestBlogs as $blog): ?>
                <li>
                    <h3><?php echo htmlspecialchars($blog['title']); ?></h3>
                    <p><?php echo htmlspecialchars($blog['content']); ?></p>
                    <small><?php echo htmlspecialchars($blog['date']); ?></small>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php else: ?>
    <p>Brak wpisów na blogu.</p>
<?php endif; ?>
