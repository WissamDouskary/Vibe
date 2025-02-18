<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe - Home</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen">


    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-blue-600">Vibe</h1>
                </div>
                @auth
                <div class="relative inline-block text-left">
                    <div>
                      <button type="button" id="menu-button" aria-expanded="false" aria-haspopup="true"
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50">
                        Options
                        <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                  
                    <div id="menu-dropdown"
                      class="hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white ring-1 shadow-lg ring-black/5 focus:outline-hidden"
                      role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                      <div class="py-1" role="none">
                        <a href="{{url('/')}}" class="block px-4 py-2 text-sm text-gray-700">Home</a>
                        <a href="{{url('profile')}}" class="block px-4 py-2 text-sm text-gray-700">Account Details</a>
                        <form class="inline" action="/logout" method="post">
                            @csrf
                            <input type="submit" class="block px-4 py-2 text-sm text-gray-700 cursor-pointer" value="Logout">
                        </form>
                      </div>
                    </div>
                  </div>
                @else
                    <!-- User Menu -->
                    <div class="flex items-center space-x-4">
                        <a href=""><button class="text-black px-4 py-2 border border-1 rounded-lg transition duration-200 cursor-pointer">
                            Login
                        </button></a>
                        <a href="Auth/register"><button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200 cursor-pointer">
                            SignUp
                        </button></a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

        <!-- Navigation Bar -->
    @if(session('status'))
    <div x-data="{ open: true }" x-show="open" class="bg-green-500 text-white p-4 rounded-md shadow-md relative absolute z-50">
            <button @click="open = false" class="absolute top-2 right-2 text-white">
                &times;
            </button>
            {{ session('status') }}
        </div>
    @endif

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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuButton = document.getElementById("menu-button");
            const menuDropdown = document.getElementById("menu-dropdown");
        
            menuButton.addEventListener("click", function (event) {
                event.stopPropagation();
                const isExpanded = menuButton.getAttribute("aria-expanded") === "true";
                menuButton.setAttribute("aria-expanded", !isExpanded);
                menuDropdown.classList.toggle("hidden");
            });
        
            document.addEventListener("click", function (event) {
                if (!menuButton.contains(event.target) && !menuDropdown.contains(event.target)) {
                    menuButton.setAttribute("aria-expanded", "false");
                    menuDropdown.classList.add("hidden");
                }
            });
        });
        
            </script>
</body>
</html>