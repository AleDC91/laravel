<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Book Title</th>
            <th scope="col">Author</th>
            <th scope="col">Year of Publication</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
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
                <td>
                    <form method="post" action="{{ route('books.destroy', $book->book_id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@push('scripts')
    {{-- @vite(['resources/js/books-table.js']) --}}
@endpush
