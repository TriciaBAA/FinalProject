<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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

        <!-- Main content -->
        <main class="flex-1 p-10 overflow-auto">
            <h2 class="text-4xl font-semibold mb-6" style="font-family: 'Lovelo Juno', sans-serif;">Gallery</h2>

            <!-- Photo Gallery Section -->
            <div class="relative max-w-full mx-auto">
                <!-- Left Arrow -->
                <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white p-3 rounded-full shadow-md hover:bg-blue-700">
                    &#10094;
                </button>

                <!-- Photo Gallery -->
                <div class="flex overflow-hidden">
                    <div class="w-full flex-shrink-0 p-4">
                        <img src="https://via.placeholder.com/500x300" alt="Photographer 1" class="w-full h-auto rounded-lg shadow-lg">
                        <!-- Rating and Comment Section -->
                        <div class="mt-3">
                            <div class="flex items-center">
                                <!-- Star Rating -->
                                <div class="flex space-x-1">
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-gray-400">&#9733;</span>
                                    <span class="text-gray-400">&#9733;</span>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">3/5</span>
                            </div>
                            <!-- Comment Section -->
                            <div class="mt-2">
                                <textarea class="w-full p-3 border border-gray-300 rounded-md" rows="3" placeholder="Leave a comment..." style="font-family: 'Fira Code', monospace;"></textarea>
                                <button class="w-full bg-[#362c24] text-white p-3 rounded-md hover:bg-[#14110d]" style="font-family: 'Lovelo Juno', sans-serif;">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other photos -->
                    <div class="w-full flex-shrink-0 p-4">
                        <img src="https://via.placeholder.com/500x300" alt="Museum 2" class="w-full h-auto rounded-lg shadow-lg">
                        <div class="mt-3">
                            <div class="flex items-center">
                                <div class="flex space-x-1">
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-yellow-500">&#9733;</span>
                                    <span class="text-gray-400">&#9733;</span>
                                    <span class="text-gray-400">&#9733;</span>
                                    <span class="text-gray-400">&#9733;</span>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">2/5</span>
                            </div>
                            <div class="mt-2">
                                <textarea class="w-full p-3 border border-gray-300 rounded-md" rows="3" placeholder="Leave a comment..."></textarea>
                                <button class="mt-2 w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more photos as needed -->
                </div>

                <!-- Right Arrow -->
                <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white p-3 rounded-full shadow-md hover:bg-blue-700">
                    &#10095;
                </button>
            </div>
        </main>
    </div>
</body>
</html>
