<x-layouts.user title="Borrowing" active="borrowing">
    @push('styles')
        @vite('resources/css/pages/borrowing.css')
    @endpush

    @push('scripts')
        @vite('resources/js/pages/borrowing.js')
    @endpush

    <div class="borrowing-page">

        {{-- Page Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 fw-bold mb-1">Browse & Borrow Items</h1>
                <p class="text-body-secondary mb-0">
                    Find useful items from your campus community.
                </p>
            </div>

            <button type="button" class="btn btn-success">
                + List an Item
            </button>
        </div>

        {{-- Search and Filter --}}
        <div class="borrowing-filters mb-4">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-lg">
                    <input
                        type="search"
                        class="form-control"
                        placeholder="Search cameras, books, laptops..."
                        aria-label="Search items"
                    >
                </div>

                <div class="col-6 col-lg-auto">
                    <select class="form-select" aria-label="Filter category">
                        <option value="">All Categories</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Design">Design</option>
                        <option value="Books">Books</option>
                        <option value="Camera">Camera</option>
                    </select>
                </div>

                <div class="col-6 col-lg-auto">
                    <select class="form-select" aria-label="Filter availability">
                        <option value="">Available now</option>
                        <option value="Available">Available</option>
                        <option value="Booked">Booked</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Recommended Items --}}
        <section class="mb-4">
            <h2 class="h5 fw-bold mb-3">Recommended Items</h2>
            <p class="text-body-secondary small mb-3">
                Borrow from students instead of buying for one-time use.
            </p>

            <div class="borrowing-items-grid">

                {{-- Item Card 1 --}}
                <div>
                    <div class="card h-100 borrowing-item-card">
                        <div class="borrowing-item-image">
                            <img src="/images/Camera.jpg" alt="DSLR Camera">
                        </div>

                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">DSLR Camera</h3>

                            <p class="text-body-secondary small mb-2">
                                Raka Pratama
                            </p>

                            <div class="borrowing-item-footer">
                                <p class="fw-semibold mb-0">
                                    Rp30.000 <span>/ day</span>
                                </p>

                                <span class="borrowing-status-available">
                                    Available
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Item Card 2 --}}
                <div>
                    <div class="card h-100 borrowing-item-card">
                        <div class="borrowing-item-image">
                            <img src="/images/Arduino Starter Kit.jpg" alt="Arduino Starter Kit">
                        </div>

                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">Arduino Starter Kit</h3>

                            <p class="text-body-secondary small mb-2">
                                Nadia Salsabila
                            </p>

                            <div class="borrowing-item-footer">
                                <p class="fw-semibold mb-0">
                                    Rp15.000 <span>/ day</span>
                                </p>

                                <span class="borrowing-status-available">
                                    Available
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Item Card 3 --}}
                <div>
                    <div class="card h-100 borrowing-item-card">
                        <div class="borrowing-item-image">
                            <img src="/images/Graphic Tablet.jpg" alt="Graphic Tablet">
                        </div>

                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">Graphic Tablet</h3>

                            <p class="text-body-secondary small mb-2">
                                Alya Putri
                            </p>

                            <div class="borrowing-item-footer">
                                <p class="fw-semibold mb-0">
                                    Rp25.000 <span>/ day</span>
                                </p>

                                <span class="borrowing-status-booked">
                                    Booked until Oct 2
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card h-100 borrowing-item-card">
                        <div class="borrowing-item-image">
                            <img src="/images/Calculus Textbook.jpg" alt="Calculus Textbook">
                        </div>

                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">Calculus Textbook</h3>

                            <p class="text-body-secondary small mb-2">
                                Dimas Rahman
                            </p>

                            <div class="borrowing-item-footer">
                                <p class="fw-semibold mb-0">
                                    Free <span>/ day</span>
                                </p>

                                <span class="borrowing-status-available">
                                    Available
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 col-xl-4 ms-xl-auto">
                    <section class="card borrowing-active-card">
                        <div class="card-body">
                            <h2 class="h6 fw-bold mb-1">
                                My Active Borrowing
                            </h2>

                            <p class="text-body-secondary small mb-2">
                                2 items currently borrowed
                            </p>

                            <button
                                type="button"
                                class="btn btn-sm borrowing-active-button w-100"
                            >
                                View details
                            </button>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </div>
</x-layouts.user>