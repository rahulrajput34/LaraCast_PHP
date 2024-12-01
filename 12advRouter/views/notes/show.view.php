<?php require base_path("/views/partials/head.php"); ?>
<?php require base_path("/views/partials/nav.php"); ?>
<?php require base_path("/views/partials/banner.php"); ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class='mb-5'>
            <a href="/notes"
                class="inline-block bg-blue-500 text-white font-semibold px-4 py-2 rounded-md text-center hover:bg-blue-600 active:bg-blue-700 transition transform hover:scale-105 active:scale-95">
                Go back
            </a>
            <!-- Its not appropriate to use the anchor tag over here -->
        </p>
        <p>
            <?php echo htmlspecialchars($note['body']); ?>
        </p>
        <!-- Delete a Note -->
         <!-- TODO: we manually need to say its need the delete req because the form only knows the get req and the post req -->
        <form class="mt-8" method="POST">
            <input type="hidden" name="_method" value="DELETE" >
            <input type="hidden" name="id"  value="<?= $note['id'] ?>">
            <button class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Delete
            </button>
        </form>
    </div>
</main>

<?php require base_path("/views/partials/footer.php"); ?>