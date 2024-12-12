<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "package";

$conn = new mysqli($servername, $username, $password, $dbname);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">List of Packages</h1>

        <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">Add Data</a>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Package</th>
                        <th class="border border-gray-300 px-4 py-2">Author</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Version</th>
                        <th class="border border-gray-300 px-4 py-2">Release Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr class='hover:bg-gray-100'>";
                            echo "<td class='border border-gray-300 px-4 py-2 text-center'>" . $row['package_id'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['package_name'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['author_name'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['author_email'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['version_name'] . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . $row['release_date'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center py-4'>No data found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
