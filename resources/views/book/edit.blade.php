<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
</head>
<body>
    <h1>EDIT BOOK</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    {{-- {{ route('book.update', $book->id) }} --}}
    <form method="post" action="">
        @csrf
        @method('PUT') <!-- Change to PUT for updating -->
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ $book->name }}" />
        </div>
        <div>
            <label>Short Description</label>
            <textarea name="short_description" placeholder="Short Description">{{ $book->short_description }}</textarea>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{ $book->price }}" />
        </div>
        <div>
            <label>ISBN</label>
            <input type="text" name="isbn" placeholder="ISBN" value="{{ $book->isbn }}" />
        </div>
        <div>
            <label>Number of Pages</label>
            <input type="text" name="no_of_pages" placeholder="Number of Pages" value="{{ $book->no_of_pages }}" />
        </div>
        <div>
            <label>Publication Date</label>
            <input type="date" name="publication_date" placeholder="Publication Date" value="{{ $book->publication_date }}" />
        </div>
        <div>
            <button type="submit">UPDATE BOOK</button> <!-- Change button text for clarity -->
        </div>
    </form>
</body>
</html>
