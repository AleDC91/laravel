<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Book Title</th>
            <th scope="col">Author</th>
            <th scope="col">Year of Publication</th>
            <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td><a href="{{ route('books.show', $book->book_id) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author->first_name }} {{ $book->author->last_name }} </td>
                <td>{{ $book->year }}</td>
                <td class="category">
                    <span class="name"> {{ $book->category->name }} </span>
                    {{-- <span class="description d-none"> {{ $book->category->description }}</span> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@push('scripts')
    {{-- @vite(['resources/js/books-table.js']) --}}
@endpush
