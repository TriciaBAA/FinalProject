<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white p-5 space-y-6">
            <h1 class="text-2xl font-bold text-center">Frame Finders</h1>
            <nav class="mt-10 space-y-4">
                <a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded hover:bg-blue-700">Home</a>
                <a href="{{ route('gallery') }}" class="block py-2 px-4 rounded hover:bg-blue-700">Gallery</a>
                <a href="{{ route('booking') }}" class="block py-2 px-4 rounded hover:bg-blue-700">Booking</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">My Profile</a>
            </nav>
        </aside>
    </div>
</body>
</html>