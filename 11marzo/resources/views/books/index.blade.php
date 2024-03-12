<x-layouts.app>
    <main class="container">
        <h1 class="text-center my-5">All Books</h1>
        <x-books-table :books="$books" />
    </main>
    @push('styles')
    @vite(['resources/css/books-index.css'])
@endpush
@push('scripts')
    @vite(['resources/js/books-index.js'])
@endpush
</x-layouts.app>
