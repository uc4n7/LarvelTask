<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Siomai Rice Center</title>

</head>

<body>

    <header>
        <nav>
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('about') }}">ABOUT</a>
            <a href="{{ route('contact') }}">CONTACT</a>
            <a href="{{ route('product') }}">PRODUCT</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>SIOMAI RICE CENTER</h1>
            <p>Delicious Siomai • Rice Meals • Affordable Prices</p>
        </div>
    </section>

</body>
</html>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            background: #8b0000;
            padding: 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #ffcc00;
        }

        /* Hero Section */
        .hero {
            height: 80vh;
            background: linear-gradient(135deg, #8b0000, #d41414);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero h1 {
            font-size: 60px;
            color: #ffcc00;
            text-shadow: 3px 3px 5px black;
        }

        .hero p {
            font-size: 22px;
            margin-top: 15px;
        }

        @media (max-width: 600px) {
            nav {
                gap: 15px;
            }

            nav a {
                font-size: 13px;
            }

            .hero h1 {
                font-size: 35px;
            }

            .hero p {
                font-size: 16px;
            }
        }
    </style>
