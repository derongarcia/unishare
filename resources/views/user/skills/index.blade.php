<x-layouts.user title="Skill Exchange" active="skills">
    @push('styles')
        @vite('resources/css/pages/skills.css')
    @endpush

    @push('scripts')
        @vite('resources/js/pages/skills.js')
    @endpush

    <div class="container-fluid px-3 px-lg-4 py-4 skills-page">
        <header class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
            <div>
                <h1 class="h3 fw-bold mb-2">Exchange Your Skills</h1>
                <p class="text-secondary mb-0">
                    Teach what you know and find someone who can teach you.
                </p>
            </div>

            <div class="flex-shrink-0">
                <a href="{{route('skills.add')}}" class="btn btn-add px-4 py-3">
                    + Add Your Skill
                </a>
            </div>
        </header>

        <main>
            <section class="mb-5" aria-label="Search and filter skills">
                <form action="{{ route('skills.index') }}" method="GET" class="row g-3 search-form">
                    <div class="col-12 col-md-6 col-lg-7">
                        <label for="skill-search" class="visually-hidden">
                            Search skills or students
                        </label>

                        <input 
                            type="search" 
                            id="skill-search"
                            name="search"
                            class="form-control form-control-lg"
                            placeholder="Search skills or students..."
                            value="{{ request('search') }}"
                        >
                    </div>

                    <div class="col-6 col-md-3 col-lg-3">
                        <label for="skill-filter" class="visually-hidden">
                            Filter by skill
                        </label>

                        <select id="skill-filter" name="skill" class="form-select form-select-lg">
                            <option value="">All Skills</option>
                            <option value="uiux">
                                UI/UX Design
                            </option>
                            <option value="python">
                                Python
                            </option>
                            <option value="photography">
                                Photography
                            </option>
                        </select>
                    </div>

                    <div class="col-6 col-md-3 col-lg-2">
                        <label for="skill-sort" class="visually-hidden">
                            Sort recommendations
                        </label>

                        <select id="skill-sort" name="sort" class="form-select form-select-lg">
                            <option value="match">
                                Best Match
                            </option>
                            <option value="newest">
                                Newest
                            </option>
                        </select>
                    </div>
                </form>
            </section>

            <section class="mb-5" aria-labelledby="recommendations-title">
                <header class="mb-4">
                    <h2 id="recommendations-title" class="h5 fw-bold mb-2">
                        Best matches for you
                    </h2>
                    <p class="text-secondary medium mb-0">
                        People who match your learning goals
                    </p>
                </header>

                @php
                    $students = [
                        [
                            'initials' => 'AP',
                            'name' => 'Alya Putri',
                            'teach' => 'UI/UX Design',
                            'learn' => 'Python',
                            'match' => 92,
                            'avatar' => 'avatar-green',
                        ],
                        [
                            'initials' => 'RP',
                            'name' => 'Raka Pratama',
                            'teach' => 'Python',
                            'learn' => 'Public Speaking',
                            'match' => 87,
                            'avatar' => 'avatar-yellow',
                        ],
                        [
                            'initials' => 'NS',
                            'name' => 'Nadia Salsabila',
                            'teach' => 'Photography',
                            'learn' => 'Video Editing',
                            'match' => 81,
                            'avatar' => 'avatar-green',
                        ],
                    ];
                @endphp

                <div class="d-flex flex-column gap-3 student-list">
                    @foreach ($students as $student)
                        <article class="card border-0 shadow-sm rounded-4 student-card">
                            <div class="card-body p-3 p-lg-4">
                                <div class="row align-items-center g-4">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="student-avatar {{ $student['avatar'] }}" aria-hidden="true">
                                                {{ $student['initials'] }}
                                            </div>

                                            <div>
                                                <h3 class="h6 fw-bold mb-1">
                                                    {{ $student['name'] }}
                                                </h3>
                                                <p class="text-secondary small mb-0">
                                                    Can Share
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="d-flex flex-wrap align-items-center gap-3">
                                            <span class="badge rounded-2 skill-teach px-3 py-2">
                                                {{ $student['teach'] }}
                                            </span>

                                            <span class="text-secondary small">
                                                Looking For
                                            </span>

                                            <span class="badge rounded-2 skill-learn px-3 py-2">
                                                {{ $student['learn'] }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="d-flex flex-column flex-sm-row justify-content-lg-end align-items-sm-center gap-4">
                                            <p class="text-success fw-semibold small mb-0">
                                                <data value="{{ $student['match'] }}">
                                                    {{ $student['match'] }}%
                                                </data>
                                                Match
                                            </p>

                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-outline-success btn-sm px-3 py-2">
                                                    View Profile
                                                </a>

                                                <a href="{{ route('skills.exchange') }}" class="btn btn-success btn-sm px-3 py-2">
                                                    Request
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section aria-labelledby="my-skills-title">
                <header class="mb-4">
                    <h2 id="my-skills-title" class="h5 fw-bold mb-0">
                        Your Skills
                    </h2>
                </header>

                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-3 p-lg-4">
                        <dl class="row g-4 mb-0">
                            <div class="col-12 col-lg-6">
                                <dt class="text-secondary small fw-normal mb-2">
                                    Skills you offer
                                </dt>
                                <dd class="mb-0 d-flex flex-wrap gap-2">
                                    <span class="badge rounded-2 skill-teach">
                                        Python
                                    </span>
                                    <span class="badge rounded-2 skill-teach">
                                        HTML/CSS
                                    </span>
                                    <span class="badge rounded-2 skill-teach">
                                        Figma
                                    </span>
                                </dd>
                            </div>

                            <div class="col-12 col-lg-6">
                                <dt class="text-secondary small fw-normal mb-2">
                                    Skills you want to learn
                                </dt>
                                <dd class="mb-0 d-flex flex-wrap gap-2">
                                    <span class="badge rounded-2 skill-learn">
                                        UI/UX
                                    </span>
                                    <span class="badge rounded-2 skill-learn">
                                        Public Speaking
                                    </span>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-layouts.user>