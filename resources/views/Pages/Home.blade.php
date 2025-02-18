<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe - Home</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-blue-600">Vibe</h1>
                </div>
                
                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <a href=""><button class="text-black px-4 py-2 border border-1 rounded-lg transition duration-200 cursor-pointer">
                        Login
                    </button></a>
                    <a href="Auth/register"><button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200 cursor-pointer">
                        SignUp
                    </button></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Vibe</h2>
                <p class="text-gray-600 mb-8">Connect with others and manage your profile easily.</p>
                
                <!-- Main Search Bar -->
                <div class="relative max-w-2xl mx-auto">
                    <input 
                        type="search" 
                        class="w-full px-6 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg"
                        placeholder="Search users by username or email..."
                    >
                    <button class="absolute right-3 top-3 text-gray-400 hover:text-blue-600">
                        <!-- Search Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Recent Users Section -->
        <div class="mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-6">Recent Users</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- User Cards -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/64/64" alt="User" class="w-16 h-16 rounded-full">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Sarah Johnson</h4>
                            <p class="text-gray-600">@sarahj</p>
                            <div class="mt-2">
                                <a href="#" class="text-blue-600 hover:underline text-sm">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/64/64" alt="User" class="w-16 h-16 rounded-full">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Michael Chen</h4>
                            <p class="text-gray-600">@mikechen</p>
                            <div class="mt-2">
                                <a href="#" class="text-blue-600 hover:underline text-sm">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/64/64" alt="User" class="w-16 h-16 rounded-full">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Emma Wilson</h4>
                            <p class="text-gray-600">@emmaw</p>
                            <div class="mt-2">
                                <a href="#" class="text-blue-600 hover:underline text-sm">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Profile Settings Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Profile Settings</h3>
                        <p class="text-gray-600 mt-1">Update your profile information</p>
                    </div>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                        Edit Profile
                    </button>
                </div>
            </div>

            <!-- Security Settings Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Security</h3>
                        <p class="text-gray-600 mt-1">Manage your account security</p>
                    </div>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                        Settings
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>