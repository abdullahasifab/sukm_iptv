<?php require_once('sections/header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section" id="hero-section">
        <div class="container">
            <h1>BEST & CHEAPEST IPTV OF 2024</h1>
            <p>More than 10000+ All World TV Channels, VOD + Netflix, Zee5, Sony Liv, Hotstar, Prime Video, Series Available</p>

            <!-- Download Section -->
            <div class="row download-section">
                <!-- QR Codes -->
                <div class="col-md-4 text-center qr-codes">
                    <img src="assets/qr.png" alt="QR Code 1">
                    <p>Scan for latest updates</p>
                </div>

                <div class="col-md-4 d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="#" class="btn btn-danger text-white p-3 mb-3">LIMITED TRIAL AVAILABLE HERE</a>
                    <a href="download.php" class="btn btn-danger mb-2">DOWNLOAD APP</a>
                </div>

                <!-- QR Code 2 -->
                <div class="col-md-4 text-center qr-codes">
                    <img src="assets/qr.png" alt="QR Code 2">
                    <p>Scan for latest updates</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section py-5">
        <div class="container">
            <h1 class="text-danger">Features</h1>
            <div class="row justify-content-center text-center">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 rounded-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">What SUKM IPTV Provides</h5>
                            <p class="card-text">Full SD, HD, 4K Channels and packages. Best provider IPTV server, low-latency network, Full IPTV server, 24/7 Technical Support.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 rounded-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Why Buy SUKM IPTV</h5>
                            <p class="card-text">Dedicated server with 10Gbits Internet Speed, IPTV full package, World Channels with local cards, Instant Online Delivery, No Freeze!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="price">
        <div class="container my-5">
            <h1 class="text-danger">Pricing</h1>
            <div class="row text-center">
                <!-- 1 Month Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4>1 Month</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">PKR 350</h2>
                            <p class="card-text">Access for 1 month</p>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- 3 Month Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4>3 Months</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">PKR 900</h2>
                            <p class="card-text">Access for 3 months</p>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- 6 Month Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4>6 Months</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">PKR 1650</h2>
                            <p class="card-text">Access for 6 months</p>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
<!-- Contact -->
<section id="contact" class="contact-section py-5 full-size">
    <div class="container">
        <div class="row justify-content-center mx-auto">
            <div class="col-md-10">
                <h1 class="text-danger text-center mb-4">Contact Us</h1>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('sections/footer.php'); ?>
