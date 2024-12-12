<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-7xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Add Package, Author, and Version</h1>
        
        <
        <form action="add_data.php" method="POST">


            <div class="mb-4">
                <label for="packageId" class="block text-sm font-medium text-gray-700">Package ID</label>
                <input type="number" id="packageId" name="packageId" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="packageName" class="block text-sm font-medium text-gray-700">Package Name</label>
                <input type="text" id="packageName" name="packageName" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>

            
            <div class="mb-4">
                <label for="authorId" class="block text-sm font-medium text-gray-700">Author ID</label>
                <input type="number" id="authorId" name="authorId" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="authorName" class="block text-sm font-medium text-gray-700">Author Name</label>
                <input type="text" id="authorName" name="authorName" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="authorEmail" class="block text-sm font-medium text-gray-700">Author Email</label>
                <input type="email" id="authorEmail" name="authorEmail" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>

            
            <div class="mb-4">
                <label for="versionId" class="block text-sm font-medium text-gray-700">Version ID</label>
                <input type="number" id="versionId" name="versionId" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="versionName" class="block text-sm font-medium text-gray-700">Version Name</label>
                <input type="text" id="versionName" name="versionName" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="releaseDate" class="block text-sm font-medium text-gray-700">Release Date</label>
                <input type="date" id="releaseDate" name="releaseDate" class="mt-1 px-4 py-2 w-full border border-gray-300 rounded" required>
            </div>

           
            <div class="flex justify-between">
                <a href="index.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">
                    Back to List
                </a>
                <button type="submit" class="bg-violet-600 text-white px-4 py-2 rounded hover:bg-violet-700">
                    Add to Data
                </button>
            </div>
        </form>
    </div>

</body>
</html>
