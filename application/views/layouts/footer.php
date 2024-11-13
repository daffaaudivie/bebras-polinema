<!-- Footer -->
<footer>
    <!-- Main Footer -->
    <div class="footer-main py-4 bg-light">
        <div class="container">
            <div class="row">
                <!-- Logo and Address Section -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <img src="<?php echo base_url('assets/images/polinema.png'); ?>" alt="Polinema" class="footer-logo me-2" style="width: 70px;"> <!-- Increased width -->
                        <img src="<?php echo base_url('assets/images/bebras-indonesia.png'); ?>" alt="Bebras Indonesia" class="footer-logo" style="width: 200px;"> <!-- Increased width -->
                    </div>
                    <p class="text-muted small mb-0">
                        Soekarno Hatta Street No.9 Malang 65141 Jatimulyo,<br>
                        Kec. Lowokwaru, Malang, East Java - Indonesia
                    </p>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <h5 class="footer-title">Contact Information</h5>
                    <div class="contact-info">
                        <p class="text-muted small mb-1">E-mail: mail@bebras.or.id</p>
                        <p class="text-muted small mb-1">http://bebras.or.id</p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 mb-4 mb-lg-0">
                    <h5 class="footer-title">Quick Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted small">Pendaftaran</a></li>
                        <li><a href="#" class="text-muted small">Bebras Challenge</a></li>
                        <li><a href="#" class="text-muted small">About</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div class="col-lg-3">
                    <h5 class="footer-title">Follow Us</h5>
                    <div class="social-links">
                        <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Footer -->
    <div class="footer-copyright py-3 bg-dark">
        <div class="container">
            <p class="text-center text-white small mb-0">
                Copyright © 2024. All rights reserved Politeknik Negeri Malang
            </p>
        </div>
    </div>
</footer>


    <style>
    /* Footer Styles */
    footer {
        font-family: Arial, sans-serif;
    }

    .footer-main {
        background-color: #f8f9fa;
    }

    .footer-title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 1.2rem;
    }

    .footer-logo {
        height: auto;
        object-fit: contain;
    }

    .social-links a {
        display: inline-block;
        width: 32px;
        height: 32px;
        line-height: 32px;
        text-align: center;
        border-radius: 50%;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        background-color: #e9ecef;
        text-decoration: none;
    }

    /* Link Styles */
    footer a {
        text-decoration: none;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: #0056b3 !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .footer-title {
            margin-bottom: 1rem;
        }
        
        .social-links {
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 767px) {
        .footer-main {
            text-align: center;
        }
        
        .social-links {
            justify-content: center;
            display: flex;
        }
        
        .contact-info {
            margin-bottom: 1.5rem;
        }
    }
    </style>

    <!-- Font Awesome untuk icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">