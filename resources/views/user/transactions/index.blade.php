<x-layouts.user title="Transactions" active="transactions">
    @push('styles')
        @vite('resources/css/pages/transactions.css')
    @endpush

    @push('scripts')
        @vite('resources/js/pages/transactions.js')
    @endpush

    <div class="mb-4">
        <h1 class="h3 fw-bold mb-1">Transactions</h1>
        <p class="text-body-secondary mb-0">Track your borrowing income, spending, and available balance.</p>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="small text-body-secondary">Current Balance</div>
                    <div class="fs-5 fw-bold">Rp 850.000</div>
                    <div class="small text-body-secondary">Available</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="small text-body-secondary">Total Income</div>
                    <div class="fs-5 fw-bold">Rp 1.250.000</div>
                    <div class="small text-body-secondary">From lending</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="small text-body-secondary">Total Spending</div>
                    <div class="fs-5 fw-bold">Rp 400.000</div>
                    <div class="small text-body-secondary">From borrowing</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="small text-body-secondary">Pending</div>
                    <div class="fs-5 fw-bold">Rp 100.000</div>
                    <div class="small text-body-secondary">Awaiting completion</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-12 col-lg-8">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="h6 fw-semibold mb-1">Money Flow</h2>
                    <p class="small text-body-secondary mb-3">Income vs spending</p>
                 
                    <div class="d-flex justify-content-between small mb-1">
                        <span>Income</span>
                        <span class="fw-bold text-primary">Rp 1.250.000</span>
                    </div>
                    <div class="progress mb-3" style="height: 10px;" role="progressbar"
                         aria-label="Income" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-primary" style="width: 100%"></div>
                    </div>

                    <div class="d-flex justify-content-between small mb-1">
                        <span>Spending</span>
                        <span class="fw-bold">Rp 400.000</span>
                    </div>
                    <div class="progress" style="height: 10px;" role="progressbar"
                         aria-label="Spending" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" style="width: 32%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="h6 fw-semibold mb-1">This Month</h2>
                    <p class="small text-body-secondary mb-3">Net balance change</p>

                    <div class="h3 fw-bold text-primary mb-2">+ Rp 850.000</div>
                    <div class="small text-body-secondary mb-3">
                        <div>Income: Rp 1.250.000</div>
                        <div>Spending: Rp 400.000</div>
                    </div>

                    <button type="button" class="btn btn-primary">View Report</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h2 class="h6 fw-semibold mb-3">Transaction History</h2>

            <div class="table-responsive">
                <table class="table trx-table align-middle mb-0">
                    <tbody>
                        <tr>
                            <td class="small text-body-secondary text-nowrap">Oct 03</td>
                            <td><a href="/transactions/128" class="trx-link fw-bold">Lent DSLR Camera</a></td>
                            <td class="text-body-secondary">Income</td>
                            <td class="text-end fw-semibold text-primary text-nowrap">+ Rp 30.000</td>
                        </tr>
                        <tr>
                            <td class="small text-body-secondary text-nowrap">Oct 02</td>
                            <td><a href="/transactions/127" class="trx-link fw-bold">Borrowed Arduino Kit</a></td>
                            <td class="text-body-secondary">Expense</td>
                            <td class="text-end fw-semibold text-danger text-nowrap">- Rp 15.000</td>
                        </tr>
                        <tr>
                            <td class="small text-body-secondary text-nowrap">Sep 30</td>
                            <td><a href="/transactions/126" class="trx-link fw-bold">Lent Graphic Tablet</a></td>
                            <td class="text-body-secondary">Income</td>
                            <td class="text-end fw-semibold text-primary text-nowrap">+ Rp 25.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.user>