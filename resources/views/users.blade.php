<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg overflow-hidden">
                <div class="p-6">
                    <!-- New User Button -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">User List</h3>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 dark:bg-blue-500 text-white dark:text-gray-200 rounded-lg shadow hover:bg-blue-700 focus:outline-none">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                            New User
                        </a>
                    </div>

                    <!-- Table -->
                    <table class="min-w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700 text-left text-sm leading-normal">
                                <th class="px-6 py-3 text-gray-600 dark:text-gray-300 font-semibold">Profile</th>
                                <th class="px-6 py-3 text-gray-600 dark:text-gray-300 font-semibold">Name</th>
                                <th class="px-6 py-3 text-gray-600 dark:text-gray-300 font-semibold">Email</th>
                                <th class="px-6 py-3 text-gray-600 dark:text-gray-300 font-semibold">Date Created</th>
                                <th class="px-6 py-3 text-gray-600 dark:text-gray-300 font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 dark:text-gray-200 text-sm font-light">
                            <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                                <td class="px-6 py-4">
                                    <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/100" alt="User Profile">
                                </td>
                                <td class="px-6 py-4">John Doe</td>
                                <td class="px-6 py-4">john.doe@example.com</td>
                                <td class="px-6 py-4">2024-09-26</td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <!-- Edit Icon -->
                                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M16.586 3.414a2 2 0 112.828 2.828L11 14l-4 1 1-4 7.586-7.586z" />
                                        </svg>
                                    </a>
                                    <!-- Delete Icon -->
                                    <a href="#" class="text-red-600 dark:text-red-400 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M4 7h16M10 7V4a1 1 0 011-1h2a1 1 0 011 1v3" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                                <td class="px-6 py-4">
                                    <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/100" alt="User Profile">
                                </td>
                                <td class="px-6 py-4">Jane Smith</td>
                                <td class="px-6 py-4">jane.smith@example.com</td>
                                <td class="px-6 py-4">2024-08-19</td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <!-- Edit Icon -->
                                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M16.586 3.414a2 2 0 112.828 2.828L11 14l-4 1 1-4 7.586-7.586z" />
                                        </svg>
                                    </a>
                                    <!-- Delete Icon -->
                                    <a href="#" class="text-red-600 dark:text-red-400 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M4 7h16M10 7V4a1 1 0 011-1h2a1 1 0 011 1v3" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
