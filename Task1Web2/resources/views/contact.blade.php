<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Siomai Rice Center</title>

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

        /* Hero */
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
            margin-top: 15px;
            font-size: 18px;
        }

        /* Contact Section */
        .contact {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px #ccc;
        }

        .contact h2 {
            text-align: center;
            color: #8b0000;
            margin-bottom: 25px;
        }

        .contact-info {
            margin-bottom: 30px;
            text-align: center;
            line-height: 2;
            color: #555;
        }

        .contact-info strong {
            color: #8b0000;
        }

        /* Contact Form */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .contact-form textarea {
            height: 120px;
            resize: none;
        }

        .contact-form button {
            background: #8b0000;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .contact-form button:hover {
            background: #d41414;
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

            .contact {
                margin: 20px;
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

    
    <section class="hero">
        <h1>CONTACT US</h1>
        <p>We would love to hear from you!</p>
    </section>

   
    <section class="contact">
        <h2>Get In Touch</h2>

        <div class="contact-info">
            <p><strong>Business Name:</strong> Siomai Rice Center</p>
            <p><strong>Address:</strong> Nasipit Barangay 2 Agusan Del Norte</p>
            <p><strong>Phone:</strong> 0953-2569-562</p>
            <p><strong>Email:</strong> siomai@gmail.com</p>
        </div>

        
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>

            <input type="email" placeholder="Your Email" required>

            <input type="text" placeholder="Subject" required>

            <textarea placeholder="Your Message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

</body>
</html>
