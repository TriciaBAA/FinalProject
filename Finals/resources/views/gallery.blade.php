<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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

        <!-- Main content -->
        <main class="flex-1 p-10 overflow-auto">
            <h2 class="text-4xl font-semibold mb-6">Gallery</h2>

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
                                <textarea class="w-full p-3 border border-gray-300 rounded-md" rows="3" placeholder="Leave a comment..."></textarea>
                                <button class="mt-2 w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700">Submit Comment</button>
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
