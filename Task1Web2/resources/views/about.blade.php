<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Siomai Rice Center</title>



   
    <header>
        <nav>
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('about') }}">ABOUT</a>
            <a href="{{ route('contact') }}">CONTACT</a>
            <a href="{{ route('product') }}">PRODUCT</a>
        </nav>
    </header>

    
    <section class="hero">
        <h1>ABOUT US</h1>
        <p>Welcome to Siomai Rice Center!</p>
    </section>

 
    <section class="about">
        <h2>Who We Are</h2>

        <p>
            Siomai Rice Center is a food business dedicated to serving
            delicious, affordable, and satisfying meals. We offer tasty
            siomai and rice meals made for students, workers, and
            everyone who loves good food.
        </p>

        <p>
            Our goal is to provide quality food, friendly service,
            and affordable prices for our valued customers.
        </p>
    </section>

    
    <section class="mission-vision">

        <div class="box">
            <h3>Our Mission</h3>
            <p>
                To serve delicious and affordable siomai rice meals
                while providing excellent customer service.
            </p>
        </div>

        <div class="box">
            <h3>Our Vision</h3>
            <p>
                To become a trusted food business known for quality,
                affordability, and customer satisfaction.
            </p>
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
            background: #fff8e1;
        }

        /* Navbar */
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

        /* About Hero */
        .hero {
            background: linear-gradient(135deg, #8b0000, #d41414);
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 45px;
            color: #ffcc00;
            text-shadow: 2px 2px 4px black;
        }

        .hero p {
            font-size: 18px;
            margin-top: 15px;
        }

        /* About Content */
        .about {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            text-align: center;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px #ccc;
        }

        .about h2 {
            color: #8b0000;
            margin-bottom: 20px;
        }

        .about p {
            color: #555;
            line-height: 1.8;
            font-size: 16px;
        }

        /* Mission and Vision */
        .mission-vision {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .box {
            background: #8b0000;
            color: white;
            padding: 25px;
            width: 300px;
            border-radius: 10px;
            text-align: center;
        }

        .box h3 {
            color: #ffcc00;
            margin-bottom: 15px;
        }

        .box p {
            line-height: 1.6;
        }

        @media (max-width: 600px) {
            nav {
                gap: 15px;
            }

            nav a {
                font-size: 13px;
            }

            .hero h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
