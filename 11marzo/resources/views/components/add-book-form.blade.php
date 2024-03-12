<form method="post" action="/books">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Book Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="author_firstname" class="form-label">Author First name</label>
        <input type="text" class="form-control" id="author_firstname" name="author_firstname">
    </div>
    <div class="mb-3">
        <label for="author_lastname" class="form-label">Author Last name</label>
        <input type="text" class="form-control" id="author_lastname" name="author_lastname">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="number" class="form-control" id="year" min="1600" name="year">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select id="category" class="form-select" name="category_id">
            @foreach ($categories as $category)
                <option  value="{{ $category->category_id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary my-4">Add Book</button>
</form>

@push('scripts')
    @vite(['resources/js/add-book-form.js'])
@endpush