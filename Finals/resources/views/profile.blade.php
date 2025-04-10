<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lovelo+Juno&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#f8f5ec] h-screen flex flex-col justify-between">

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
    <main class="flex-grow p-10 flex flex-col justify-center items-center">
        <h2 class="text-4xl font-semibold text-center text-[#14110d] mb-8" style="font-family: 'Lovelo Juno', sans-serif;">
            My Profile
        </h2>

        <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-md text-center" style="font-family: 'Lovelo Juno', sans-serif;">

            <!-- Name Section -->
            <div class="mb-6">
                <label for="name" class="block text-[#14110d] font-medium text-lg">Name</label>
                <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="w-full mt-2 p-3 rounded-md border border-[#e2e2e2] focus:outline-none focus:ring-2 focus:ring-[#bbafa1]">
            </div>

            <!-- Bio Section -->
            <div class="mb-6">
                <label for="bio" class="block text-[#14110d] font-medium text-lg">Bio</label>
                <textarea id="bio" name="bio" rows="4" class="w-full mt-2 p-3 rounded-md border border-[#e2e2e2] focus:outline-none focus:ring-2 focus:ring-[#bbafa1]">{{ auth()->user()->bio }}</textarea>
            </div>

            <!-- Preferences Section -->
            <div class="mb-6">
                <label for="preferences" class="block text-[#14110d] font-medium text-lg">Preferences</label>
                <input type="text" id="preferences" name="preferences" value="{{ auth()->user()->preferences }}" class="w-full mt-2 p-3 rounded-md border border-[#e2e2e2] focus:outline-none focus:ring-2 focus:ring-[#bbafa1]">
            </div>

            <!-- Update Button -->
            <button type="submit" class="w-full bg-[#bbafa1] text-white p-3 rounded-md hover:bg-[#a99e91] transition">
                Update Profile
            </button>

            <!-- Bookings Section -->
            <div class="mt-8">
                <h3 class="text-2xl font-semibold text-[#14110d] mb-4" style="font-family: 'Lovelo Juno', sans-serif;">
                    My Bookings
                </h3>

                @if($bookings->isEmpty())
                    <p class="text-lg text-gray-500">You have no bookings yet.</p>
                @else
                    <ul class="space-y-4">
                        @foreach($bookings as $booking)
                            <li class="bg-white p-4 rounded-lg shadow-md">
                                <h4 class="text-xl font-medium text-[#14110d]">{{ $booking->photographer->name }} - {{ $booking->museum->name }}</h4>
                                <p class="text-sm text-gray-500">Date: {{ $booking->date->format('F j, Y') }}</p>
                                <p class="text-sm text-gray-500">Number of People: {{ $booking->number_of_people }}</p>
                                <p class="text-sm text-gray-500">Special Requests: {{ $booking->special_requests ?? 'None' }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif  
            </div>

            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="w-full bg-[#362c24] text-white p-3 rounded-md hover:bg-[#14110d] transition">
                    Logout
                </button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-[#14110d] text-white p-4 text-center">
        <p>&copy; 2025 Frame Finders. All rights reserved.</p>
    </footer>

</body>
</html>
