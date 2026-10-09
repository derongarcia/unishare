{{--
    Layout utama halaman user.
    Cara pakai:
        <x-layouts.user title="Dashboard" active="dashboard">
            ...isi halaman...
        </x-layouts.user>
--}}
@props([
    'title' => 'UniShare',
    'active' => '',   // menu sidebar yang sedang aktif, contoh: 'dashboard'
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} · UniShare</title>
    @vite(['resources/css/unishare.css', 'resources/js/unishare.js'])
</head>
<body>
    <div class="app">
        <x-user.sidebar :active="$active" />

        {{-- Latar gelap saat sidebar dibuka di HP, klik untuk menutup --}}
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <div class="content">
            {{-- Topbar hanya muncul di layar kecil --}}
            <header class="topbar">
                <button type="button" class="menu-toggle" data-sidebar-toggle aria-label="Buka menu">☰</button>
                <span class="sidebar-logo">UniShare</span>
            </header>

            <main class="main">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
