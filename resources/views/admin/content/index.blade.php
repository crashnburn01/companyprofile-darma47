@extends('layout.admin')

@section('title', 'Tes Page')

@section('Section', 'User Management')

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Daftar Content</h2>
            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">+ Tambah Content</button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tgl Buat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">#USR-001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex items-center">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a2b5e6d2-3c32-4ea0-b967-4fc7e45b1ca7.png" alt="Headshot of middle-aged male customer with glasses" class="h-8 w-8 rounded-full mr-2">
                                <span>John Doe</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">23 Mei 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Terverifikasi</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                            <a href="#" class="text-blue-600 hover:text-blue-800">View</a>
                            <a href="#" class="text-yellow-600 hover:text-yellow-800 ml-2">Update</a>
                            <a href="#" class="text-red-600 hover:text-red-800 ml-2">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection