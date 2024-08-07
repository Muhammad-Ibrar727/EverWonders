<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        footer {
            background-color: #333;
            color: white;
            padding: 20px 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 1200px;
        }

        .footer-newsletter {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .footer-newsletter h3 {
            color: #ff6f61;
            font-size: 20px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .footer-newsletter p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .footer-newsletter .signup-form {
            display: flex;
            justify-content: center;
            max-width: 400px;
            margin: 0 auto;
            align-content: center
        }

        .footer-newsletter .signup-form input {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-right: 5px;
            font-size: 14px;
            width: 250px;
            max-width: 100%;
        }

        .footer-newsletter .signup-form button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #ff6f61;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .footer-newsletter .signup-form button:hover {
            background-color: #e65b50;
            transform: translateY(-3px);
        }

        .footer-bottom {
            display: flex;
            justify-content: space-around;
            width: 100%;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
            margin: 10px;
            text-align: center;
        }

        .footer-section h3 {
            color: #ff6f61;
            margin-bottom: 10px;
            font-size: 20px;
            text-transform: uppercase;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #ff6f61;
            transform: translateX(5px);
        }

        .footer-section p {
            margin: 5px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .footer-section p i {
            margin-right: 8px;
            font-size: 20px;
        }

        .footer-section .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 5px;
            transition: transform 0.3s ease;
        }

        .footer-section .icon i {
            margin-right: 8px;
        }

        .footer-section .icon.facebook {
            color: #3b5998;
        }

        .footer-section .icon.twitter {
            color: #1da1f2;
        }

        .footer-section .icon.instagram {
            color: #e4405f;
        }

        .footer-section .icon i:hover {
            color: #ff6f61;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .footer-newsletter {
                text-align: center;
            }

            .footer-newsletter .signup-form {
                flex-direction: column;
                align-items: center;
            }

            .footer-newsletter .signup-form input {
                margin-right: 0;
                margin-bottom: 5px;
            }

            .footer-bottom {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <!-- footer section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-newsletter">
                <h3>Newsletter Signup</h3>
                <p>Subscribe for the latest travel deals and tips.</p>
                <form class="signup-form">
                    <input type="email" placeholder="Your Email Address" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <div class="footer-bottom">
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Social Media</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/your_page" class="icon facebook"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="https://twitter.com/your_account" class="icon twitter"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="https://www.instagram.com/your_account" class="icon instagram"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-envelope"></i> mibrar@gmail.com</p>
                    <p><i class="fas fa-phone-alt"></i> +923430914553</p>
                    <p><i class="fas fa-map-marker-alt"></i> College Doraha, Mansehra, Pakistan</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
