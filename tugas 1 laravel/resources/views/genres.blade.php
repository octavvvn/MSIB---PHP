<!DOCTYPE html>
<html>

<head>
    <title>Genres</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffe6f2;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #ff66b2;
            margin-bottom: 30px;
            font-size: 32px;
            text-align: center;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 900px;
        }

        .card {
            background: #fff0f5;
            padding: 40px 15px 15px 15px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: 0.3s;
            font-size: 14px;
            position: relative;
        }

        .card h2 {
            font-size: 16px;
            color: #ff66b2;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12);
        }

        .btn {
            display: block;
            margin: 30px auto 0;
            padding: 12px 25px;
            text-align: center;
            background: #ff66b2;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
            font-size: 14px;
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