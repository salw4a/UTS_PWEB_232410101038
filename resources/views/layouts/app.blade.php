<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Concert Schedules Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#4f46e5',
                        dark: '#1e293b'
                    }
                }
            }
        }
    </script>
    @yield('styles')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <x-navbar :username="$username ?? 'Guest'" />
    <div class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </div>
    <x-footer />
    @yield('scripts')
</body>
</html>
