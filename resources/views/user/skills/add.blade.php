<x-layouts.user title="Add a Skill" active="skills">
    @push('styles')
        @vite('resources/css/pages/skills.css')
    @endpush

    @push('scripts')
        @vite('resources/js/pages/skills.js')
    @endpush

    <div class="container-fluid px-3 px-lg-4 py-4">
        <header class="mb-4">
            <h1 class="h3 fw-bold mb-2">Add a Skill</h1>
            <p class="text-secondary mb-0">
                Tell other students what you can teach and what you want to learn in return.
            </p>
        </header>

        <main>
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-lg-5">
                    <form class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="inputSkill" class="form-label fw-semibold">
                                Skill Name
                            </label>

                            <input
                                type="text"
                                name="skill_name"
                                id="inputSkill"
                                class="form-control"
                                placeholder="e.g. Python Programming"
                            >
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="inputCategory" class="form-label fw-semibold">
                                Category
                            </label>

                            <select name="category" id="inputCategory" class="form-select">
                                <option value="">Choose a category</option>
                                <option value="programming">
                                    Programming &amp; Technology
                                </option>
                                <option value="design">
                                    Design &amp; Creative
                                </option>
                                <option value="data">
                                    Data &amp; Analytics
                                </option>
                                <option value="communication">
                                    Communication &amp; Language
                                </option>
                                <option value="business">
                                    Business &amp; Management
                                </option>
                                <option value="content">
                                    Media &amp; Content Creation
                                </option>
                                <option value="finance">
                                    Finance &amp; Accounting
                                </option>
                                <option value="practical">
                                    Practical &amp; Technical Skills
                                </option>
                                <option value="lifestyle">
                                    Arts &amp; Lifestyle
                                </option>
                            </select>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="inputExperience" class="form-label fw-semibold">
                                Experience Level
                            </label>

                            <select name="experience_level" id="inputExperience" class="form-select">
                                <option value="">Choose your level</option>
                                <option value="beginner">
                                    Beginner
                                </option>
                                <option value="intermediate">
                                    Intermediate
                                </option>
                                <option value="advanced">
                                    Advanced
                                </option>
                            </select>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="inputLearn" class="form-label fw-semibold">
                                Skill You Want to Learn
                            </label>

                            <input
                                type="text"
                                name="skill_to_learn"
                                id="inputLearn"
                                class="form-control"
                                placeholder="e.g. UI/UX Design">

                            <div class="form-text">
                                What skill would you like to learn in return?
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label fw-semibold">
                                Description
                            </label>

                            <textarea
                                name="description"
                                id="description"
                                class="form-control"
                                rows="4"
                                placeholder="Describe your experience and what you can teach...">
                            </textarea>
                        </div>

                        <div class="col-12 col-md-6">
                            <fieldset>
                                <legend class="form-label fw-semibold fs-6 mb-2">
                                    Availability
                                </legend>

                                <div class="d-flex flex-wrap gap-3">
                                    <div class="form-check">
                                        <input
                                            type="checkbox"
                                            name="availability[]"
                                            value="weekdays"
                                            id="availabilityWeekdays"
                                            class="form-check-input">
                                        <label for="availabilityWeekdays" class="form-check-label">
                                            Weekdays
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            type="checkbox"
                                            name="availability[]"
                                            value="weekends"
                                            id="availabilityWeekends"
                                            class="form-check-input">
                                        <label for="availabilityWeekends" class="form-check-label">
                                            Weekends
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            type="checkbox"
                                            name="availability[]"
                                            value="flexible"
                                            id="availabilityFlexible"
                                            class="form-check-input">
                                        <label for="availabilityFlexible" class="form-check-label">
                                            Flexible
                                        </label>
                                    </div>
                                </div>

                                <div class="form-text mt-1">
                                    Select when you are available for skill exchange.
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-12 col-md-6">
                            <fieldset>
                                <legend class="form-label fw-semibold fs-6 mb-2">
                                    Preferred Learning Method
                                </legend>

                                <div class="d-flex flex-wrap gap-3">
                                    <div class="form-check">
                                        <input
                                            type="radio"
                                            name="learning_method"
                                            value="online"
                                            id="methodOnline"
                                            class="form-check-input">
                                        <label for="methodOnline" class="form-check-label">
                                            Online
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            type="radio"
                                            name="learning_method"
                                            value="in_person"
                                            id="methodInPerson"
                                            class="form-check-input">
                                        <label for="methodInPerson" class="form-check-label">
                                            In-person
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            type="radio"
                                            name="learning_method"
                                            value="both"
                                            id="methodBoth"
                                            class="form-check-input">
                                        <label for="methodBoth" class="form-check-label">
                                            Both
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-12 mt-4">
                            <hr class="my-3">
                            <div class="d-flex flex-column flex-sm-row justify-content-end gap-2">
                                <a href="{{ route('skills.index') }}" class="btn btn-outline-secondary px-4">
                                    Cancel
                                </a>

                                <button type="submit" class="btn btn-success px-4">
                                    Add Skill
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</x-layouts.user>