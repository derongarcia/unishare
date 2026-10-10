@props(['active' => ''])

@php
    $menus = [
        ['key' => 'dashboard',    'label' => 'Dashboard',      'route' => 'dashboard'],
        ['key' => 'skills',       'label' => 'Skill Exchange', 'route' => 'skills.index'],
        ['key' => 'borrowing',    'label' => 'Borrowing',      'route' => 'borrowing.index'],
        ['key' => 'transactions', 'label' => 'Transactions',   'route' => 'transactions.index'],
        ['key' => 'profile',      'label' => 'Profile',        'route' => 'profile'],
        ['key' => 'settings',     'label' => 'Settings',       'route' => 'settings.profile'],
    ];

    $userName = auth()->user()?->name ?? 'User';
@endphp

<aside class="sidebar">
    <div class="sidebar-logo">UniShare</div>

    <div class="sidebar-label">Main</div>
    <nav class="sidebar-menu">
        @foreach ($menus as $menu)
            <a href="{{ Route::has($menu['route']) ? route($menu['route']) : '#' }}"
               @class(['sidebar-link', 'active' => $active === $menu['key']])>
                {{ $menu['label'] }}
            </a>
        @endforeach
    </nav>

    <div class="sidebar-account">
        <div class="sidebar-label">Account</div>
        <div class="sidebar-user">
            <span class="sidebar-avatar">{{ strtoupper(substr($userName, 0, 1)) }}</span>
            <div>
                <div class="sidebar-user-name">{{ $userName }}</div>
                <div class="sidebar-user-role">Student</div>
            </div>
        </div>
    </div>
</aside>
