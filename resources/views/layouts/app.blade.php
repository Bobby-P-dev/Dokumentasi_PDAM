<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-6">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ url('/') }}" >
                <img src="{{ asset('images/LOGO-PDAM-copy.png') }}" alt="PDAM" ref="{{ url('/') }}" class="w-11 h-9">
            </a>
            <div class="flex items-center space-x-4 gap-4">
                <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="/register" class="text-gray-700 hover:text-blue-600 ">Register</a>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-gray-700 hover:text-blue-600 bg-transparent border-none p-0 m-0">
                    Logout
                </button>
            </form>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 py-6">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner py-4 mt-8">
        <div class="max-w-7xl mx-auto text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} MyLaravel. All rights reserved.
        </div>
    </footer>

</body>
</html>
