<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lovelo+Juno&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#f8f5ec]">
    <div class="min-h-screen">

        <!-- Top Navbar -->
        <header class="w-full bg-[#14110d] text-white p-5 flex items-center justify-between" style="font-family: 'Lovelo Juno', sans-serif;">
            <h1 class="text-2xl font-bold">Frame Finders</h1>
            <nav class="space-x-6">
                <a href="{{ route('dashboard') }}" class="py-6 px-4 rounded hover:bg-[#362c24] transition-colors duration-200">Home</a>
                <a href="{{ route('gallery') }}" class="py-6 px-4 rounded hover:bg-[#362c24] transition-colors duration-200">Gallery</a>
                <a href="{{ route('booking') }}" class="py-6 px-4 rounded hover:bg-[#362c24] transition-colors duration-200">Booking</a>
                <a href="{{ route('profile') }}" class="py-6 px-4 rounded hover:bg-[#362c24] transition-colors duration-200">My Profile</a>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <h2 class="text-4xl font-semibold text-center text-[#14110d] mb-8" style="font-family: 'Lovelo Juno', sans-serif;">
                Login or Sign Up
            </h2>

            <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md text-center" style="font-family: 'Lovelo Juno', sans-serif;">
                <h3 class="text-2xl font-medium mb-6 text-[#14110d]">Continue as:</h3>
                <div class="flex space-x-4 justify-center">
                    <button class="w-1/2 bg-[#bbafa1] text-white p-3 rounded-md hover:bg-[#a99e91] transition">
                        Login
                    </button>
                    <button class="w-1/2 bg-[#362c24] text-white p-3 rounded-md hover:bg-[#14110d]">
                        Sign Up
                    </button>
                </div>

                <!-- Optional Info Section -->
                <p class="text-sm text-gray-500 mt-6" style="font-family: 'Fira Code', monospace;">Don't have an account? Click Sign Up to get started!</p>
            </div>
        </main>
    </div>
</body>
</html>
