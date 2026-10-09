<x-layouts.user title="Dashboard" active="dashboard">
    @php
        // ============================================================
        // DATA DUMMY (sementara). Saat tahap backend, data ini akan
        // dikirim dari controller/Livewire dan blok @php ini dihapus.
        // ============================================================
        $userName = auth()->user()?->name ?? 'User';

        $hour = now('Asia/Jakarta')->hour;
        $greeting = match (true) {
            $hour < 11 => 'Good morning',
            $hour < 15 => 'Good afternoon',
            $hour < 19 => 'Good evening',
            default    => 'Good night',
        };

        $stats = [
            ['label' => 'Skill Exchanges', 'value' => 8,          'caption' => 'active'],
            ['label' => 'Borrowed Items',  'value' => 3,          'caption' => 'currently'],
            ['label' => 'This Month',      'value' => 'Rp 180K',  'caption' => 'expenses'],
        ];

        $skills = [
            ['name' => 'UI/UX Design',    'note' => 'Looking for mentor'],
            ['name' => 'Python',          'note' => 'Can teach beginners'],
            ['name' => 'Public Speaking', 'note' => 'Looking for practice partner'],
        ];

        $borrowings = [
            ['name' => 'DSLR Camera', 'due' => 'Tomorrow', 'due_soon' => true],
            ['name' => 'Arduino Kit', 'due' => 'Oct 2',    'due_soon' => false],
        ];

        $activities = [
            ['title' => 'Skill exchange request accepted', 'detail' => 'Python with Andi',       'time' => '2 hours ago', 'color' => 'success'],
            ['title' => 'Item borrowed',                   'detail' => 'DSLR Camera from Raka', 'time' => 'Yesterday',   'color' => 'warning'],
            ['title' => 'Expense recorded',                'detail' => 'Rp 70.000',             'time' => '2 days ago',  'color' => 'warning'],
        ];
    @endphp

    {{-- Sapaan --}}
    <section class="greeting">
        <span class="avatar avatar-square">{{ strtoupper(substr($userName, 0, 1)) }}</span>
        <div>
            <h1 class="greeting-title">{{ $greeting }}, {{ $userName }}!</h1>
            <p class="greeting-subtitle">Here's what's happening in your campus community.</p>
        </div>
    </section>

    {{-- Ringkasan angka --}}
    <div class="grid grid-3">
        @foreach ($stats as $stat)
            <x-ui.stat-card :label="$stat['label']" :value="$stat['value']" :caption="$stat['caption']" />
        @endforeach
    </div>

    <div class="grid grid-main-side">
        {{-- Skill Exchange --}}
        <x-ui.card title="Skill Exchange" subtitle="Find students who can teach what you want to learn.">
            <div class="list-rows">
                @foreach ($skills as $skill)
                    <div class="list-row">
                        <span class="list-row-title">{{ $skill['name'] }}</span>
                        <span class="list-row-note">{{ $skill['note'] }}</span>
                    </div>
                @endforeach
            </div>
        </x-ui.card>

        {{-- Peminjaman --}}
        @php $dueSoonCount = collect($borrowings)->where('due_soon', true)->count(); @endphp
        <x-ui.card title="Your Borrowing" subtitle="{{ $dueSoonCount }} {{ Str::plural('item', $dueSoonCount) }} due soon">
            @foreach ($borrowings as $item)
                <div @class(['borrow-item', 'due-soon' => $item['due_soon']])>
                    <div class="borrow-item-name">{{ $item['name'] }}</div>
                    <div @class(['text-small', 'text-success' => $item['due_soon'], 'text-muted' => ! $item['due_soon']])>
                        {{ $item['due'] }}
                    </div>
                </div>
            @endforeach
        </x-ui.card>
    </div>

    {{-- Aktivitas terbaru --}}
    <x-ui.card title="Recent Activity">
        <ul class="activity-list">
            @foreach ($activities as $activity)
                <li class="activity">
                    <span class="activity-dot {{ $activity['color'] }}"></span>
                    <div class="activity-body">
                        <div class="activity-title">{{ $activity['title'] }}</div>
                        <div class="text-small text-muted">{{ $activity['detail'] }}</div>
                    </div>
                    <span class="activity-time">{{ $activity['time'] }}</span>
                </li>
            @endforeach
        </ul>
    </x-ui.card>
</x-layouts.user>
