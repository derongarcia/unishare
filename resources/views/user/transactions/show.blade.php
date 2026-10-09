<x-layouts.user title="Transaction Detail" active="transactions">
    @php
        // ============================================================
        // DATA DUMMY (sementara). Nanti diambil dari tabel
        // `transactions` + `borrow_requests` berdasarkan ID di URL.
        // ============================================================
        $transaction = [
            'code'     => 'TRX-' . str_pad($id, 5, '0', STR_PAD_LEFT),
            'type'     => 'Borrowing',
            'item'     => 'DSLR Camera',
            'status'   => 'completed',
            'amount'   => 30000,
        ];

        $breakdown = [
            'borrowing_fee' => 30000,
            'platform_fee'  => 0,
            'deposit'       => 100000,
        ];
        $totalPaid = array_sum($breakdown);

        $statuses = [
            ['label' => 'Payment',         'status' => 'completed'],
            ['label' => 'Borrowing',       'status' => 'completed'],
            ['label' => 'Return',          'status' => 'completed'],
            ['label' => 'Income released', 'status' => 'completed'],
        ];

        $timeline = [
            ['label' => 'Requested',       'done' => true],
            ['label' => 'Approved',        'done' => true],
            ['label' => 'Paid',            'done' => true],
            ['label' => 'Borrowed',        'done' => true],
            ['label' => 'Returned',        'done' => true],
            ['label' => 'Income released', 'done' => true],
        ];

        $rupiah = fn ($amount) => 'Rp ' . number_format($amount, 0, ',', '.');
    @endphp

    <a href="{{ route('preview.transactions') }}" class="back-link">Back to transactions</a>

    <div class="page-header">
        <h1 class="page-title">Transaction Detail</h1>
        <p class="page-subtitle">Review the money flow and status of one borrowing transaction.</p>
    </div>

    {{-- Ringkasan transaksi --}}
    <div class="card detail-summary" style="margin-bottom: 20px;">
        <div>
            <h2 class="card-title">{{ $transaction['type'] }} • {{ $transaction['item'] }}</h2>
            <div class="text-small text-muted">{{ $transaction['code'] }}</div>
        </div>
        <div>
            <div class="status {{ $transaction['status'] }}">{{ ucfirst($transaction['status']) }}</div>
            <div class="detail-amount">{{ $rupiah($transaction['amount']) }}</div>
        </div>
    </div>

    <div class="grid grid-main-side">
        {{-- Rincian uang --}}
        <x-ui.card title="Money Breakdown">
            <div class="breakdown-row">
                <span class="text-muted">Borrowing fee</span>
                <span class="fw-bold">{{ $rupiah($breakdown['borrowing_fee']) }}</span>
            </div>
            <div class="breakdown-row">
                <span class="text-muted">Platform fee</span>
                <span class="fw-bold">{{ $rupiah($breakdown['platform_fee']) }}</span>
            </div>
            <div class="breakdown-row">
                <span class="text-muted">Deposit</span>
                <span class="fw-bold">{{ $rupiah($breakdown['deposit']) }}</span>
            </div>
            <div class="breakdown-row total">
                <span>Total paid</span>
                <span>{{ $rupiah($totalPaid) }}</span>
            </div>
        </x-ui.card>

        {{-- Status tiap tahap --}}
        <x-ui.card>
            @foreach ($statuses as $item)
                <div class="status-item">
                    <div class="status-item-label">{{ $item['label'] }}</div>
                    <div class="status {{ $item['status'] }}">{{ ucfirst($item['status']) }}</div>
                </div>
            @endforeach
        </x-ui.card>
    </div>

    {{-- Alur transaksi --}}
    <section>
        <h2 class="card-title">Transaction Timeline</h2>
        <ol class="timeline">
            @foreach ($timeline as $step)
                <li @class(['timeline-step', 'done' => $step['done']])>{{ $step['label'] }}</li>
            @endforeach
        </ol>
    </section>
</x-layouts.user>
