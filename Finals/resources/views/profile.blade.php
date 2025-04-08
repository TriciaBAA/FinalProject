<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
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
                <a href="{{ route('profile') }}" class="block py-2 px-4 rounded hover:bg-blue-700">My Profile</a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-10 overflow-auto">
            <h2 class="text-4xl font-semibold mb-6">My Profile</h2>

            <!-- Check if user is signed in -->
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <!-- If not signed in -->
                <div id="not-signed-in" class="text-center">
                    <h3 class="text-2xl font-medium mb-4">Sign In As:</h3>
                    <div class="flex space-x-4 justify-center">
                        <button class="w-1/2 bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700">Booker</button>
                        <button class="w-1/2 bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700">Photographer</button>
                    </div>
                </div>

                <!-- If signed in -->
                <div id="signed-in" class="hidden">
                    <h3 class="text-2xl font-medium mb-4">Welcome, John Doe</h3>
                    <div class="space-y-4">
                        <p><strong>Role:</strong> Booker</p>
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Location:</strong> Manila, Philippines</p>
                        <p><strong>Joined:</strong> January 2024</p>
                    </div>

                    <button class="w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700 mt-6">Edit Profile</button>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Simulate checking if the user is signed in or not
        const isSignedIn = false;  // Change this to true to simulate a signed-in user

        if (isSignedIn) {
            document.getElementById('not-signed-in').classList.add('hidden');
            document.getElementById('signed-in').classList.remove('hidden');
        } else {
            document.getElementById('not-signed-in').classList.remove('hidden');
            document.getElementById('signed-in').classList.add('hidden');
        }
    </script>
</body>
</html>
