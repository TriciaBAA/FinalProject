@extends('layouts.app')
<link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lovelo+Juno&display=swap" rel="stylesheet">
@vite('resources/css/app.css')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#f8f5ec]">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-center text-3xl font-semibold text-[#14110d] mb-8" style="font-family: 'Lovelo Juno', sans-serif;">Reset Password</h2>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Hidden Token -->
            <input type="hidden" name="token" value="{{ $token }}">

            <!-- Email Input -->
            <div class="mb-6">
                <label for="email" class="block text-sm text-[#14110d]">Email Address</label>
                <input id="email" type="email" class="w-full p-3 border border-gray-300 rounded-md @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-sm text-[#14110d]">Password</label>
                <input id="password" type="password" class="w-full p-3 border border-gray-300 rounded-md @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password Input -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm text-[#14110d]">Confirm Password</label>
                <input id="password_confirmation" type="password" class="w-full p-3 border border-gray-300 rounded-md" name="password_confirmation" required autocomplete="new-password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-[#bbafa1] text-white p-3 rounded-md hover:bg-[#a99e91] transition">
                Reset Password
            </button>
        </form>
    </div>
</div>
@endsection
