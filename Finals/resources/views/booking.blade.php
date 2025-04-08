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

        <!-- Main content -->
        <main class="flex-1 p-10 overflow-auto">
            <h2 class="text-4xl font-semibold mb-6">Book Your Photographer!</h2>
            <form action="#" method="POST" class="space-y-6 max-w-full mx-auto bg-white p-8 rounded-lg shadow-lg">
                <!-- Photographer Selection -->
                <div class="space-y-2">
                    <label for="photographer" class="block font-medium text-lg">Choose Photographer</label>
                    <select id="photographer" name="photographer" class="w-full p-3 border border-gray-300 rounded-md">
                        <option value="">Select a Photographer</option>
                        <option value="1">Photographer 1</option>
                        <option value="2">Photographer 2</option>
                        <option value="3">Photographer 3</option>
                        <option value="4">Photographer 4</option>
                        <option value="5">Photographer 5</option>
                        <option value="6">Photographer 6</option>
                        <option value="7">Photographer 7</option>
                        <option value="8">Photographer 8</option>
                    </select>
                </div>

                <!-- Date Selection -->
                <div class="space-y-2">
                    <label for="date" class="block font-medium text-lg">Choose Date</label>
                    <input type="date" id="date" name="date" class="w-full p-3 border border-gray-300 rounded-md" required>
                </div>

                <!-- Number of People -->
                <div class="space-y-2">
                    <label for="people" class="block font-medium text-lg">Number of People</label>
                    <input type="number" id="people" name="people" class="w-full p-3 border border-gray-300 rounded-md" min="1" required>
                </div>

                <!-- Special Requests -->
                <div class="space-y-2">
                    <label for="requests" class="block font-medium text-lg">Special Requests</label>
                    <textarea id="requests" name="requests" rows="4" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Any special requests or accommodations?"></textarea>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700">Book Now</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
