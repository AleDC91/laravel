<x-layouts.app>
    <main class="container">
        <h1 class="text-center my-5">{{$book->title}}</h1>
        <x-book-detail :book="$book"/>
    </main>
</x-layouts.app>
