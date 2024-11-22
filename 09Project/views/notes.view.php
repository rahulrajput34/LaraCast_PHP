<?php require __DIR__ . "/partials/head.php"; ?>
<?php require __DIR__ . "/partials/nav.php"; ?>
<?php require __DIR__ . "/partials/banner.php"; ?>
<main>
    <!-- Foreach for disaplying the notes -->
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note): ?>
            <li>
                <!-- url to get the id of the note -->
            <a href="/note?id=<?= $note['id'];?>" class="text-pink-600 hover:underline">
                <?php
                echo $note['body'];
                ?>
                </a>
            </li>
        <?php endforeach; ?>
    </div>
</main>
<?php require __DIR__ . "/partials/footer.php"; ?>



<!-- Here we are passing that to url id=1 -->
 <!-- But we want that id to be dinamic -->
  <!-- That is what we did by give the php in the id -->