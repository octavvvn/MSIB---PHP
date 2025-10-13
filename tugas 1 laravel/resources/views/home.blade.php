<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #ffe6f2;
        }

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 230, 242, 0.7);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 48px;
            color: #ff4da6;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            color: #4a4a4a;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 15px 40px;
            font-size: 18px;
            color: #fff;
            background: #ff4da6;
            border: none;
            border-radius: 12px;
            text-decoration: none;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background: #e03f91;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Welcome to Book Shop</h1>
            <p>Discover your next favorite book</p>
            <a href="/genres" class="btn">Genres</a>
            <a href="/authors" class="btn">Authors</a>
        </div>
    </section>
</body>

</html>