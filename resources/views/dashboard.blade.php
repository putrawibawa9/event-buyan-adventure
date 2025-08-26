<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-blue-100 p-4 rounded">
                    <h2 class="text-lg font-semibold">Total Event</h2>
                    <p class="text-3xl">{{ $total_event }}</p>
                </div>
                <div class="bg-green-100 p-4 rounded">
                    <h2 class="text-lg font-semibold">Total Penyewa</h2>
                    <p class="text-3xl">{{ $total_penyewa }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
