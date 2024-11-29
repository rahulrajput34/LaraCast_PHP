<?php require base_path("/views/partials/head.php"); ?>
<?php require base_path("/views/partials/nav.php"); ?>
<?php require base_path("/views/partials/banner.php"); ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <?php echo htmlspecialchars($note['body']); ?>
        </p>
        <p class='mt-5'>
    <a href="/10Clarity/controllers/notes/index"
       class="inline-block bg-blue-500 text-white font-semibold px-4 py-2 rounded-md text-center hover:bg-blue-600 active:bg-blue-700 transition transform hover:scale-105 active:scale-95">
        Go back
    </a>
</p>
    </div>
</main>

<?php require base_path("/views/partials/footer.php"); ?>



