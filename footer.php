<!DOCTYPE html>
<html>
<head>
    <title>Professional Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .footer {
            background-image: url('images/background.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        .footer-content {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-logo img {
            max-width: 300px;
            height: auto;

        }

        .contact-info {
            margin-top: 30px;
            font-size: 18px;
        }

        .social-icons {
            margin-top: 20px;
            list-style: none;
            padding: 0;
        }

        .social-icons li {
            display: inline-block;
            margin-right: 15px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="images/logo4.png" alt="Company Logo"> <!-- Replace with your logo image path -->
            </div>
            <div class="contact-info">
      <div>
      <p>
        <i class="fa fa-map-marker fa-1x">&nbsp;
          <span class="contact-text place">
            No:109,Maha AluthgamAra,Ranmuduwewa,Sooriywewa
          </span>
        </i>
      </p>
      <p>
        <i class="fa fa-envelope fa-1x">&nbsp;
          <span class="contact-text gmail">
            <a href="mailto:yourmail@gmail.com"
              title="Send me an email">
              Ksiriwardhana51@gmail.com</a>
          </span>
        </i>
      </p>
      <p>
        <i class="fa fa-phone fa-1x">&nbsp;
          <span class="contact-text phone">
            0703943373
          </span>
        </i>
      </p>
    </div>
            </div>
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li><br>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li><br>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li><br>
                <!-- Add more social icons as needed -->
            </ul>
        </div>
    </div>
</body>
</html>
