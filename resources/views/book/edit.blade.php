<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: lightblue;
            padding: 7px;
        }
        .container {
            background: #fff;
            padding: 0px 20px 5px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }
        h1 {
            margin-bottom: 10px;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        form div {
            margin-bottom: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        button {
            margin-top: 5px;
        }
        .error-list {
            color: red;
            margin-bottom: 20px;
            position: absolute;
            right: -300px;
            top: 150px;
            width: 200px;
        }
    </style>
</head>
<body>
    <a href="{{ route('book.index') }}" class="back-button">← Back to Books</a>
    <div class="container">
        <h1>EDIT BOOK</h1>
        <form method="post" action="{{ route('book.update', ['book' => $book]) }}">
            @csrf
            @method('PUT') 
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ $book->name }}" />
            </div>
            <div>
                <label for="short_description">Short Description</label>
                <textarea id="short_description" name="short_description" placeholder="Short Description">{{ $book->short_description }}</textarea>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Price" value="{{ $book->price }}" />
            </div>
            <div>
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" placeholder="ISBN" value="{{ $book->isbn }}" />
            </div>
            <div>
                <label for="no_of_pages">Number of Pages</label>
                <input type="text" id="no_of_pages" name="no_of_pages" placeholder="Number of Pages" value="{{ $book->no_of_pages }}" />
            </div>
            <div>
                <label for="publication_date">Publication Date</label>
                <input type="date" id="publication_date" name="publication_date" placeholder="Publication Date" value="{{ $book->publication_date }}" />
            </div>
            <div>
                <button type="submit">UPDATE BOOK</button> 
            </div>
        </form>
        @if($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
