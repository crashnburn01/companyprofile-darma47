<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
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
        html {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        body {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar w-64 bg-gray-600 text-white h-screen fixed shadow-lg">
            <div class="p-4 flex items-center justify-between border-b border-gray-500">
                <div class="flex items-center">
                    <img src="" alt="" class="rounded">
                    <span class="logo-text ml-3 font-bold text-xl">Admin Panel</span>
                </div>
                <button id="toggle-sidebar" class="p-1 rounded-lg hover:bg-gray-700">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <div class="p-4 pt-6">
                <!-- User Profile -->
                <div class="flex items-center mb-8">
                    <img src="" alt="" class="rounded-full border-2 border-white">
                    <div class="ml-3">
                        <p class="font-semibold">Admin User</p>
                        <p class="text-gray-200 text-sm">Administrator</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-gray-400 text-white' : 'hover:bg-gray-400' }}">
                            <i class="fas fa-tachometer-alt w-6"></i>
                            <span class="nav-text ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tes') }}" class="flex items-center p-2 rounded-lg transition-colors {{ request()->routeIs('tes') ? 'bg-gray-400 text-white' : 'hover:bg-gray-400' }}">
                            <i class="fas fa-users w-6"></i>
                            <span class="nav-text ml-3">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-400 transition-colors">
                            <i class="fas fa-shopping-cart w-6"></i>
                            <span class="nav-text ml-3">Products</span>
                            <span class="ml-auto bg-blue-600 text-xs px-2 py-1 rounded-full">15</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-400 transition-colors">
                            <i class="fas fa-chart-line w-6"></i>
                            <span class="nav-text ml-3">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-400 transition-colors">
                            <i class="fas fa-envelope w-6"></i>
                            <span class="nav-text ml-3">Messages</span>
                            <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-400 transition-colors">
                            <i class="fas fa-cog w-6"></i>
                            <span class="nav-text ml-3">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="absolute bottom-0 w-full p-4 border-t border-gray-500">
                <a href="{{ route('home') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-700">
                    <i class="fas fa-sign-out-alt w-6"></i>
                    <span class="nav-text ml-3">Logout</span>
                </a>
            </div>
        </div>
        
        <!-- Main Content -->
        <div id="main-content" class="main-content ml-64 flex-1 min-h-screen">
            <!-- Header -->
            <header class="bg-white shadow-sm p-4 flex items-center justify-between">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button id="notifications-btn" class="p-2 rounded-full hover:bg-gray-200 relative">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                        </button>
                        <div id="notifications-dropdown" class="hidden absolute right-0 mt-2 w-72 bg-white shadow-lg rounded-lg z-50 border border-gray-200 py-1">
                            <div class="px-4 py-2 border-b border-gray-200">
                                <p class="font-semibold">Notifications</p>
                            </div>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">New user registered</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Order #1234 completed</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">System update scheduled</a>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <button id="profile-btn" class="flex items-center space-x-2">
                            <img src="" alt="" class="rounded-full">
                            <span class="hidden md:inline mr-4">Admin</span>
                            <i class="fas fa-chevron-down text-xs mr-3"></i>
                        </button>
                        <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg z-50 border border-gray-200 py-1">
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Settings</a>
                            <div class="border-t border-gray-200"></div>
                            <a href="{{ route('home') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="p-6">
                @yield('content')
            </main>
            
            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 p-4">
                <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                    <p class="text-sm text-gray-500">© {{ date('Y') }} CV DARMA 47. All rights reserved.</p>
                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="#" class="text-gray-800 hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-800 hover:text-gray-700"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-800 hover:text-gray-700"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-800 hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
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

