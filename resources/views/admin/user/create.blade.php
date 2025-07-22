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
                    <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                    <input type="text" id="id" name="id" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="">
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="title" name="title" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Judul Content">
                </div>

                <div>
                    <label for="tanggal-buat" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Tanggal Buat">
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
                    <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" id="gambar" name="gambar" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Judul Content">
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
                const id = document.getElementById('id').value;
                const title = document.getElementById('title').value;
                const tanggal = document.getElementById('tanggal').value;
                const status = document.getElementById('status').value;
                const gambar = document.getElementById('gambar').files[0]; // Get the file object

                // Check if all fields have values
                if (id && title && tanggal && status && gambar) {
                    alert("Submit Sukses"); // Show success alert
                } else {
                    alert("Please fill in all fields."); // Show error alert if any field is empty
                }

                // Log the values to the console (optional)
                console.log('ID:', id);
                console.log('Title:', title);
                console.log('Tanggal Dibuat:', tanggal);
                console.log('Status:', status);
                console.log('Gambar:', gambar ? gambar.name : 'No file selected');

                // You can also perform further actions here, like sending the data to an API
            });
        });
    </script>
@endsection