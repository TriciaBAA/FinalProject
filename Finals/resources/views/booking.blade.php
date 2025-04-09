<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
            <h2 class="text-4xl font-semibold mb-6" style="font-family: 'Lovelo Juno', sans-serif;">Book Your Photographer!</h2>
            <form action="#" method="POST" class="space-y-6 max-w-full mx-auto bg-white p-8 rounded-lg shadow-lg">
                <!-- Photographer Selection -->
                <div class="space-y-2">
                    <label for="photographer" class="block font-medium text-lg" style="font-family: 'Lovelo Juno', sans-serif;">Choose Photographer</label>
                    <select id="photographer" name="photographer" class="w-full p-3 border border-gray-300 rounded-md" style="font-family: 'Fira Code', monospace;">
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
                    <label for="date" class="block font-medium text-lg" style="font-family: 'Lovelo Juno', sans-serif;">Choose Date</label>
                    <input type="date" id="date" name="date" class="w-full p-3 border border-gray-300 rounded-md" required style="font-family: 'Fira Code', monospace;">
                </div>

                <!-- Number of People -->
                <div class="space-y-2">
                    <label for="people" class="block font-medium text-lg" style="font-family: 'Lovelo Juno', sans-serif;">Number of People</label>
                    <input type="number" id="people" name="people" class="w-full p-3 border border-gray-300 rounded-md" min="1" required style="font-family: 'Fira Code', monospace;">
                </div>

                <!-- Special Requests -->
                <div class="space-y-2">
                    <label for="requests" class="block font-medium text-lg" style="font-family: 'Lovelo Juno', sans-serif;">Special Requests</label>
                    <textarea id="requests" name="requests" rows="4" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Any special requests or accommodations?" style="font-family: 'Fira Code', monospace;"></textarea>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-[#362c24] text-white p-3 rounded-md hover:bg-[#14110d]" style="font-family: 'Lovelo Juno', sans-serif;">Book Now</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
