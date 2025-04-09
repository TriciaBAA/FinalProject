@extends('layouts.app')
<link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lovelo+Juno&display=swap" rel="stylesheet">
@vite('resources/css/app.css')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#f8f5ec]">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-center text-3xl font-semibold text-[#14110d] mb-8" style="font-family: 'Lovelo Juno', sans-serif;">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Input -->
            <div class="mb-6">
                <label for="email" class="block text-sm text-[#14110d]" style="font-family: 'Fira Code', monospace;">Email Address</label>
                <input id="email" type="email" class="w-full p-3 border border-gray-300 rounded-md @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-sm text-[#14110d]" style="font-family: 'Fira Code', monospace;">Password</label>
                <input id="password" type="password" class="w-full p-3 border border-gray-300 rounded-md @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me Checkbox -->
            <div class="mb-6 flex items-center">
                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="h-4 w-4 text-[#14110d] focus:ring-[#362c24] border-gray-300 rounded">
                <label for="remember" class="ml-2 text-[#14110d] text-sm" style="font-family: 'Fira Code', monospace;">Remember Me</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-[#bbafa1] text-white p-3 rounded-md hover:bg-[#14110d] transition" style="font-family: 'Lovelo Juno', sans-serif;">
                Login
            </button>

            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <div class="mt-4 text-center">
                    <a href="{{ route('password.request') }}" class="text-sm text-[#362c24] hover:underline" style="font-family: 'Fira Code', monospace;">
                        Forgot Your Password?
                    </a>
                </div>
                <div class="mt-4 text-center">
                    <span class="text-sm text-[#14110d]" style="font-family: 'Fira Code', monospace;">No account yet?</span>
                    <a href="{{ route('register') }}" class="ml-2 inline-block bg-[#362c24] text-white px-4 py-2 rounded hover:bg-[#14110d] transition" style="font-family: 'Lovelo Juno', sans-serif;">
                        Sign Up
                    </a>
                </div>
                
            @endif
        </form>
    </div>
</div>
@endsection
