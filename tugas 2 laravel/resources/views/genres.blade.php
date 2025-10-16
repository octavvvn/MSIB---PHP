<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Genres</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffe6f2;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
        }

        h1 {
            color: #ff66b2;
            margin-bottom: 30px;
            font-size: 32px;
            font-weight: 700;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 25px;
            width: 100%;
            max-width: 900px;
        }

        .card {
            background: #fff0f5;
            padding: 30px 15px;
            border-radius: 14px;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
        }

        .card h2 {
            font-size: 16px;
            color: #e75480;
            margin: 0;
        }

        .btn {
            display: inline-block;
            margin-top: 40px;
            background: #ff66b2;
            color: #fff;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 14px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #e0559d;
        }
    </style>
</head>

<body>
    <h1>Genres</h1>
    <div class="grid-container">
        @foreach($genres as $genre)
            <div class="card">
                <h2>{{ $genre['name'] }}</h2>
            </div>
        @endforeach
    </div>
    <a href="/" class="btn">Back to Home</a>
</body>

</html>