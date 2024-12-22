<?php require base_path("/views/partials/head.php"); ?>
<?php require base_path("/views/partials/nav.php"); ?>
<?php require base_path("/views/partials/banner.php"); ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note): ?>
                <li>
                    <a href="/note?id=<?= $note['id']; ?>" class="text-pink-600 hover:underline">
                        <?php
                        echo htmlspecialchars($note['body']);
                        ?>
                    </a>
                </li>
            <?php endforeach; ?>
            <p class="mt-6">
                <a href="/notes/create" class="inline-block px-6 py-2 text-white bg-pink-600 hover:bg-pink-700 rounded-lg text-center">Create note</a>
            </p>

        </ul>
    </div>
</main>

<?php require base_path("/views/partials/footer.php"); ?>