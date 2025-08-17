<?php
// Puffx Host Full Branding Page
$brand_name = "Puffx Host";
$tagline    = "Fast • Secure • Reliable Hosting";
$year       = date("Y");
$domain     = "www.puffxhost.com"; // अपनी साइट का डोमेन यहाँ डालें
$email      = "support@puffxhost.com";
$phone      = "+91-8602967573";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $brand_name; ?> - Web Hosting</title>
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f9f9f9; }
        header {
            background:linear-gradient(90deg,#4f46e5,#9333ea);
            color:#fff; padding:15px 20px;
            display:flex; justify-content:center; align-items:center;
        }
        header h1 { margin:0; font-size:26px; font-weight:bold; }
        nav {
            background:#1a1a1a; display:flex; justify-content:center; padding:10px;
        }
        nav a {
            color:#fff; text-decoration:none; margin:0 15px; font-size:16px;
        }
        nav a:hover { color:#f39c12; }
        .hero {
            text-align:center; padding:60px 20px;
            background:#eee;
        }
        .hero h2 { font-size:32px; margin-bottom:10px; }
        .hero p { font-size:18px; color:#555; }
        .section {
            padding:50px 20px; text-align:center;
        }
        .section h3 { font-size:24px; margin-bottom:15px; }
        .plans {
            display:flex; flex-wrap:wrap; justify-content:center; gap:20px;
        }
        .plan {
            background:#fff; border:1px solid #ddd; border-radius:8px;
            padding:20px; width:250px; box-shadow:0 2px 6px rgba(0,0,0,0.1);
        }
        .plan h4 { margin:0 0 10px; font-size:20px; color:#4f46e5; }
        .plan p { margin:5px 0; font-size:14px; color:#333; }
        .plan .price { font-size:22px; margin:15px 0; color:#9333ea; font-weight:bold; }
        .plan button {
            background:#4f46e5; color:#fff; border:none; padding:10px 15px;
            border-radius:5px; cursor:pointer;
        }
        .plan button:hover { background:#9333ea; }
        footer {
            background:#111; color:#aaa; text-align:center; padding:20px 10px; font-size:14px;
        }
        footer a { color:#f39c12; text-decoration:none; }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1><?php echo $brand_name; ?></h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#">Home</a>
        <a href="#services">Services</a>
        <a href="#pricing">Pricing</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h2>Welcome to <?php echo $brand_name; ?></h2>
        <p><?php echo $tagline; ?> – Hosting that grows with your business.</p>
    </div>

    <!-- Services -->
    <div class="section" id="services">
        <h3>🌐 Our Services</h3>
        <p>We provide high-quality hosting solutions for individuals and businesses.</p>
        <ul style="list-style:none; padding:0; font-size:16px; line-height:1.8;">
            <li>✔ Shared Hosting</li>
            <li>✔ VPS Hosting</li>
            <li>✔ Dedicated Servers</li>
            <li>✔ Domain Registration</li>
            <li>✔ SSL Certificates</li>
        </ul>
    </div>

    <!-- Pricing -->
    <div class="section" id="pricing">
        <h3>💰 Our Hosting Plans</h3>
        <div class="plans">
            <div class="plan">
                <h4>Starter</h4>
                <p>1 Website</p>
                <p>10 GB SSD</p>
                <p>Free SSL</p>
                <div class="price">₹99/mo</div>
                <button>Order Now</button>
            </div>
            <div class="plan">
                <h4>Business</h4>
                <p>10 Websites</p>
                <p>50 GB SSD</p>
                <p>Free Domain</p>
                <div class="price">₹299/mo</div>
                <button>Order Now</button>
            </div>
            <div class="plan">
                <h4>Enterprise</h4>
                <p>Unlimited Websites</p>
                <p>200 GB SSD</p>
                <p>Priority Support</p>
                <div class="price">₹699/mo</div>
                <button>Order Now</button>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="section" id="about">
        <h3>ℹ About <?php echo $brand_name; ?></h3>
        <p><?php echo $brand_name; ?> is a trusted web hosting provider offering secure and affordable hosting solutions with 24/7 support and 99.9% uptime guarantee.</p>
    </div>

    <!-- Contact -->
    <div class="section" id="contact">
        <h3>📞 Contact Us</h3>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Website: <a href="https://<?php echo $domain; ?>"><?php echo $domain; ?></a></p>
    </div>

    <!-- Footer -->
    <footer>
        &copy; <?php echo $year; ?> <?php echo $brand_name; ?>. All Rights Reserved. | Powered by <a href="https://<?php echo $domain; ?>"><?php echo $brand_name; ?></a>
    </footer>

</body>
</html>
