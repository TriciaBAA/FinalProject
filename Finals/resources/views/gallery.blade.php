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
        <main class="flex-1 p-10">
            <h2 class="text-4xl font-semibold mb-6" style="font-family: 'Lovelo Juno', sans-serif;">Gallery</h2>
        
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($photographers as $photographer)
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img src="{{ $photographer->image_url }}" alt="{{ $photographer->name }}" class="w-full h-48 object-cover rounded">
                        <h3 class="text-xl mt-4 font-bold" style="font-family: 'Lovelo Juno', sans-serif;">{{ $photographer->name }}</h3>
        
                        <!-- Average Rating -->
                        <div class="flex items-center mt-2">
                            @php
                                $average = $photographer->comments->avg('rating');
                                $fullStars = floor($average);
                                $emptyStars = 5 - $fullStars;
                            @endphp
                            @for ($i = 0; $i < $fullStars; $i++)
                                <span class="text-yellow-500">&#9733;</span>
                            @endfor
                            @for ($i = 0; $i < $emptyStars; $i++)
                                <span class="text-gray-400">&#9733;</span>
                            @endfor
                            <span class="ml-2 text-sm text-gray-600">{{ number_format($average, 1) }}/5</span>
                        </div>
        
                        <!-- Comments -->
                        <div class="mt-3 max-h-32 overflow-y-auto border p-2 rounded-md bg-gray-50">
                            @foreach ($photographer->comments as $comment)
                                <div class="mb-2">
                                    <p class="text-sm"><strong>{{ $comment->name }}</strong>: {{ $comment->comment }}</p>
                                    <div class="flex space-x-1 text-xs text-yellow-500">
                                        @for ($i = 0; $i < $comment->rating; $i++)
                                            &#9733;
                                        @endfor
                                    </div>

                                    <!-- Edit and Delete Buttons -->
                                    <div class="flex space-x-2 mt-2">
                                        <form action="{{ route('gallery.editComment', $comment->id) }}" method="POST" class="w-full">
                                            @csrf
                                            <textarea name="comment" rows="2" class="w-full p-2 border rounded-md text-sm" required>{{ $comment->comment }}</textarea>
                                            <select name="rating" required class="w-full p-2 border rounded-md text-sm">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}" {{ $i == $comment->rating ? 'selected' : '' }}>{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                                                @endfor
                                            </select>
                                            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Update</button>
                                        </form>

                                        <!-- Delete Button -->
                                        <form action="{{ route('gallery.deleteComment', $comment->id) }}" method="POST" class="w-full mt-2">
                                            @csrf
                                            <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Comment Form -->
                        <form action="{{ route('gallery.comment', $photographer->id) }}" method="POST" class="mt-4 space-y-2">
                            @csrf
                            <input type="text" name="name" placeholder="Your Name" required class="w-full p-2 border rounded-md text-sm">
                            <textarea name="comment" rows="2" placeholder="Leave a comment..." class="w-full p-2 border rounded-md text-sm" required></textarea>
                            <select name="rating" required class="w-full p-2 border rounded-md text-sm">
                                <option value="">Rate</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                                @endfor
                            </select>
                            <button class="w-full bg-[#362c24] text-white py-2 rounded-md hover:bg-[#14110d]" style="font-family: 'Lovelo Juno', sans-serif;">Submit</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </main>
        
    </div>
</body>
</html>
