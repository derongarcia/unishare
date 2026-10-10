@props([
    'title' => 'UniShare',
    'active' => '',
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} · UniShare</title>

    @vite(['resources/css/layout.css', 'resources/js/layout.js'])

    @stack('styles')
</head>
<body>
    <div class="layout-app">
        <x-user.sidebar :active="$active" />

        <div class="layout-backdrop" data-sidebar-close></div>

        <div class="layout-content">
            <header class="layout-topbar">
                <button type="button" class="layout-menu-toggle" data-sidebar-toggle aria-label="Buka menu">☰</button>
                <span class="sidebar-logo">UniShare</span>
            </header>

            <main class="layout-main">
                {{ $slot }}
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
