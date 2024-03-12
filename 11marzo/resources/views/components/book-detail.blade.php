<div class="d-flex justify-content-center align-items-center">
    <div style="width: 200; heigth:200">
        <img src="{{ $book->author->profile_image }}" alt="author profile image" class="rounded-circle overflow-hidden p-2 me-4" >
    </div>
    <div class="h-100 d-flex flex-column justify-content-evenly">
        <p>Author: {{ $book->author->first_name }} {{ $book->author->last_name }}</p>
        <p>Year of Publication {{$book->year}}</p>
        <p>Category: {{ $book->category->name }}</p>
    </div>
</div>
