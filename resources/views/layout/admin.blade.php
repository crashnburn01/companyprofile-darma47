<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }
        .sidebar-collapsed {
            width: 80px !important;
        }
        .sidebar-collapsed .nav-text {
            display: none;
        }
        .sidebar-collapsed .logo-text {
            display: none;
        }
        .main-content {
            transition: margin-left 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        .dark .dropdown-menu {
            background-color: #1a202c;
            border-color: #2d3748;
        }
        .dark .dropdown-menu a:hover {
            background-color: #2d3748;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar w-64 bg-blue-800 text-white h-screen fixed shadow-lg">
            <div class="p-4 flex items-center justify-between border-b border-blue-700">
                <div class="flex items-center">
                    <img src="" alt="" class="rounded">
                    <span class="logo-text ml-3 font-bold text-xl">AdminPanel</span>
                </div>
                <button id="toggle-sidebar" class="p-1 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <div class="p-4 pt-6">
                <!-- User Profile -->
                <div class="flex items-center mb-8">
                    <img src="" alt="" class="rounded-full border-2 border-white">
                    <div class="ml-3">
                        <p class="font-semibold">Admin User</p>
                        <p class="text-blue-200 text-sm">Administrator</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg bg-blue-700">
                            <i class="fas fa-tachometer-alt w-6"></i>
                            <span class="nav-text ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-users w-6"></i>
                            <span class="nav-text ml-3">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-shopping-cart w-6"></i>
                            <span class="nav-text ml-3">Products</span>
                            <span class="ml-auto bg-blue-600 text-xs px-2 py-1 rounded-full">15</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-chart-line w-6"></i>
                            <span class="nav-text ml-3">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-envelope w-6"></i>
                            <span class="nav-text ml-3">Messages</span>
                            <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-cog w-6"></i>
                            <span class="nav-text ml-3">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="absolute bottom-0 w-full p-4 border-t border-blue-700">
                <a href="#" class="flex items-center p-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-sign-out-alt w-6"></i>
                    <span class="nav-text ml-3">Logout</span>
                </a>
            </div>
        </div>
        
        <!-- Main Content -->
        <div id="main-content" class="main-content ml-64 flex-1 min-h-screen">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 shadow-sm p-4 flex items-center justify-between">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <button id="dark-mode-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
                        <i id="dark-mode-icon" class="fas fa-moon"></i>
                    </button>
                    
                    <div class="relative">
                        <button id="notifications-btn" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 relative">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                        </button>
                        <div id="notifications-dropdown" class="hidden absolute right-0 mt-2 w-72 bg-white dark:bg-gray-800 shadow-lg rounded-lg z-50 border border-gray-200 dark:border-gray-700 py-1">
                            <div class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">
                                <p class="font-semibold">Notifications</p>
                            </div>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">New user registered</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Order #1234 completed</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">System update scheduled</a>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <button id="profile-btn" class="flex items-center space-x-2">
                            <img src="" alt="" class="rounded-full">
                            <span class="hidden md:inline">Admin</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-lg z-50 border border-gray-200 dark:border-gray-700 py-1">
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
                            <div class="border-t border-gray-200 dark:border-gray-700"></div>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="p-6">
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="card bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">Total Users</p>
                                <p class="text-2xl font-bold">1,256</p>
                            </div>
                            <div class="p-3 rounded-lg bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> 12% from last month</p>
                    </div>
                    
                    <div class="card bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">Total Revenue</p>
                                <p class="text-2xl font-bold">$48,256</p>
                            </div>
                            <div class="p-3 rounded-lg bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> 24% from last month</p>
                    </div>
                    
                    <div class="card bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">New Orders</p>
                                <p class="text-2xl font-bold">156</p>
                            </div>
                            <div class="p-3 rounded-lg bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <p class="text-red-500 text-sm mt-2"><i class="fas fa-arrow-down"></i> 5% from last month</p>
                    </div>
                    
                    <div class="card bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">Active Projects</p>
                                <p class="text-2xl font-bold">24</p>
                            </div>
                            <div class="p-3 rounded-lg bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-300">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                        </div>
                        <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> 8% from last month</p>
                    </div>
                </div>
                
                <!-- Recent Orders -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Recent Orders</h2>
                        <button class="text-blue-600 dark:text-blue-400 text-sm font-medium">View All</button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Customer</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Amount</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">#ORD-001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex items-center">
                                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a2b5e6d2-3c32-4ea0-b967-4fc7e45b1ca7.png" alt="Headshot of middle-aged male customer with glasses" class="h-8 w-8 rounded-full mr-2">
                                            <span>John Doe</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">May 15, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$125.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-300">Completed</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">#ORD-002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex items-center">
                                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0b46a509-c570-430d-8719-f55e53e51f5f.png" alt="Headshot of young female customer with blonde hair" class="h-8 w-8 rounded-full mr-2">
                                            <span>Jane Smith</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">May 14, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$89.99</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-300">Processing</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">#ORD-003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex items-center">
                                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a101b9d0-c8b2-4bdf-b19c-2869a2cf635b.png" alt="Headshot of older male customer with gray hair" class="h-8 w-8 rounded-full mr-2">
                                            <span>Robert Johnson</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">May 13, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$215.50</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300">Shipped</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Recent Activities and Statistics Chart -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                        <h2 class="text-xl font-semibold mb-6">Recent Activities</h2>
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 p-2 rounded-full">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm"><span class="font-medium">John Doe</span> has registered an account</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 p-2 rounded-full">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm"><span class="font-medium">Order #ORD-004</span> has been placed</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">4 hours ago</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 p-2 rounded-full">
                                        <i class="fas fa-ticket-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm">New support ticket from <span class="font-medium">Jane Smith</span></p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">1 day ago</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-300 p-2 rounded-full">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm">New invoice generated for <span class="font-medium">Robert Johnson</span></p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold">Statistics</h2>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-xs bg-blue-600 dark:bg-blue-700 text-white rounded">Week</button>
                                <button class="px-3 py-1 text-xs bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded">Month</button>
                                <button class="px-3 py-1 text-xs bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded">Year</button>
                            </div>
                        </div>
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b996e9e7-b46e-4a87-b232-ee9a1592c94c.png" alt="Line chart showing dashboard statistics with blue and green lines representing user growth and revenue" class="w-full">
                    </div>
                </div>
            </main>
            
            <!-- Footer -->
            <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 p-4">
                <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                    <p class="text-sm text-gray-500 dark:text-gray-400">© 2023 AdminPanel. All rights reserved.</p>
                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script>
        // Toggle Sidebar
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            
            sidebar.classList.toggle('sidebar-collapsed');
            mainContent.classList.toggle('ml-64');
            mainContent.classList.toggle('ml-20');
        });
        
        // Dark Mode Toggle
        document.getElementById('dark-mode-toggle').addEventListener('click', function() {
            const htmlElement = document.querySelector('html');
            const icon = document.getElementById('dark-mode-icon');
            
            htmlElement.classList.toggle('dark');
            
            if (htmlElement.classList.contains('dark')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });
        
        // Dropdown Menus
        document.addEventListener('DOMContentLoaded', function() {
            // Notifications dropdown
            const notificationsBtn = document.getElementById('notifications-btn');
            const notificationsDropdown = document.getElementById('notifications-dropdown');
            
            notificationsBtn.addEventListener('click', function() {
                notificationsDropdown.classList.toggle('hidden');
            });
            
            // Profile dropdown
            const profileBtn = document.getElementById('profile-btn');
            const profileDropdown = document.getElementById('profile-dropdown');
            
            profileBtn.addEventListener('click', function() {
                profileDropdown.classList.toggle('hidden');
            });
            
            // Close dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                if (!notificationsBtn.contains(e.target) && !notificationsDropdown.contains(e.target)) {
                    notificationsDropdown.classList.add('hidden');
                }
                
                if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
                    profileDropdown.classList.add('hidden');
                }
            });
        });
        
        // Responsive adjustments
        function handleResize() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            
            if (window.innerWidth < 768) {
                sidebar.classList.add('sidebar-collapsed');
                mainContent.classList.remove('ml-64');
                mainContent.classList.add('ml-20');
            } else {
                sidebar.classList.remove('sidebar-collapsed');
                mainContent.classList.add('ml-64');
                mainContent.classList.remove('ml-20');
            }
        }
        
        window.addEventListener('resize', handleResize);
        handleResize(); // Run once on load
    </script>
</body>
</html>

