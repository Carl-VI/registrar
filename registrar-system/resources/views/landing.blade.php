<!-- resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to City College Registrar</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('citycollege.ico') }}" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glow {
            text-shadow: 0 0 2px #00000066, 0 2px 4px #00000099;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-indigo-200 min-h-screen flex flex-col justify-center items-center text-center px-4">

    <!-- Logo with Extra Space -->
    <img src="{{ asset('/logo/citycollege.png') }}" alt="City College Logo" class="w-36 h-auto mt-12 mb-8">

    <!-- Title with More Spacing -->
    <h1 class="text-5xl font-extrabold text-gray-900 glow mb-6 float">
        Welcome to City College Registrar
    </h1>

    <!-- Promotional Subtitle More Spaced -->
    <p class="text-lg text-gray-700 mb-12 max-w-xl leading-relaxed">
        City College of San Fernando proudly promotes the best quality education in the entire country.
        We are committed to excellence, innovation, and service for every Filipino learner.
    </p>

    <!--  Action Buttons with Space -->
    <div class="flex flex-wrap justify-center gap-6 mb-14">
        <a
            href="{{ route('login') }}"
            class="px-8 py-3 bg-indigo-500 text-white rounded-lg shadow-md text-base font-semibold transition-all hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >
            🚪 Log In
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="px-8 py-3 bg-green-500 text-black rounded-lg shadow-md text-base font-semibold transition-all hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400"
            >
                📝 Register
            </a>
        @endif
    </div>

    <!--  Footer -->
    <footer class="mt-auto mb-6 text-gray-500 text-xs">
        &copy; {{ now()->year }} City College of San Fernando Registrar System
    </footer>

</body>
</html>
