<x-layouts.user title="Skill Exchange" active="skills">
    @push('styles')
        @vite('resources/css/pages/skills.css')
    @endpush

    @push('scripts')
        @vite('resources/js/pages/skills.js')
    @endpush

    <header class="header">
        <div class="title">
            <h2>Exchange Your Skills</h2>
            <p>Teach what you know and find someone who can teach you.</p>
        </div>

        <div class="header-action">
            <a href="{{ route('skills.add') }}" class="add-skill-button">
                + Add Your Skill
            </a>
        </div>
    </header>

    <main class="skills-container">
        <section class="search-section" aria-label="Search and filter skills">
            <form action="{{ route('skills.index') }}" method="GET" class="search-form">
                <div class="search-field">
                    <label for="skill-search" class="visually-hidden">
                        Search skills or students
                    </label>

                    <input
                        type="search"
                        id="skill-search"
                        name="search"
                        class="search-input"
                        placeholder="Search skills or students..."
                        value="{{ request('search') }}"
                    >
                </div>

                <div class="filter-field">
                    <label for="skill-filter" class="visually-hidden">
                        Filter by skill
                    </label>

                    <select id="skill-filter" name="skill" class="filter-select">
                        <option value="">All Skills</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="python">Python</option>
                        <option value="photography">Photography</option>
                    </select>
                </div>

                <div class="sort-field">
                    <label for="skill-sort" class="visually-hidden">
                        Sort recommendations
                    </label>

                    <select id="skill-sort" name="sort" class="filter-select">
                        <option value="match">Best Match</option>
                        <option value="newest">Newest</option>
                    </select>
                </div>

            </form>
        </section>

        <section class="recommendations-section"
                 aria-labelledby="recommendations-title">

            <header class="section-header">
                <h2 id="recommendations-title" class="section-title">
                    Best matches for you
                </h2>

                <p class="section-description">
                    People who match your learning goals
                </p>
            </header>

            <div class="student-list">

                <!-- S1 -->
                <article class="student-card">
                    <div class="student-information">
                        <div class="student-avatar avatar-green"
                             aria-hidden="true">
                            AP
                        </div>

                        <div class="student-details">
                            <h3 class="student-name">Alya Putri</h3>
                            <p class="student-role">Can Share</p>
                        </div>
                    </div>

                    <div class="skill-exchange">
                        <span class="skill-badge skill-teach">
                            UI/UX Design
                        </span>

                        <span class="exchange-label">Looking For</span>

                        <span class="skill-badge skill-learn">
                            Python
                        </span>
                    </div>

                    <div class="student-actions">
                        <p class="match-score">
                            <data value="92">92%</data> Match
                        </p>

                        <div class="action-buttons">
                            <a href="#" class="profile-button">
                                View Profile
                            </a>

                            <a href="{{route('skills.exchange')}}" class="request-button">
                                Request
                            </a>
                        </div>
                    </div>
                </article>

                {{-- S2 --}}
                <article class="student-card">
                    <div class="student-information">
                        <div class="student-avatar avatar-yellow"
                             aria-hidden="true">
                            RP
                        </div>

                        <div class="student-details">
                            <h3 class="student-name">Raka Pratama</h3>
                            <p class="student-role">Can Share</p>
                        </div>
                    </div>

                    <div class="skill-exchange">
                        <span class="skill-badge skill-teach">
                            Python
                        </span>

                        <span class="exchange-label">Looking For</span>

                        <span class="skill-badge skill-learn">
                            Public Speaking
                        </span>
                    </div>

                    <div class="student-actions">
                        <p class="match-score">
                            <data value="87">87%</data> Match
                        </p>

                        <div class="action-buttons">
                            <a href="#" class="profile-button">
                                View Profile
                            </a>

                            <a href="{{route('skills.exchange')}}" class="request-button">
                                Request
                            </a>
                        </div>
                    </div>
                </article>

                <!-- S3 -->
                <article class="student-card">
                    <div class="student-information">
                        <div class="student-avatar avatar-green"
                             aria-hidden="true">
                            NS
                        </div>

                        <div class="student-details">
                            <h3 class="student-name">Nadia Salsabila</h3>
                            <p class="student-role">Can Share</p>
                        </div>
                    </div>

                    <div class="skill-exchange">
                        <span class="skill-badge skill-teach">
                            Photography
                        </span>

                        <span class="exchange-label">Looking For</span>

                        <span class="skill-badge skill-learn">
                            Video Editing
                        </span>
                    </div>

                    <div class="student-actions">
                        <p class="match-score">
                            <data value="81">81%</data> Match
                        </p>

                        <div class="action-buttons">
                            <a href="#" class="profile-button">
                                View Profile
                            </a>

                            <a href="{{route('skills.exchange')}}" class="request-button">
                                Request
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="my-skills-section" aria-labelledby="my-skills-title">
            <footer class="section-header">
                <h2 id="my-skills-title" class="section-title">
                    Your Skills
                </h2>
            </footer>

            <div class="my-skills-card">
                <dl class="my-skills-list">
                    <div class="my-skills-item">
                        <span class="my-skills-label">Skills you offer</span>
                        <span class="skill-badge skill-teach">
                            Python &bull; HTML/CSS &bull; Figma
                        </span>
                    </div>

                    <div class="my-skills-item">
                        <span class="my-skills-label">Skills you want to learn</span>
                        <span class="skill-badge skill-learn">
                            UI/UX &bull; Public Speaking
                        </span>
                    </div>
                </dl>
            </div>
        </section>

    </main>
</x-layouts.user>