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
        .login-card {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .bg-gradient {
            background: linear-gradient(135deg, #c4c8ce 0%, #4c515a 100%);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="login-card bg-white rounded-lg overflow-hidden shadow-md">
            <div class="bg-gradient py-6 px-8 text-center">
                <h1 class="text-2xl font-bold text-white">Selamat Datang</h1>
                <p class="text-gray-50 mt-1">Sign in to your account</p>
            </div>
            
            <div class="p-8">
                <form>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                            placeholder="you@example.com"
                            required>
                    </div>
                    
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                            placeholder="Enter your password"
                            required>
                        <div class="flex justify-end mt-1">
                            <a href="#" class="text-sm text-gray-600 hover:text-gray-500">Forgot password?</a>
                        </div>
                    </div>
                    
                    <button 
                        type="submit"
                        class="w-full bg-gray-400 text-white py-2 px-4 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-150">
                        Sign In
                    </button>
                </form>
                
                <div class="mt-6 text-center">
                    <p class="text-gray-600">Don't have an account? 
                        <a href="#" class="text-gray-600 hover:text-gray-500 font-medium">Register</a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="mt-6 text-center text-gray-50 text-xs">
            <p>&copy; {{ date('Y') }} CV DARMA 47. All rights reserved.</p>
        </div>
    </div>
    
    <script>
        // Simple form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if(email && password) {
                alert('Login successful! (This is a demo)');
                // In a real app, you would send data to server here
            }
        });
    </script>
</body>
</html>

