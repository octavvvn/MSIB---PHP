<!DOCTYPE html>
<html>

<head>
    <title>Books</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fff5fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }

        h1 {
            color: #ff4d94;
            margin-bottom: 40px;
            font-size: 36px;
            font-weight: 600;
            text-align: center;
            letter-spacing: 0.5px;
        }

        .bookshelf {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            width: 100%;
            max-width: 1000px;
        }

        .book-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .book-cover {
            background: linear-gradient(135deg, #ffb6c1, #ffd6e0);
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
            font-size: 15px;
            text-transform: uppercase;
            text-align: center;
            padding: 10px;
        }

        .book-info {
            padding: 18px;
            text-align: left;
        }

        .book-info h2 {
            font-size: 16px;
            color: #ff4d94;
            margin: 0 0 10px 0;
            font-weight: 600;
            line-height: 1.3;
        }

        .book-info p {
            font-size: 13px;
            margin: 4px 0;
            color: #555;
            line-height: 1.4;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn {
            display: inline-block;
            margin-top: 45px;
            padding: 12px 28px;
            text-align: center;
            background: #ff4d94;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
            font-size: 15px;
            font-weight: 500;
        }

        .btn:hover {
            background: #e63c82;
        }
    </style>
</head>

<body>
    <h1>Books Collection</h1>

    <div class="bookshelf">
        @foreach($books as $book)
            <div class="book-card">
                <div class="book-cover">
                    {{ \Illuminate\Support\Str::limit($book->title, 15) }}
                </div>
                <div class="book-info">
                    <h2>{{ $book->title }}</h2>
                    <p><b>Genre:</b> {{ $book->genre->name ?? 'Unknown' }}</p>
                    <p><b>Author:</b> {{ $book->author->name ?? 'Unknown' }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <a href="/" class="btn">Back to Home</a>
</body>

</html>