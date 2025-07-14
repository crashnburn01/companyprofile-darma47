@extends('layout.admin')

@section('title', 'Dashboard')

@section('content')
    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="card bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Users</p>
                    <p class="text-2xl font-bold">1,256</p>
                </div>
                <div class="p-3 rounded-lg bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> 12% from last month</p>
        </div>

        <div class="card bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Revenue</p>
                    <p class="text-2xl font-bold">$48,256</p>
                </div>
                <div class="p-3 rounded-lg bg-green-100 text-green-600">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
            <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> 24% from last month</p>
        </div>

        <div class="card bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">New Orders</p>
                    <p class="text-2xl font-bold">156</p>
                </div>
                <div class="p-3 rounded-lg bg-purple-100 text-purple-600">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
            <p class="text-red-500 text-sm mt-2"><i class="fas fa-arrow-down"></i> 5% from last month</p>
        </div>

        <div class="card bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Active Projects</p>
                    <p class="text-2xl font-bold">24</p>
                </div>
                <div class="p-3 rounded-lg bg-yellow-100 text-yellow-600">
                    <i class="fas fa-project-diagram"></i>
                </div>
            </div>
            <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> 8% from last month</p>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Recent Orders</h2>
            <button class="text-blue-600 text-sm font-medium">View All</button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">#ORD-001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex items-center">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a2b5e6d2-3c32-4ea0-b967-4fc7e45b1ca7.png" alt="Headshot of middle-aged male customer with glasses" class="h-8 w-8 rounded-full mr-2">
                                <span>John Doe</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 15, 2023</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$125.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">View</a>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 14, 2023</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$89.99</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Processing</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">View</a>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 13, 2023</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">$215.50</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Shipped</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Recent Activities and Statistics Chart -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-xl font-semibold mb-6">Recent Activities</h2>
            <div class="space-y-4">
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-blue-100 text-blue-600 p-2 rounded-full">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm"><span class="font-medium">John Doe</span> has registered an account</p>
                        <p class="text-xs text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-green-100 text-green-600 p-2 rounded-full">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm"><span class="font-medium">Order #ORD-004</span> has been placed</p>
                        <p class="text-xs text-gray-500">4 hours ago</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-purple-100 text-purple-600 p-2 rounded-full">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm">New support ticket from <span class="font-medium">Jane Smith</span></p>
                        <p class="text-xs text-gray-500">1 day ago</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <div class="bg-yellow-100 text-yellow-600 p-2 rounded-full">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm">New invoice generated for <span class="font-medium">Robert Johnson</span></p>
                        <p class="text-xs text-gray-500">2 days ago</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold">Statistics</h2>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-xs bg-gray-600 text-white rounded">Week</button>
                    <button class="px-3 py-1 text-xs bg-gray-200 text-gray-700 rounded">Month</button>
                    <button class="px-3 py-1 text-xs bg-gray-200 text-gray-700 rounded">Year</button>
                </div>
            </div>
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b996e9e7-b46e-4a87-b232-ee9a1592c94c.png" alt="Line chart showing dashboard statistics with blue and green lines representing user growth and revenue" class="w-full">
        </div>
    </div>
@endsection