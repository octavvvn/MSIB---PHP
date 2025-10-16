<!DOCTYPE html>
<html>

<head>
    <title>Home - Book Shop</title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #ffe6f2;
            overflow-x: hidden;
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
            background: rgba(255, 230, 242, 0.8);
            backdrop-filter: blur(2px);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }

        .hero h1 {
            font-size: 52px;
            color: #d63384;
            margin-bottom: 15px;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.6);
        }

        .hero p {
            font-size: 22px;
            color: #4a4a4a;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 14px 38px;
            font-size: 18px;
            color: #fff;
            background: linear-gradient(135deg, #ff66b2, #ff4da6);
            border: none;
            border-radius: 30px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
        }

        .btn:hover {
            transform: translateY(-3px);
            background: linear-gradient(135deg, #ff4da6, #ff66b2);
            box-shadow: 0 6px 18px rgba(255, 105, 180, 0.45);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .btn {
                font-size: 16px;
                padding: 12px 28px;
            }
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
            <a href="/books" class="btn">Books</a>
        </div>
    </section>
</body>

</html>
