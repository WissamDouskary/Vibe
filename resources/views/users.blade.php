<x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Users') }}
                </h2>
            </x-slot>

            <div class="mb-4 p-4">
                <div class="relative">
                    <input type="text" placeholder="Search users..." class="w-full pl-10 pr-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" />
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    </div>
                </div>
            </div>

            <ul class="space-y-6 px-4">
                <li class="flex items-center space-x-4 bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="s">
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">John Doe</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">@johndoe</p>
                    </div>
                </li>
                <li class="flex items-center space-x-4 bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="s">
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Jane Smith</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">@janesmith</p>
                    </div>
                </li>
                <li class="flex items-center space-x-4 bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="s">
                    </div>
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Bob Johnson</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">@bobjohnson</p>
                    </div>
                </li>
            </ul>
</x-app-layout>