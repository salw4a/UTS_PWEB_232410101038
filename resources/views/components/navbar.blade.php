<nav class="bg-pink-400 text-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="{{ route('dashboard', ['username' => $username]) }}" class="text-white font-bold text-xl">ConcerTrack</a>
            </div>
            <div class="md:hidden">
                <button type="button" class="text-white-700 hover:text-white focus:outline-none focus:text-white" id="mobile-menu-button">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('dashboard', ['username' => $username]) }}" class="{{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white' : 'text-white-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">
                    Dashboard
                </a>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="{{ request()->routeIs('pengelolaan') ? 'bg-gray-900 text-white' : 'text-white-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">
                    Management
                </a>
                <a href="{{ route('profile', ['username' => $username]) }}" class="{{ request()->routeIs('profile') ? 'bg-gray-900 text-white' : 'text-white-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">
                    Profile
                </a>
                <div class="flex items-center ml-4 pl-4 border-l border-gray-700">
                    <span class="text-sm text-white-300">Hello, {{ $username }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden md:hidden bg-white-800" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="{{ request()->routeIs('dashboard') ? 'bg-white-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
                Dashboard
            </a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="{{ request()->routeIs('pengelolaan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
                Pengelolaan
            </a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="{{ request()->routeIs('profile') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
                Profile
            </a>
            <div class="flex items-center px-3 py-2">
                <span class="text-sm text-gray-300">Halo, {{ $username }}</span>
            </div>
        </div>
    </div>
</nav>
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
