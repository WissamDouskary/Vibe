<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe - Login</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
        <!-- Logo and Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-blue-600">Vibe</h1>
            <p class="text-gray-600 mt-2">Welcome back!</p>
        </div>
        
        <!-- Login Form -->
        <form class="space-y-6">
            <!-- Email Field -->
            <div>
                <label class="block text-gray-700 mb-2" for="email">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    placeholder="Enter your email"
                    required
                >
            </div>
            
            <!-- Password Field -->
            <div>
                <div class="flex justify-between mb-2">
                    <label class="text-gray-700" for="password">Password</label>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Forgot password?</a>
                </div>
                <input 
                    type="password" 
                    id="password" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    placeholder="Enter your password"
                    required
                >
            </div>
            
            <!-- Remember Me Checkbox -->
            <div class="flex items-center">
                <input 
                    type="checkbox" 
                    id="remember" 
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                >
                <label class="ml-2 text-gray-600" for="remember">
                    Remember me
                </label>
            </div>
            
            <!-- Login Button -->
            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-medium"
            >
                Sign In
            </button>
        </form>
        
        <!-- Register Link -->
        <p class="text-center mt-6 text-gray-600">
            Don't have an account? 
            <a href="{{ url('Auth/register') }}" class="text-blue-600 hover:underline font-medium">Sign up</a>
        </p>
    </div>
</body>
</html>