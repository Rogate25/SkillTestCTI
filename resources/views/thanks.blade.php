<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LandingPage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="up">
            <span><a href="#">ID</a> | <a href="#">EN</a></span>
        </div>
        <div class="down">
            <img src="{{ asset('assets/Helios - a member of-02 1.png') }}" alt="2" width="100">
            <img src="{{ asset('assets/cropped-cropped-cropped-sangfor-logo-rev23.png') }}" alt="1" width="150">
        </div>
    </header>

    <main>
        <div class="thanks">
            <div class="grup">
                <img src="{{ asset('assets/Object.png') }}" alt="2" width="450">
                <h1>Thank You for your interest</h1>
                <p>Our team will contact you within 5 working days</p>
                <button>BACK TO HOMEPAGE</button>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-section-1">
            <div class="footer-text">
                <h3>PT. Helios Informatika Nusantara</h3>
                <br>
                <p>Centennial Tower, 12th Floor,
                    Jl. Jendral Gatot Subroto
                    No. Kav 24-25, Jakarta
                    12930 Indonesia</p>
                <br>
                <p><span>Phone: </span> +62 21 8062 2220</p>
                <p><span>Email: </span> Tencent@helios.id</p>
                <br>
                <div class="social-media">
                    <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="map-image">
                <img src="{{ asset('assets/worldmap.png') }}" alt="Map" style="width: 650px">
            </div>
        </div>
        <div class="footer-section-2">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>