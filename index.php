<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
     <div class="max-w-7xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">List of packages</h1>
        
        <a href="create.php" id="openFormBtn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-900">
            Add Data
        </a>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Package</th>
                        <th class="border border-gray-300 px-4 py-2">Auteur</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Version</th>
                        <th class="border border-gray-300 px-4 py-2">Release date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">php</td>
                        <td class="border border-gray-300 px-4 py-2">Bill Gates</td>
                        <td class="border border-gray-300 px-4 py-2">bill.gates@microsoft.com</td>
                        <td class="border border-gray-300 px-4 py-2">1.1.0</td>
                        <td class="border border-gray-300 px-4 py-2">2022-05-18</td>
                        
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">js</td>
                        <td class="border border-gray-300 px-4 py-2">Elon Musk</td>
                        <td class="border border-gray-300 px-4 py-2">elon.musk@spacex.com</td>
                        <td class="border border-gray-300 px-4 py-2">2.4.0</td>
                        <td class="border border-gray-300 px-4 py-2">2022-05-18</td>
                    
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    
</body>
</html>