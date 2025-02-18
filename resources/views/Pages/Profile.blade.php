<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe - Profile View</title>
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
                
                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl mx-8">
                    <div class="relative">
                        <input 
                            type="search" 
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Search users by username or email..."
                        >
                    </div>
                </div>

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
                        <a href="{{url('profile')}}" class="block px-4 py-2 text-sm text-gray-700">Account Details</a>
                        <a href="{{url('/')}}" class="block px-4 py-2 text-sm text-gray-700">Modify Account</a>
                        <a href="{{url('Auth/Login')}}" class="block px-4 py-2 text-sm text-gray-700">Logout</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Profile Header -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-6">
            <div class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
                <!-- Profile Picture -->
                <div class="relative">
                    <img src="/api/placeholder/160/160" alt="Profile picture" class="w-40 h-40 rounded-full object-cover">
                    <div class="absolute bottom-2 right-2 w-4 h-4 bg-green-400 rounded-full border-2 border-white"></div>
                </div>
                
                <!-- Profile Info -->
                <div class="flex-1 text-center sm:text-left">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800">John Doe</h1>
                            <p class="text-gray-600">@johndoe</p>
                        </div>
                        <button class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 border border-blue-600 rounded-lg text-blue-600 hover:bg-blue-50 transition duration-200">
                            Edit Profile
                        </button>
                    </div>
                    <p class="mt-4 text-gray-700 max-w-2xl">
                        Frontend developer passionate about creating beautiful user interfaces. Always learning and exploring new technologies.
                    </p>
                </div>
            </div>
        </div>

        <!-- Profile Details -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-xl font-bold text-gray-800 mb-6">Profile Information</h2>
            
            <!-- Information Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Personal Information -->
                <div class="space-y-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Full Name</h3>
                        <p class="mt-1 text-gray-800">John Doe</p>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Username</h3>
                        <p class="mt-1 text-gray-800">@johndoe</p>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Email</h3>
                        <p class="mt-1 text-gray-800">john.doe@example.com</p>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 mt-1">
                            Verified
                        </span>
                    </div>
                </div>

                <!-- Account Information -->
                <div class="space-y-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Member Since</h3>
                        <p class="mt-1 text-gray-800">January 15, 2024</p>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Account Status</h3>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mt-1">
                            Active
                        </span>
                    </div>
                </div>
            </div>

            <!-- Security Section -->
            <div class="mt-8 pt-8 border-t border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Security</h2>
                
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Password</h3>
                            <p class="mt-1 text-gray-800">Last changed 30 days ago</p>
                        </div>
                        <button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition duration-200">
                            Change Password
                        </button>
                    </div>
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