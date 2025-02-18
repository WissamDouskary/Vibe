<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe - Register</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
        <!-- Logo and Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-blue-600">Vibe</h1>
            <p class="text-gray-600 mt-2">Create your account</p>
        </div>

            
        
        <!-- Registration Form -->
        <form class="space-y-6" action="{{ url('/users') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Username Field -->
            <div>
                <label class="block text-gray-700 mb-2" for="username">Username</label>
                <input 
                    type="text" 
                    id="username"
                    name="username"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    placeholder="Choose a username"
                >
            </div>
            @error('username')

            <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded-lg shadow-md max-w-md">
                <p class="text-sm font-semibold">{{$message}}</p>
            </div>

            @enderror

            <!-- Profile Photo Field -->
            <div>
                <label class="block text-gray-700 mb-2" for="profile_photo">Profile Photo</label>
                <input 
                    type="file" 
                    id="profile_photo"
                    name="profile_photo"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg"
                    placeholder="Choose a profile photo"
                >
            </div>

            @error('profile_photo')

            <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded-lg shadow-md max-w-md">
                <p class="text-sm font-semibold">{{$message}}</p>
            </div>

            @enderror

            <!-- Email Field -->
            <div>
                <label class="block text-gray-700 mb-2" for="email">Email</label>
                <input 
                    type="email" 
                    id="email"
                    name="email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    placeholder="Enter your email"
                >
            </div>
            
            @error('email')

            <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded-lg shadow-md max-w-md">
                <p class="text-sm font-semibold">{{$message}}</p>
            </div>

            @enderror
            <!-- Password Field -->
            <div>
                <label class="block text-gray-700 mb-2" for="password">Password</label>
                <input 
                    type="password" 
                    id="password"
                    name="password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    placeholder="Create a password"
                >
                <p class="text-sm text-gray-500 mt-2">Password must be at least 8 characters long</p>
            </div>

            @error('password')

            <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded-lg shadow-md max-w-md">
                <p class="text-sm font-semibold">{{$message}}</p>
            </div>

            @enderror

            <!-- Password Field -->
            <div>
                <label class="block text-gray-700 mb-2" for="password">Confirme Password</label>
                <input 
                    type="password" 
                    id="password"
                    name="password_confirmation"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    placeholder="Confirme Password"
                >
            </div>
            
            @error('password_confirmation')

            <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded-lg shadow-md max-w-md">
                <p class="text-sm font-semibold">{{$message}}</p>
            </div>

            @enderror
            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-medium"
            >
                Create Account
            </button>
        </form>
        
        <!-- Login Link -->
        <p class="text-center mt-6 text-gray-600">
            Already have an account? 
            <a href="{{ url('Auth/Login') }}" class="text-blue-600 hover:underline font-medium">Sign In</a>
        </p>
    </div>
</body>
</html>