<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: lightblue;
        }

        .card {
            margin-bottom: 30px;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-deck {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .card-deck .card {
            flex: 0 0 calc(33.333% - 20px);
            margin: 10px;
        }

        .mt-auto {
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 0px 25%;
        }

        .btn-group .btn {
            flex: 0 0 45%;
            margin: 0 5px;
            text-align: center;
        }

        .success-message {
            display: none;
            color: green;
            animation: blink 1s step-start infinite;
            margin-bottom: 20px;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-4">BOOK STORE</h1>
            <div class="success-message" id="success-message">
                @if (session()->has('success'))
                    {{ session('success') }}
                @endif
            </div>
            <a href="{{ route('book.create') }}" class="btn btn-primary btn-lg">+ New Book</a>
        </div>

        <h2 class="text-center">Available Books</h2>
        <div class="card-deck">
            @foreach ($books as $book)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->name }}</h5>
                        <p class="card-text">{{ $book->short_description }}</p>
                        <p class="card-text"><strong>Price:</strong> {{ $book->price }}</p>
                        <p class="card-text"><strong>ISBN:</strong> {{ $book->isbn }}</p>
                        <p class="card-text"><strong>No of Pages:</strong> {{ $book->no_of_pages }}</p>
                        <p class="card-text"><strong>Publication Date:</strong> {{ $book->publication_date }}</p>
                        <div class="mt-auto btn-group">
                            <a href="{{ route('book.edit', ['book' => $book]) }}" class="btn btn-primary mb-2">Edit</a>
                            <form action="{{ route('book.delete', ['book' => $book]) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            var successMessage = $('#success-message');
            if (successMessage.text().trim()) {
                successMessage.show();
                setTimeout(function() {
                    successMessage.html('');
                }, 3000); 
            }
        });
    </script>
    
</body>

</html>
