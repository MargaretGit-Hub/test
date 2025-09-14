<?php
// POS SAAS Flutter App Landing Page
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS SAAS - Sistem Point of Sale untuk Toko Pakaian</title>
    <meta name="description" content="Aplikasi POS SAAS Flutter terbaik untuk toko pakaian dengan fitur lengkap dan multi platform">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --warning-color: #f59e0b;
            --info-color: #3b82f6;
            --dark-color: #1f2937;
            --light-color: #f8fafc;
            --border-color: #e5e7eb;
            --text-color: #374151;
            --text-light: #6b7280;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
        }

        /* Header Styles */
        .header {
            background: white;
            box-shadow: var(--shadow);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color) !important;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--text-color) !important;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .btn-login {
            background: var(--primary-color);
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: var(--secondary-color);
            transform: translateY(-1px);
        }

        /* Hero Section */
        .hero-section {
            padding: 8rem 0 4rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-description {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-hero {
            padding: 0.875rem 2rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 0.5rem;
            margin: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-primary-hero {
            background: var(--accent-color);
            border: none;
            color: white;
        }

        .btn-primary-hero:hover {
            background: #d97706;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-secondary-hero {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-secondary-hero:hover {
            background: white;
            color: var(--primary-color);
        }

        .qr-code {
            background: white;
            padding: 1rem;
            border-radius: 0.5rem;
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 2rem 0;
        }

        .app-download-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .app-download-btn {
            background: var(--dark-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .app-download-btn:hover {
            background: #374151;
            color: white;
            transform: translateY(-2px);
        }

        .hero-image {
            background: #f3f4f6;
            border-radius: 1rem;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-size: 1.1rem;
        }

        /* Features Section */
        .features-section {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .feature-box {
            background: white;
            padding: 2rem 1.5rem;
            border-radius: 1rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .feature-box:nth-child(1) .feature-icon { background: #ef4444; }
        .feature-box:nth-child(2) .feature-icon { background: #f59e0b; }
        .feature-box:nth-child(3) .feature-icon { background: #10b981; }
        .feature-box:nth-child(4) .feature-icon { background: #3b82f6; }
        .feature-box:nth-child(5) .feature-icon { background: #8b5cf6; }
        .feature-box:nth-child(6) .feature-icon { background: #06b6d4; }
        .feature-box:nth-child(7) .feature-icon { background: #f97316; }
        .feature-box:nth-child(8) .feature-icon { background: #84cc16; }
        .feature-box:nth-child(9) .feature-icon { background: #ec4899; }
        .feature-box:nth-child(10) .feature-icon { background: #6366f1; }
        .feature-box:nth-child(11) .feature-icon { background: #14b8a6; }
        .feature-box:nth-child(12) .feature-icon { background: #f59e0b; }
        .feature-box:nth-child(13) .feature-icon { background: #8b5cf6; }
        .feature-box:nth-child(14) .feature-icon { background: #ef4444; }
        .feature-box:nth-child(15) .feature-icon { background: #10b981; }
        .feature-box:nth-child(16) .feature-icon { background: #3b82f6; }

        .feature-title {
            font-weight: 600;
            color: var(--text-color);
        }

        /* Showcase Section */
        .showcase-section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--dark-color);
        }

        .mobile-mockups {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
        }

        .mobile-mockup {
            background: var(--light-color);
            width: 200px;
            height: 400px;
            border-radius: 2rem;
            border: 8px solid var(--dark-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-size: 0.9rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .mobile-mockup:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        /* Demo Video Section */
        .demo-section {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .video-container {
            background: var(--dark-color);
            border-radius: 1rem;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-top: 3rem;
        }

        /* Pricing Section */
        .pricing-section {
            padding: 5rem 0;
        }

        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .pricing-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 1rem;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .pricing-card.featured {
            border-color: var(--primary-color);
            transform: scale(1.05);
        }

        .pricing-badge {
            background: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.875rem;
            font-weight: 600;
            position: absolute;
            top: -0.75rem;
            left: 50%;
            transform: translateX(-50%);
        }

        .pricing-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .pricing-price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .pricing-period {
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        .pricing-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .pricing-features li {
            padding: 0.5rem 0;
            color: var(--text-light);
        }

        .pricing-features li i {
            color: var(--success-color);
            margin-right: 0.5rem;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow);
        }

        .testimonial-content {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--text-light);
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--text-color);
        }

        .testimonial-company {
            color: var(--text-light);
            font-size: 0.875rem;
        }

        /* Blog Section */
        .blog-section {
            padding: 5rem 0;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }

        .main-blog-posts {
            display: grid;
            gap: 2rem;
        }

        .blog-post {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .blog-image {
            height: 200px;
            background: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
        }

        .blog-content {
            padding: 1.5rem;
        }

        .blog-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .blog-date {
            color: var(--text-light);
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .blog-excerpt {
            color: var(--text-light);
            line-height: 1.6;
        }

        .sidebar-posts {
            display: grid;
            gap: 1rem;
        }

        .sidebar-post {
            background: white;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            display: flex;
            gap: 1rem;
        }

        .sidebar-post-image {
            width: 80px;
            height: 60px;
            background: var(--light-color);
            border-radius: 0.5rem;
            flex-shrink: 0;
        }

        .sidebar-post-content {
            flex: 1;
        }

        .sidebar-post-title {
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: var(--text-color);
        }

        .sidebar-post-date {
            font-size: 0.75rem;
            color: var(--text-light);
        }

        /* Footer */
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h5 {
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            padding: 0.25rem 0;
        }

        .footer-section ul li a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            padding-top: 1rem;
            text-align: center;
            color: #9ca3af;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .feature-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 1rem;
            }

            .mobile-mockups {
                flex-direction: column;
                align-items: center;
            }

            .pricing-cards {
                grid-template-columns: 1fr;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }

            .app-download-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="fas fa-cash-register me-2"></i>POS SAAS</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pages">Pages</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    </ul>
                    <button class="btn btn-primary btn-login">Login</button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Sistem POS Terbaik untuk Toko Pakaian</h1>
                    <p class="hero-description">Kelola toko pakaian Anda dengan mudah menggunakan aplikasi POS SAAS Flutter yang modern, lengkap, dan terintegrasi.</p>
                    
                    <div class="hero-buttons">
                        <button class="btn btn-primary-hero btn-hero">
                            <i class="fas fa-shopping-cart me-2"></i>Buy Now
                        </button>
                        <button class="btn btn-secondary-hero btn-hero">
                            <i class="fas fa-play me-2"></i>Watch Video
                        </button>
                    </div>

                    <div class="qr-code">
                        <div class="text-center">
                            <i class="fas fa-qrcode fa-3x text-dark"></i>
                            <small class="d-block mt-2 text-dark">Scan QR Code</small>
                        </div>
                    </div>

                    <div class="app-download-buttons">
                        <a href="#" class="app-download-btn">
                            <i class="fab fa-google-play fa-2x"></i>
                            <div>
                                <small>Download on</small><br>
                                <strong>Google Play</strong>
                            </div>
                        </a>
                        <a href="#" class="app-download-btn">
                            <i class="fab fa-app-store fa-2x"></i>
                            <div>
                                <small>Download on</small><br>
                                <strong>App Store</strong>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="text-center">
                            <i class="fas fa-mobile-alt fa-5x mb-3"></i>
                            <p>Placeholder: Person holding POS device<br>(Professional business photo)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Fitur Lengkap untuk Bisnis Anda</h2>
            <div class="feature-grid">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <h5 class="feature-title">Sales</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-users"></i></div>
                    <h5 class="feature-title">Parties</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h5 class="feature-title">Purchase</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-box"></i></div>
                    <h5 class="feature-title">Products</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h5 class="feature-title">Due List</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-dollar-sign"></i></div>
                    <h5 class="feature-title">Income</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-credit-card"></i></div>
                    <h5 class="feature-title">Expense</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-warehouse"></i></div>
                    <h5 class="feature-title">Stock</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-chart-pie"></i></div>
                    <h5 class="feature-title">Loss/Profit</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-file-alt"></i></div>
                    <h5 class="feature-title">Report</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-globe"></i></div>
                    <h5 class="feature-title">47+ Languages</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-coins"></i></div>
                    <h5 class="feature-title">Multi Currency</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-crown"></i></div>
                    <h5 class="feature-title">Subscription</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h5 class="feature-title">Dashboard</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-cash-register"></i></div>
                    <h5 class="feature-title">POS Sales</h5>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-boxes"></i></div>
                    <h5 class="feature-title">Inventory Sales</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section class="showcase-section">
        <div class="container">
            <h2 class="section-title">Antarmuka Aplikasi yang Modern</h2>
            <div class="mobile-mockups">
                <div class="mobile-mockup">
                    <div>
                        <i class="fas fa-mobile-alt fa-3x mb-2"></i>
                        <p>Dashboard<br>Interface</p>
                    </div>
                </div>
                <div class="mobile-mockup">
                    <div>
                        <i class="fas fa-shopping-cart fa-3x mb-2"></i>
                        <p>POS Sales<br>Interface</p>
                    </div>
                </div>
                <div class="mobile-mockup">
                    <div>
                        <i class="fas fa-chart-bar fa-3x mb-2"></i>
                        <p>Analytics<br>Interface</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Video Section -->
    <section class="demo-section">
        <div class="container">
            <h2 class="section-title">Demo Aplikasi</h2>
            <div class="video-container">
                <div class="text-center">
                    <i class="fas fa-play-circle fa-5x mb-3"></i>
                    <h4>Video Demo Aplikasi POS SAAS</h4>
                    <p>Placeholder for demo video</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <h2 class="section-title">Pilih Paket yang Tepat</h2>
            <div class="pricing-cards">
                <div class="pricing-card">
                    <h3 class="pricing-title">Free</h3>
                    <div class="pricing-price">Rp 0</div>
                    <div class="pricing-period">per bulan</div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> 1 Toko</li>
                        <li><i class="fas fa-check"></i> 100 Produk</li>
                        <li><i class="fas fa-check"></i> Basic Report</li>
                        <li><i class="fas fa-check"></i> Email Support</li>
                    </ul>
                    <button class="btn btn-outline-primary w-100">Get Started</button>
                </div>

                <div class="pricing-card featured">
                    <div class="pricing-badge">Popular</div>
                    <h3 class="pricing-title">Standard</h3>
                    <div class="pricing-price">Rp 299K</div>
                    <div class="pricing-period">per bulan</div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> 3 Toko</li>
                        <li><i class="fas fa-check"></i> 1000 Produk</li>
                        <li><i class="fas fa-check"></i> Advanced Report</li>
                        <li><i class="fas fa-check"></i> Priority Support</li>
                        <li><i class="fas fa-check"></i> Multi Currency</li>
                    </ul>
                    <button class="btn btn-primary w-100">Buy Now</button>
                </div>

                <div class="pricing-card">
                    <h3 class="pricing-title">Premium</h3>
                    <div class="pricing-price">Rp 499K</div>
                    <div class="pricing-period">per bulan</div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Unlimited Toko</li>
                        <li><i class="fas fa-check"></i> Unlimited Produk</li>
                        <li><i class="fas fa-check"></i> Custom Report</li>
                        <li><i class="fas fa-check"></i> 24/7 Support</li>
                        <li><i class="fas fa-check"></i> API Access</li>
                        <li><i class="fas fa-check"></i> White Label</li>
                    </ul>
                    <button class="btn btn-outline-primary w-100">Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Apa Kata Pelanggan Kami</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Aplikasi POS SAAS ini sangat membantu dalam mengelola toko pakaian saya. Interface yang mudah digunakan dan fitur yang lengkap."
                    </div>
                    <div class="testimonial-author">Sarah Johnson</div>
                    <div class="testimonial-company">Fashion Store Jakarta</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Sistem pelaporan yang detail dan analisis penjualan yang akurat membuat bisnis saya lebih efisien dan profitable."
                    </div>
                    <div class="testimonial-author">Ahmad Rizki</div>
                    <div class="testimonial-company">Butik Trendy Bandung</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Support multi-currency dan multi-language sangat membantu untuk ekspansi bisnis ke berbagai negara."
                    </div>
                    <div class="testimonial-author">Maria Santos</div>
                    <div class="testimonial-company">International Fashion</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <h2 class="section-title">Blog & Tips Bisnis</h2>
            <div class="blog-grid">
                <div class="main-blog-posts">
                    <article class="blog-post">
                        <div class="blog-image">
                            <i class="fas fa-image fa-3x"></i>
                            <p>Blog Image Placeholder</p>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title">10 Tips Meningkatkan Penjualan Toko Pakaian</h3>
                            <div class="blog-date">15 September 2024</div>
                            <p class="blog-excerpt">Pelajari strategi terbukti untuk meningkatkan penjualan dan keuntungan toko pakaian Anda dengan teknologi POS modern...</p>
                        </div>
                    </article>
                    
                    <article class="blog-post">
                        <div class="blog-image">
                            <i class="fas fa-image fa-3x"></i>
                            <p>Blog Image Placeholder</p>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title">Cara Mengelola Inventory dengan Efektif</h3>
                            <div class="blog-date">12 September 2024</div>
                            <p class="blog-excerpt">Manajemen stok yang baik adalah kunci sukses bisnis retail. Pelajari tips dan trik mengelola inventory...</p>
                        </div>
                    </article>
                    
                    <article class="blog-post">
                        <div class="blog-image">
                            <i class="fas fa-image fa-3x"></i>
                            <p>Blog Image Placeholder</p>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title">Tren Fashion 2024 dan Peluang Bisnis</h3>
                            <div class="blog-date">10 September 2024</div>
                            <p class="blog-excerpt">Ketahui tren fashion terkini dan bagaimana memanfaatkan peluang bisnis dengan sistem POS yang tepat...</p>
                        </div>
                    </article>
                </div>
                
                <div class="sidebar-posts">
                    <h4 class="mb-3">Artikel Populer</h4>
                    
                    <article class="sidebar-post">
                        <div class="sidebar-post-image"></div>
                        <div class="sidebar-post-content">
                            <h5 class="sidebar-post-title">Memilih POS System yang Tepat</h5>
                            <div class="sidebar-post-date">8 Sep 2024</div>
                        </div>
                    </article>
                    
                    <article class="sidebar-post">
                        <div class="sidebar-post-image"></div>
                        <div class="sidebar-post-content">
                            <h5 class="sidebar-post-title">Analisis Penjualan dengan Data</h5>
                            <div class="sidebar-post-date">5 Sep 2024</div>
                        </div>
                    </article>
                    
                    <article class="sidebar-post">
                        <div class="sidebar-post-image"></div>
                        <div class="sidebar-post-content">
                            <h5 class="sidebar-post-title">Tips Customer Service Terbaik</h5>
                            <div class="sidebar-post-date">3 Sep 2024</div>
                        </div>
                    </article>
                    
                    <article class="sidebar-post">
                        <div class="sidebar-post-image"></div>
                        <div class="sidebar-post-content">
                            <h5 class="sidebar-post-title">Strategi Marketing Digital</h5>
                            <div class="sidebar-post-date">1 Sep 2024</div>
                        </div>
                    </article>
                    
                    <article class="sidebar-post">
                        <div class="sidebar-post-image"></div>
                        <div class="sidebar-post-content">
                            <h5 class="sidebar-post-title">Otomatisasi Proses Bisnis</h5>
                            <div class="sidebar-post-date">28 Aug 2024</div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h5><i class="fas fa-cash-register me-2"></i>POS SAAS</h5>
                    <p>Solusi POS terdepan untuk bisnis retail modern dengan teknologi Flutter yang handal dan fitur lengkap.</p>
                </div>
                
                <div class="footer-section">
                    <h5>Fitur</h5>
                    <ul>
                        <li><a href="#">POS Sales</a></li>
                        <li><a href="#">Inventory Management</a></li>
                        <li><a href="#">Reports & Analytics</a></li>
                        <li><a href="#">Multi Store</a></li>
                        <li><a href="#">Mobile App</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Documentation</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h5>Download App</h5>
                    <div class="app-download-buttons">
                        <a href="#" class="app-download-btn mb-2">
                            <i class="fab fa-google-play fa-2x"></i>
                            <div>
                                <small>Get it on</small><br>
                                <strong>Google Play</strong>
                            </div>
                        </a>
                        <a href="#" class="app-download-btn">
                            <i class="fab fa-app-store fa-2x"></i>
                            <div>
                                <small>Download on</small><br>
                                <strong>App Store</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 POS SAAS. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.background = 'white';
                navbar.style.backdropFilter = 'none';
            }
        });

        // Feature boxes animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe feature boxes
        document.querySelectorAll('.feature-box').forEach(box => {
            box.style.opacity = '0';
            box.style.transform = 'translateY(20px)';
            box.style.transition = 'all 0.6s ease';
            observer.observe(box);
        });

        // Pricing card interactions
        document.querySelectorAll('.pricing-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                if (this.classList.contains('featured')) {
                    this.style.transform = 'scale(1.05)';
                } else {
                    this.style.transform = 'translateY(0) scale(1)';
                }
            });
        });
    </script>
</body>
</html>