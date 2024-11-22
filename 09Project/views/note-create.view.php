<?php require __DIR__ . "/partials/head.php"; ?>
<?php require __DIR__ . "/partials/nav.php"; ?>
<?php require __DIR__ . "/partials/banner.php"; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="post" class="space-y-6">
            <!-- Textarea -->
            <div class="flex flex-col">
                <label for="textarea" class="text-lg font-medium text-gray-700">Your Message</label>
                <!-- TODO: to save the previous value we can use the $_POST['body'] -->
                <textarea id="body" name="body" rows="6" class="mt-2 p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"> <?= $_POST['body'] ?? ''?></textarea>
                <!-- TODO: Add validation error message -->
                 <?php if (isset($errors['body'])) : ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['body'] ?></p>
                <?php endif;?>
            </div>
            <div class="text-sm text-gray-500">
                <p>Enter your message here. This will help us understand your feedback or request.</p>
            </div>
            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-pink-600 text-white font-semibold rounded-lg hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Submit
                </button>
            </div>
        </form>
    </div>

</main>
<?php require __DIR__ . "/partials/footer.php"; ?>


<!-- Important Note: for the get request we can submit the any number of req we want for the one note but here want want to store only one note and once it stored then we want to allow user to store the another not so we do not pass the get req over here We gonna pass the post req over here -->