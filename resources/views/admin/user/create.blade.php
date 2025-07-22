@extends('layout.admin')

@section('title', 'Tambah User')

@section('Section', 'Tambah User')

@section('content')
    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
        <h2 class="text-xl font-semibold mb-6">Tambah User</h2>
        <form action="#" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Username">
                </div>

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Nama Anda">
                </div>

                <div>
                    <label for="tanggal-buat" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Email Anda">
                </div>

                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                    <select id="role" name="role" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 appearance-none">
                        <option value="" disabled selected>Pilih Role</option>
                        <option value="administrator">Administrator</option>
                        <option value="superadmin">Super Admin</option>
                    </select>
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status" name="status" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 appearance-none">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="terverifikasi">Terverifikasi</option>
                        <option value="belum_diverifikasi">Belum Diverifikasi</option>
                    </select>
                </div>

                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                    <input type="file" id="foto" name="foto" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Foto Anda">
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="inline-flex justify-center py-2 px-6 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-colors">
                    Submit
                </button>
            </div>
        </form>
    </div>

    {{-- Debugging --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Get values from the form
                const username = document.getElementById('username').value;
                const nama = document.getElementById('nama').value;
                const email = document.getElementById('email').value;
                const role = document.getElementById('role').value;
                const status = document.getElementById('status').value;
                const foto = document.getElementById('foto').files[0]; // Get the file object

                // Check if all fields have values
                if (!username && !nama && !email && !role && !status && !foto) {
                    alert("Please fill in all fields."); // Show error alert if any field is empty
                } else {
                    alert("Submit Sukses"); // Show success alert
                    console.log("Form submitted successfully!"); // Log success message
                }

                // Log the values to the console (optional)
                console.log('Username:', username);
                console.log('nama:', nama);
                console.log('email:', email);
                console.log('role:', role);
                console.log('Status:', status);
                console.log('Foto:', foto ? foto.name : 'No file selected');

                // You can also perform further actions here, like sending the data to an API
            });
        });
    </script>
@endsection