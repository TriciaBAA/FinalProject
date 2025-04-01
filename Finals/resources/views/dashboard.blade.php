<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white p-5 space-y-6">
            <h1 class="text-2xl font-bold text-center">Frame Finders</h1>
            <nav class="mt-10 space-y-4">
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Home</a>
                <a href="{{ route('gallery') }}" class="block py-2 px-4 rounded hover:bg-blue-700">Gallery</a>
                <a href="{{ route('booking') }}" class="block py-2 px-4 rounded hover:bg-blue-700">Booking</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">My Profile</a>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 p-10">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-3xl font-semibold text-gray-800">Welcome to the Dashboard</h2>
                <p class="mt-2 text-gray-600">Manage your gallery bookings and explore artworks.</p>
                
                <div class="grid grid-cols-3 gap-6 mt-6">
                    <div class="bg-blue-500 text-white p-5 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold">Gallery</h3>
                        <p class="text-sm">Explore artwork collections</p>
                    </div>
                    <div class="bg-green-500 text-white p-5 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold">Bookings</h3>
                        <p class="text-sm">Manage your reservations</p>
                    </div>
                    <div class="bg-yellow-500 text-white p-5 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold">Profile</h3>
                        <p class="text-sm">Update your account details</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
