<x-layouts.user title="Dashboard" active="dashboard">
    @push('styles')
        @vite('resources/css/pages/dashboard.css')
    @endpush

    @push('scripts')
        @vite('resources/js/pages/dashboard.js')
    @endpush

    HELLO WORLD
</x-layouts.user>
