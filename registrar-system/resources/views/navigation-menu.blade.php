<nav x-data="{ open: false }" class="bg-white border-b shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Left Side -->
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-2">
                    <x-application-mark class="block h-10 w-auto" />
                </a>

                <!-- Navigation Links -->
                {{-- <div class="hidden sm:flex space-x-6">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="fas fa-tachometer-alt mr-1"></i> {{ __('Dashboard') }}
                    </x-nav-link>
                    <!-- Add more nav items here -->
                </div> --}}
            </div>

            <!-- Right Side -->
            <div class="hidden sm:flex sm:items-center space-x-4">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-700 hover:text-indigo-500 transition">
                                    {{ Auth::user()->currentTeam->name }}
                                    <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5.5 7l4.5 4.5L14.5 7h-9z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <!-- Content same as before -->
                                ...
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

              <!-- User Dropdown (Enhanced) -->
<div class="relative">
    <x-dropdown align="right" width="64">
        <x-slot name="trigger">
            <button class="flex items-center text-left px-3 py-1 rounded-lg bg-gray-50 border border-gray-200 hover:bg-gray-100 transition-all">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img class="h-10 w-10 rounded-full border-2 border-indigo-500 shadow-md object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                @endif
                <div class="ml-3 hidden sm:flex flex-col items-start">
                    <span class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</span>
                    <span class="text-xs text-gray-500">{{ Auth::user()->email }}</span>
                </div>
                <svg class="ml-3 w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5.5 7l4.5 4.5L14.5 7h-9z" />
                </svg>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link href="{{ route('profile.show') }}">
                👤 {{ __('Profile') }}
            </x-dropdown-link>

            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                    🔐 {{ __('API Tokens') }}
                </x-dropdown-link>
            @endif

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    🚪 {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>


            <!-- Hamburger (Mobile) -->
            <div class="flex items-center sm:hidden">
                <button @click="open = ! open" class="p-2 rounded-md text-gray-500 hover:text-indigo-600 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{ 'block': open, 'hidden': ! open }" class="sm:hidden bg-gray-50">
        <div class="px-4 pt-4 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                📊 {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#" :active="request()->routeIs('documents')">
                📄 {{ __('Document Request') }}
            </x-responsive-nav-link>
        </div>
        <div class="border-t border-gray-200 pt-4 pb-1 px-4">
            <div class="flex items-center space-x-3">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                @endif
                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    👤 {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        🚪 {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
