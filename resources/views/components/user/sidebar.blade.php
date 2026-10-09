@props(['active' => ''])

@php
    // 'route' = nama route tujuan. Jika route belum dibuat, link menjadi "#".
    // Nama route sementara (preview.*) akan diganti saat tahap routes.
    $menus = [
        ['key' => 'dashboard',    'label' => 'Dashboard',      'route' => 'preview.dashboard'],
        ['key' => 'skills',       'label' => 'Skill Exchange', 'route' => null],
        ['key' => 'borrowing',    'label' => 'Borrowing',      'route' => null],
        ['key' => 'transactions', 'label' => 'Transactions',   'route' => 'preview.transactions'],
        ['key' => 'profile',      'label' => 'Profile',        'route' => null],
        ['key' => 'settings',     'label' => 'Settings',       'route' => 'settings.profile'],
    ];

    // Sebelum backend jadi, halaman bisa dibuka tanpa login, jadi pakai nama dummy
    $userName = auth()->user()?->name ?? 'User';
@endphp

<aside class="sidebar">
    <div class="sidebar-logo">UniShare</div>

    <div class="sidebar-label">Main</div>
    <nav class="sidebar-menu">
        @foreach ($menus as $menu)
            <a href="{{ $menu['route'] && Route::has($menu['route']) ? route($menu['route']) : '#' }}"
               @class(['sidebar-link', 'active' => $active === $menu['key']])>
                {{ $menu['label'] }}
            </a>
        @endforeach
    </nav>

    <div class="sidebar-account">
        <div class="sidebar-label">Account</div>
        <div class="account">
            <span class="avatar">{{ strtoupper(substr($userName, 0, 1)) }}</span>
            <div>
                <div class="account-name">{{ $userName }}</div>
                <div class="account-role">Student</div>
            </div>
        </div>
    </div>
</aside>
