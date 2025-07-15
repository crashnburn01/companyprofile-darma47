<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login')</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/heros-bg-section.jpg') }}') no-repeat center center;
            background-size: cover;
        }
        .bg-gradient {
            background: linear-gradient(135deg, #c4c8ce 0%, #4c515a 100%);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <div class="bg-gradient py-6 px-8 text-center">
                <h1 class="text-2xl font-bold text-white">Selamat Datang</h1>
                <p class="text-gray-50 mt-1">Sign in to your account</p>
            </div>

            <div class="p-8">
                <form>
                    <!-- Floating Username -->
                    <div class="relative w-full mb-6">
                        <input 
                            type="text" 
                            id="username"
                            required
                            class="peer w-full p-2 pl-3 text-black text-base bg-transparent outline-none border-l-2 border-b-2 border-black transition duration-100 rounded-bl-lg"
                        />
                        <label 
                            for="username"
                            class="absolute left-0 mt-1 ml-2 p-2 text-xs text-black uppercase tracking-widest transition-all duration-500 rounded-lg
                            peer-focus:translate-x-[280px] peer-focus:-translate-y-3.5 peer-focus:text-white peer-focus:bg-gray-400 peer-focus:text-[0.8em]
                            peer-valid:translate-x-[280px] peer-valid:-translate-y-3.5 peer-valid:text-white peer-valid:bg-gray-400 peer-valid:text-[0.8em]">
                            Username
                        </label>
                    </div>

                    <!-- Floating Password -->
                    <div class="relative w-full mb-6">
                        <input 
                            type="password" 
                            id="password"
                            required
                            class="peer w-full p-2 pl-3 text-black text-base bg-transparent outline-none border-l-2 border-b-2 border-black transition duration-100 rounded-bl-lg"
                        />
                        <label 
                            for="password"
                            class="absolute left-0 mt-1 ml-2 p-2 text-xs text-black uppercase tracking-widest transition-all duration-500 rounded-lg
                            peer-focus:translate-x-[280px] peer-focus:-translate-y-3.5 peer-focus:text-white peer-focus:bg-gray-400 peer-focus:text-[0.8em]
                            peer-valid:translate-x-[280px] peer-valid:-translate-y-3.5 peer-valid:text-white peer-valid:bg-gray-400 peer-valid:text-[0.8em]">
                            Password
                        </label>
                        <div class="flex justify-end mt-3">
                            <a href="#" class="text-sm text-gray-600 hover:text-gray-500">Forgot password?</a>
                        </div>
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-gray-400 text-white py-2 px-4 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-150">
                        Sign In
                    </button>
                </form>

                <!-- Back to home button -->
                <a href="{{ url('/') }}" class="fixed top-6 left-6 z-50 bg-gray-600 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 transition"
                    aria-label="Kembali ke Home">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>

                <!-- Register link -->
                <div class="mt-6 text-center">
                    <p class="text-gray-600">Don't have an account? 
                        <a href="#" class="text-gray-600 hover:text-gray-500 font-medium">Register</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-6 text-center text-gray-50 text-xs">
            <p>&copy; {{ date('Y') }} CV DARMA 47. All rights reserved.</p>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if(username && password) {
                alert('Login successful! (This is a demo)');
            }
        });
    </script>
</body>
</html>
