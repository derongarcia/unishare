<x-layouts.user title="Transactions" active="transactions">
    @php
        // ============================================================
        // DATA DUMMY (sementara). Nanti diganti data dari tabel
        // `transactions` yang dikirim oleh controller/Livewire.
        // Nominal disimpan sebagai angka (integer Rupiah).
        // ============================================================
        $summary = [
            'balance'  => 850000,
            'income'   => 1250000,
            'spending' => 400000,
            'pending'  => 100000,
        ];

        $thisMonth = [
            'income'   => 1250000,
            'spending' => 400000,
        ];
        $netChange = $thisMonth['income'] - $thisMonth['spending'];

        // Lebar progress bar: dibandingkan dengan nilai terbesar
        $maxFlow = max($summary['income'], $summary['spending'], 1);
        $incomePercent = round($summary['income'] / $maxFlow * 100);
        $spendingPercent = round($summary['spending'] / $maxFlow * 100);

        $transactions = [
            ['id' => 128, 'date' => 'Oct 03', 'title' => 'Lent DSLR Camera',     'type' => 'Income',  'direction' => 'in',  'amount' => 30000],
            ['id' => 127, 'date' => 'Oct 02', 'title' => 'Borrowed Arduino Kit', 'type' => 'Expense', 'direction' => 'out', 'amount' => 15000],
            ['id' => 126, 'date' => 'Sep 30', 'title' => 'Lent Graphic Tablet',  'type' => 'Income',  'direction' => 'in',  'amount' => 25000],
        ];

        // Fungsi kecil untuk format Rupiah: 850000 -> "Rp 850.000"
        $rupiah = fn ($amount) => 'Rp ' . number_format($amount, 0, ',', '.');
    @endphp

    <div class="page-header">
        <h1 class="page-title">Transactions</h1>
        <p class="page-subtitle">Track your borrowing income, spending, and available balance.</p>
    </div>

    {{-- Ringkasan saldo --}}
    <div class="grid grid-4">
        <x-ui.stat-card label="Current Balance" :value="$rupiah($summary['balance'])" caption="Available" />
        <x-ui.stat-card label="Total Income" :value="$rupiah($summary['income'])" caption="From lending" />
        <x-ui.stat-card label="Total Spending" :value="$rupiah($summary['spending'])" caption="From borrowing" />
        <x-ui.stat-card label="Pending" :value="$rupiah($summary['pending'])" caption="Awaiting completion" />
    </div>

    <div class="grid grid-main-side">
        {{-- Perbandingan pemasukan & pengeluaran --}}
        <x-ui.card title="Money Flow" subtitle="Income vs spending">
            <div class="flow-row">
                <div class="flow-label">
                    <span>Income</span>
                    <span class="fw-bold text-success">{{ $rupiah($summary['income']) }}</span>
                </div>
                <div class="progress">
                    <div class="progress-bar income" style="width: {{ $incomePercent }}%"></div>
                </div>
            </div>

            <div class="flow-row">
                <div class="flow-label">
                    <span>Spending</span>
                    <span class="fw-bold">{{ $rupiah($summary['spending']) }}</span>
                </div>
                <div class="progress">
                    <div class="progress-bar spending" style="width: {{ $spendingPercent }}%"></div>
                </div>
            </div>
        </x-ui.card>

        {{-- Ringkasan bulan ini --}}
        <x-ui.card title="This Month" subtitle="Net balance change">
            <div class="net-change">{{ $netChange >= 0 ? '+' : '-' }} {{ $rupiah(abs($netChange)) }}</div>
            <div class="month-detail">
                <div>Income: {{ $rupiah($thisMonth['income']) }}</div>
                <div>Spending: {{ $rupiah($thisMonth['spending']) }}</div>
            </div>
            {{-- Halaman report belum dibuat --}}
            <button type="button" class="btn btn-primary">View Report</button>
        </x-ui.card>
    </div>

    {{-- Riwayat transaksi: klik judul untuk melihat detail --}}
    <x-ui.card title="Transaction History">
        <div class="table-wrapper">
            <table class="table">
                <tbody>
                    @forelse ($transactions as $trx)
                        <tr>
                            <td class="text-muted text-small">{{ $trx['date'] }}</td>
                            <td>
                                <a href="{{ route('preview.transactions.show', $trx['id']) }}" class="fw-bold">
                                    {{ $trx['title'] }}
                                </a>
                            </td>
                            <td class="text-muted">{{ $trx['type'] }}</td>
                            <td class="amount {{ $trx['direction'] }}">
                                {{ $trx['direction'] === 'in' ? '+' : '-' }} {{ $rupiah($trx['amount']) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-muted">Belum ada transaksi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-ui.card>
</x-layouts.user>
