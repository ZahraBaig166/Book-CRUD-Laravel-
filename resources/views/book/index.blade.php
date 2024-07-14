<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BOOKS</h1>
    <DIV>
        <div>
            <table border="1" cellpadding="10" cellspacing="0">
               
                    <tr>
                        <th>Name</th>
                        <th>Short Description</th>
                        <th>Price</th>
                        <th>ISBN</th>
                        <th>No of Pages</th>
                        <th>Publication Date</th>
                        <th>Edit</th>
                    </tr>
                
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->short_description }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->no_of_pages }}</td>
                        <td>{{ $book->publication_date }}</td>
                        <td>
                            <a href="{{ route('book.edit', ['book' => $book]) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </DIV>
    
</body>
</html>