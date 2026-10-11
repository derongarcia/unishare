<x-layouts.user title="Dashboard" active="dashboard">
    @push('styles')
        @vite('resources/css/pages/dashboard.css')
    @endpush

    @push('scripts')
        @vite('resources/js/pages/dashboard.js')
    @endpush

    <section class="dash-greeting d-flex align-items-center gap-3 mb-4">
        <span class="dash-avatar">U</span>
        <div>
            <!-- Teks sapaan diisi oleh dashboard.js sesuai jam -->
            <h1 class="h4 fw-bold mb-0">
                <span id="greeting">Hello</span>, User!
            </h1>
            <p class="small text-body-secondary mb-0">Here's what's happening in your campus community.</p>
        </div>
    </section>

    <div class="row g-3 mb-3">
        <div class="col-12 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="small text-body-secondary">Skill Exchanges</div>
                    <div class="fs-4 fw-bold">8</div>
                    <div class="small text-body-secondary">active</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="small text-body-secondary">Borrowed Items</div>
                    <div class="fs-4 fw-bold">3</div>
                    <div class="small text-body-secondary">currently</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="small text-body-secondary">This Month</div>
                    <div class="fs-4 fw-bold">Rp 180K</div>
                    <div class="small text-body-secondary">expenses</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-12 col-lg-8">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="h6 fw-semibold mb-1">Skill Exchange</h2>
                    <p class="small text-body-secondary mb-3">Find students who can teach what you want to learn.</p>

                    <div class="d-flex flex-column gap-2">
                        <div class="dash-skill-row row g-0 rounded px-3 py-2">
                            <div class="col-sm-5 fw-semibold">UI/UX Design</div>
                            <div class="col-sm-7 small text-primary">Looking for mentor</div>
                        </div>
                        <div class="dash-skill-row row g-0 rounded px-3 py-2">
                            <div class="col-sm-5 fw-semibold">Python</div>
                            <div class="col-sm-7 small text-primary">Can teach beginners</div>
                        </div>
                        <div class="dash-skill-row row g-0 rounded px-3 py-2">
                            <div class="col-sm-5 fw-semibold">Public Speaking</div>
                            <div class="col-sm-7 small text-primary">Looking for practice partner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="h6 fw-semibold mb-1">Your Borrowing</h2>
                    <p class="small text-body-secondary mb-3">1 item due soon</p>

                    <!-- Hampir jatuh tempo: latar kuning -->
                    <div class="rounded px-3 py-2 mb-2 bg-warning-subtle">
                        <div class="fw-semibold">DSLR Camera</div>
                        <div class="small text-primary">Tomorrow</div>
                    </div>

                    <div class="rounded px-3 py-2 mb-2">
                        <div class="fw-semibold">Arduino Kit</div>
                        <div class="small text-body-secondary">Oct 2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Aktivitas terbaru -->
    <div class="card">
        <div class="card-body">
            <h2 class="h6 fw-semibold mb-2">Recent Activity</h2>

            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-start gap-3 py-2">
                    <span class="dash-dot rounded-circle flex-shrink-0 mt-2 bg-primary"></span>
                    <div class="flex-grow-1">
                        <div class="fw-medium">Skill exchange request accepted</div>
                        <div class="small text-body-secondary">Python with Andi</div>
                    </div>
                    <span class="small text-body-secondary text-nowrap">2 hours ago</span>
                </li>

                <li class="d-flex align-items-start gap-3 py-2">
                    <span class="dash-dot rounded-circle flex-shrink-0 mt-2 bg-warning"></span>
                    <div class="flex-grow-1">
                        <div class="fw-medium">Item borrowed</div>
                        <div class="small text-body-secondary">DSLR Camera from Raka</div>
                    </div>
                    <span class="small text-body-secondary text-nowrap">Yesterday</span>
                </li>

                <li class="d-flex align-items-start gap-3 py-2">
                    <span class="dash-dot rounded-circle flex-shrink-0 mt-2 bg-warning"></span>
                    <div class="flex-grow-1">
                        <div class="fw-medium">Expense recorded</div>
                        <div class="small text-body-secondary">Rp 70.000</div>
                    </div>
                    <span class="small text-body-secondary text-nowrap">2 days ago</span>
                </li>
            </ul>
        </div>
    </div>

</x-layouts.user>
