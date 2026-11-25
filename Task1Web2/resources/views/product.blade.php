<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Siomai Rice Center</title>

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

       
        .products {
            padding: 50px 20px;
            text-align: center;
        }

        .products h1 {
            color: #8b0000;
            margin-bottom: 10px;
            font-size: 35px;
        }

        .products p {
            color: #555;
            margin-bottom: 30px;
        }

        /* Product Cards */
        .product-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            width: 280px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px #ccc;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card h3 {
            color: #8b0000;
            margin: 15px 0;
        }

        .card .price {
            color: #d41414;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card button {
            background: #8b0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card button:hover {
            background: #d41414;
        }

        @media (max-width: 600px) {
            nav {
                gap: 15px;
            }

            nav a {
                font-size: 13px;
            }
        }
    </style>
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

   
    <section class="products">
        <h1>OUR PRODUCTS</h1>
        <p>Enjoy our delicious and affordable siomai meals!</p>

        <div class="product-container">

           
            <div class="card">
                <img src="{{ asset('img/siomay2.jpg') }}" alt="Siomai">
                <h3>Siomai</h3>
                <p>Juicy and delicious steamed siomai.</p>
                <div class="price">₱30.00</div>
                <button>Order Now</button>
            </div>

            
            <div class="card">
                 <img src="{{ asset('img/siomaiwithrice.jpg') }}" alt="Siomai Rice">
                <h3>Siomai Rice</h3>
                <p>Siomai served with freshly cooked rice.</p>
                <div class="price">₱45.00</div>
                <button>Order Now</button>
            </div>

            
            <div class="card">
                <img src="{{ asset('img/takowyaki.jpg') }}" alt="Siomai Meal">
                <h3>Takoyaki Meal</h3>
                <p>A delicious and satisfying rice meal.</p>
                <div class="price">₱60.00</div>
                <button>Order Now</button>
            </div>

        </div>
    </section>

</body>
</html>
