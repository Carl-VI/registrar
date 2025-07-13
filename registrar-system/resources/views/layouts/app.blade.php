<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/citycollege.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100">

    <x-banner />
    @livewire('navigation-menu')

    <!-- ✅ Flex container with sidebar on the right -->
    <div class="min-h-screen flex flex-row-reverse">

        <!-- ✅ Elegant Sidebar on the Right -->
        <aside class="w-64 bg-white shadow-lg border-l px-6 py-8">
            <h2 class="text-2xl font-bold text-black mb-6 border-b pb-3">REGISTRAR</h2>

            <nav class="flex flex-col gap-4">
               <a href="{{ route('dashboard') }}"
                class="block px-5 py-3 bg-indigo-600 text-white rounded-lg font-medium shadow hover:bg-indigo-700 transition duration-200">
                    🏠 Dashboard
               <a href="{{ route('document.request') }}"
                class="block px-5 py-3 bg-indigo-600 text-white rounded-lg font-medium shadow hover:bg-indigo-700 transition duration-200">
                    📄 Document Request
                </a>
                <a href="{{ route('approval') }}"
                class="block px-5 py-3 bg-indigo-600 text-white rounded-lg font-medium shadow hover:bg-indigo-700 transition duration-200">
                    📋 Approval
                </a>
                <a href="{{ route('settings') }}"
                class="block px-5 py-3 bg-indigo-600 text-white rounded-lg font-medium shadow hover:bg-indigo-700 transition duration-200">
                    ⚙️ Settings
                </a>

            </nav>
        </aside>

        <!-- ✅ Main Content -->
        <div class="flex-1 p-6">
            @if (isset($header))
                <header class="bg-white shadow mb-6">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>

    </div>

    @stack('modals')
    @livewireScripts
</body>
</html>
