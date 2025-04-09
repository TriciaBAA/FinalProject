<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lovelo+Juno&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
        <main class="flex-1 p-10 overflow-auto">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="text-6xl font-semibold text-gray-800" style="font-family: 'Lovelo Juno', sans-serif;">Welcome Frame Finders!</h1>
                <p class="mt-2 text-gray-600 text-lg" style="font-family: 'Fira Code', monospace;">
                    Find yourself a skilled photographer who understands your vision. Explore stunning galleries, make bookings with ease, and manage your profile all in one place.
                </p>
        
        <!-- Image Carousel -->
            <div x-data="{ current: 0, images: [
                '/images/img1.JPG',
                '/images/img2.JPG',
                '/images/img3.JPG',
                '/images/img4.JPG',
                '/images/img5.JPG'
            ] }" class="relative w-full h-[29rem] overflow-hidden rounded-lg shadow-md mt-8">
                <template x-for="(image, index) in images" :key="index">
                    <div x-show="current === index" class="absolute inset-0 transition-opacity duration-500 ease-in-out" x-transition>
                        <img :src="image" class="w-full h-full object-cover" alt="Slide">
                    </div>
                </template>

                <!-- Left Arrow -->
                <button @click="current = (current === 0) ? images.length - 1 : current - 1"
                        class="absolute top-1/2 left-3 transform -translate-y-1/2 bg-white/70 text-black p-2 rounded-full hover:bg-white transition">
                    &#8592;
                </button>

                <!-- Right Arrow -->
                <button @click="current = (current === images.length - 1) ? 0 : current + 1"
                        class="absolute top-1/2 right-3 transform -translate-y-1/2 bg-white/70 text-black p-2 rounded-full hover:bg-white transition">
                    &#8594;
                </button>
            </div>

                <!-- Grid of Features -->
            <div class="flex justify-center mt-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Gallery Card -->
                    <a href="{{ route('gallery') }}" class="bg-[#14110d] text-white p-5 rounded-lg shadow-md hover:shadow-xl transition duration-300 transform hover:scale-105 active:bg-[#1f1b17]">
                        <h3 class="text-xl font-bold mb-2 text-center" style="font-family: 'Lovelo Juno', sans-serif;">Gallery</h3>
                        <p class="text-sm text-center" style="font-family: 'Fira Code', monospace;">Browse through curated art collections and find inspiration for your next photoshoot.</p>
                    </a>

                    <!-- Booking Card -->
                    <a href="{{ route('booking') }}" class="bg-[#362c24] text-white p-5 rounded-lg shadow-md hover:shadow-xl transition duration-300 transform hover:scale-105 active:bg-[#4a3a2d]">
                        <h3 class="text-xl font-bold mb-2 text-center" style="font-family: 'Lovelo Juno', sans-serif;">Bookings</h3>
                        <p class="text-sm text-center" style="font-family: 'Fira Code', monospace;">Make a booking with your selected photographer. Choose the date and location, and you're all set.</p>
                    </a>

                    <!-- Profile Card -->
                    <a href="{{ route('profile') }}" class="bg-[#f8f5ec] text-gray-800 p-5 rounded-lg shadow-md hover:shadow-xl transition duration-300 transform hover:scale-105 active:bg-[#e2dacc]">
                        <h3 class="text-xl font-bold mb-2 text-center" style="font-family: 'Lovelo Juno', sans-serif;">Profile</h3>
                        <p class="text-sm text-center" style="font-family: 'Fira Code', monospace;">Update your personal details, manage your preferences, and view your past bookings.</p>
                    </a>
                </div>
            </div>

                <!-- Additional Info Section -->

                <div class="mt-8">
                    <h2 class="text-3xl font-semibold text-gray-800" style="font-family: 'Lovelo Juno', sans-serif;">How it works</h2>
                    <p class="text-gray-600 mt-2" style="font-family: 'Fira Code', monospace;">
                        Our platform offers you the opportunity to book top photographers for your next event, project, or photoshoot. Whether you're looking for artistic flair or a professional touch, we have a variety of photographers to choose from. Browse the gallery, make your selection, and let us help bring your vision to life.
                    </p>
                </div>

                <div class="mt-8 p-6 bg-[#f8f5ec] rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold text-gray-800" style="font-family: 'Lovelo Juno', sans-serif;">Need Assistance?</h3>
                    <p class="text-gray-600 mt-2" style="font-family: 'Fira Code', monospace;">
                        If you have any questions or need help navigating the platform, feel free to reach out to our support team. We're here to assist you every step of the way. Whether you need help with your booking, photographer selection, or account settings, we're happy to help.
                    </p>
                </div>
            </div>
        </main>
    </div>
    <!-- Auth Buttons (Design Only) -->
    <div class="fixed bottom-5 right-5 space-x-3" style="font-family: 'Lovelo Juno', sans-serif;">
        <a href="{{ route('login') }}" class="bg-[#14110d] text-white px-5 py-2 rounded-full shadow-md hover:bg-[#362c24] transition duration-300">
            Login
        </a>
        <a href="{{ route('register') }}" class="bg-[#f8f5ec] text-[#14110d] border border-[#14110d] px-5 py-2 rounded-full shadow-md hover:bg-[#ddd4c4] transition duration-300">
            Sign Up
        </a>
    </div>
</body>
</html>
