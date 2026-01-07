<!DOCTYPE html>
<html lang="id">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joki Game</title>

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

<body>
    <section class="hero-dark" id="home">
        <div class="hero-overlay"></div>

        <header class="hero-nav">
            <div class="nav-left">
                <span class="logo">JeanneStoreID</span>
            </div>

            <nav class="nav-center">
                <ul class="nav-menu">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#menu" class="nav-link">Menu</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>

            <div class="nav-right">
                <a href="admin/admin.php" class="login-link">Admin →</a>
            </div>
        </header>

        <div class="hero-content">
            <h1>
                Jasa joki terpercaya<br>
                Proses cepat
            </h1>
        </div>
    </section>

    <section id="menu" class="menu-section">
        <div class="container">
            <h2 class="section-title">Menu Game</h2>
            <p class="section-subtitle">Pilih game favorit kamu</p>

            <div class="menu-grid">
                <div class="blog-card">
                    <div class="blog-image" style="background-image:url('assets/images/ML.jpg')"></div>
                    <div class="blog-overlay">
                        <a href="order.php?game=Mobile%20Legends" class="btn-order">
                            Pesan
                        </a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Mobile Legends</h3>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image" style="background-image:url('assets/images/pubg.jpg')"></div>
                    <div class="blog-content">
                        <h3 class="blog-title">PUBG Mobile</h3>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-image" style="background-image:url('assets/images/valorant.jpg')"></div>
                    <div class="blog-content">
                        <h3 class="blog-title">Valorant</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-wrapper">

            <!-- KIRI -->
            <div class="contact-info">
                <h2>Contact Us</h2>
                <span class="line"></span>

                <p class="desc">
                    Hubungi kami lewat sosial media lain.
                </p>

                <div class="info-block">
                    <small>EMAIL</small>
                    <p>ramydhiya86@gmail.com</p>
                </div>

                <div class="info-block">
                    <small>PHONE</small>
                    <p>+62 (234) 567-890</p>
                </div>

                <div class="info-block">
                    <small>LOCATION</small>
                    <p>Indonesia</p>
                </div>

                <!-- SOSIAL MEDIA -->
                <div class="social-links">
                    <a href="https://www.instagram.com/ramydhiya/" target="_blank" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank" class="social-link">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://wa.me/6281234567" target="_blank" class="social-link">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- KANAN -->
            <div class="contact-form">
                <form>
                    <label>Name</label>
                    <input type="text" required>

                    <label>Email</label>
                    <input type="email" required>

                    <button type="submit">Send Message</button>
                </form>
            </div>

        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <p class="footer-text">&copy; 2025 JeanneStoreID.</p>
                </div>
                <div class="footer-right">
                    <nav class="footer-nav">
                        <a href="#home" class="footer-link">Home</a>
                        <a href="#menu" class="footer-link">Menu</a>
                        <a href="#contact" class="footer-link">Contact</a>
                    </nav>
                </div>

            </div>
        </div>
    </footer>
    
</body>
</html>

