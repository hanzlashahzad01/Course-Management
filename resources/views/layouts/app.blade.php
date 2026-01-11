<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMSATS Course Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">
                <i class="fas fa-graduation-cap mr-2"></i> COMSATS Course Portal
            </h1>
            <nav>
                <a href="/" class="px-3 py-2 rounded hover:bg-blue-700 transition">Student View</a>
                <a href="/admin/courses?admin=true" class="px-3 py-2 rounded hover:bg-blue-700 transition">Admin Panel</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 COMSATS University Islamabad - Web Technologies Assignment</p>
        </div>
    </footer>
</body>
</html>