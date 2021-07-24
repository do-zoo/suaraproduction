<?php
require 'functions.php';

$dataPaket = query("SELECT * FROM data_paket_webinar");





$dataProperPack = query("SELECT * FROM data_paket_webinar WHERE kategori = 'PROPER PACK'");

$dataStandardPack = query("SELECT * FROM data_paket_webinar WHERE kategori = 'STANDARD PACK'");


?>




<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Suara Production, Video editing, Video editing online, Video editing online Murah, Video Production,Suara Production ( jasa editing video recording animasi 2d design ), Audio editing, audio, video, wedding organizer, WO, Video Editing Tangerang Selatan, banten, house Production">
    <meta name="description" content="Suara Production is a full service video and audio production located in Tangerang Selatan, Indonesia. Suara Production is the leading production services company for Videography, Editing, Casting, Audio Post Production, and many more.">
    <link rel="icon" sizes="512x512" href="../../img/logo/my-logo/icon-suara-production-512.png" type="image/png">
    <title>Suara Production - Inget Gue</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://www.suaraproduction.com/",
            "logo": "https://www.suaraproduction.com/img/logo/my-logo/LOGO-SUARA-PRODUCTION-HITAM.png"
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DMLESTLEYR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DMLESTLEYR');
    </script>



</head>


<body>
    <header>
        <div class="menu">
            <div class="brand">
                <a href="https://www.suaraproduction.com" title="Suara Production">
                    <img src="../../img/logo/my-logo/LOGO-SUARA-PRODUCTION-BULETAN-HITAM.png" alt="logo">
                </a>
            </div>
            <div class="brand-mobile">
                <a href="https://www.suaraproduction.com" title="Suara Production">
                    <div class="image-brand-container">
                        <img src="../../img/logo/my-logo/LOGO-SUARA-PRODUCTION-HITAM.png" alt="logo">
                    </div>
                </a>
            </div>


            <nav class="navbar">
                <ul class="navbar-list">
                    <li><a href="index.html">HOME</a></li>
                    <li><a class="active" href="#our-services">OUR SERVICES</a>
                        <div class="sub-menu sub-menu-services">
                            <ul>
                                <li><a href="https://suaraproduction.com/services/comercial/index.php">Comercial</a></li>
                                <li><a href="https://suaraproduction.com/services/company-profile/index.php">Company Profile</a></li>
                                <li><a href="https://suaraproduction.com/services/digital-content/index.php">Digital Content </a></li>
                                <li><a href="https://suaraproduction.com/services/explainer-video/index.php">Explainer Video</a></li>
                                <li><a href="https://suaraproduction.com/services/live-stream-webinar/index.php">Live Stream / Webinar </a></li>
                                <li><a href="https://suaraproduction.com/services/training-video/index.php">Training Video</a></li>
                                <li><a href="https://suaraproduction.com/services/presentation-video/index.php">Presentation Video</a></li>
                            </ul>

                        </div>



                    </li>
                    <li><a href="#client-list">OUR CLIENT</a></li>
                    <li><a href="#footer-section">CONTACT</a></li>
                    <li><a href="#footer-section">ABOUT</a></li>
                </ul>
            </nav>




            <label id="toggle-menu">
                <i class="bi bi-list"></i>
            </label>
            <div class="social">
                <a href="https://api.whatsapp.com/send?phone=6281318423962&text=Hi%20Suara%20Production." target="_blank" class="social-item twitter"><i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i></a>
                <a href="https://www.youtube.com/channel/UC-jW62zINDEiHi0qfTS4RPQ" target="_blank" class="social-item youtube"><i class="bi bi-youtube" style="font-size: 1.5rem;"></i></a>
                <a href="https://www.instagram.com/suaraproduction/" target="_blank" class="social-item instagram"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
            </div>
        </div>
        <div class="icon-contact-overlay">
            <a href="https://api.whatsapp.com/send?phone=6281318423962&text=Hi%20Suara%20Production." target="_blank" rel="noopener noreferrer">
                <img src="../../img/logo/icon/whatsapp.png">
                <span>Chat with Us on WhatsApp</span>
            </a>
        </div>
    </header>
    <section class="container">
        <div class="header">
            <div class="frontLeft">
                <div class="content">
                    <div class="judul">
                        <span class="left">TANGSEL</span>
                        <span class="right">STREAM</span>
                    </div>
                    <div class="desc">
                        <span> Paket murah webinar dan streaming</span>
                    </div>
                    <div class="button">
                        <span>SEE OUR SERVICES</span>
                    </div>
                </div>
            </div>

            <div class="frontRight">
                <img src="../../img/services/webinar/SVG/frontRight.svg">
            </div>
            <div class="backLeft">
                <img src="../../img/services/webinar/SVG/backLeft.svg">
            </div>
            <div class="backRight"></div>
        </div>
        <div class="desc-product">
            <div class="desc-product-top">
                <div class="pricelist-container">
                    <div class="judul-paket">
                        <span class="gede">PROPER </span><span class="kecil">PACK</span>
                    </div>
                    <div class="pricelist">
                        <?php foreach ($dataProperPack as $data) : ?>
                            <div class="cont-price">
                                <div class="nama"><?= $data["nama"];  ?>
                                </div>
                                <div class="id-paket" style="display: none;">
                                    <?= $data["id"];  ?>
                                </div>
                                <div class="harga"> <?php echo buatRp($data["harga"]); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="illustration">
                    <img src="../../img/services/webinar/SVG/assets/right.svg">
                </div>
            </div>
            <div class="desc-product-bottom">
                <div class="pricelist-container">
                    <div class="judul-paket">
                        <span class="gede">STANDARD </span><span class="kecil">PACK</span>
                    </div>
                    <div class="pricelist">
                        <?php foreach ($dataStandardPack as $data) : ?>
                            <div class="cont-price">
                                <div class="nama"><?= $data["nama"];  ?>
                                </div>
                                <div class="id-paket" style="display: none;">
                                    <?= $data["id"];  ?>

                                </div>
                                <div class="harga"> <?php echo buatRp($data["harga"]); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="illustration">
                    <img src="../../img/services/webinar/SVG/assets/left.svg">
                </div>
            </div>
        </div>
        <div class="portfolio">
            <div class="image-gallery-container">
                <div class="image-gallery">
                    <?php for ($i = 0; $i < 30; $i++) : ?>
                        <img src="../../img/services/webinar/images/WEBINAR_LKPP_KETUA_MENTRI.png">
                    <?php endfor; ?>
                </div>
            </div>

            <div class="client-webinar">
                <div class="judul-client">WE HAVE DESERVED</div>
                <div class="client-cont">
                    <?php $i = 0; ?>
                    <?php for ($i; $i < 10; $i++) : ?>
                        <img src="../../img/logo/client-logo/SVG/aikido.svg">
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="closing">
            <div class="kata-penutup">
                <h1>Kata-Kata Penutupan</h1>
            </div>
            <div class="bg-image-bottom">
            </div>
        </div>
    </section>


    <footer id="footer-section">
        <div class="footer-content">
            <section class="footer-brand">
                <a href="#">
                    <img src="../../img/bottom/LOGO-SUARA-PRODUCTION-PUTIH.png" alt="Suara Production">
                </a>
                <span>Video Production House Indonesia</span>
            </section>
            <section class="footer-about">
                <div class="footer-about-content">
                    <h1>About Us</h1>
                    <p>Suara Production is a full service video and audio production located in Tangerang Selatan, Indonesia. Suara Production is the leading production services company for Videography, Editing, Casting, Audio Post Production, and many more.</p>
                </div>
            </section>
            <section class="footer-contact">
                <div class="container-contact">
                    <h1>Contact us</h1>
                    <div class="contact-content address">
                        <h4>Address :</h4>
                        <a href="https://g.page/suaraproduction?share" target="_blank">JL Pembangunan, No. 46, Jombang, Ciputat, Jombang, Tangerang, Kota Tangerang Selatan, Banten 15414</a>
                    </div>
                    <div class="contact-content no-telpon">
                        <h4>Telepon / Whatsapp:</h4>
                        <a href="https://api.whatsapp.com/send?phone=6281318423962&text=Hi%20Suara%20Production." target="_blank">(+62) 813-1842-3962</a>
                    </div>
                    <div class="contact-content e-mail">
                        <h4>Email :</h4>
                        <a href="mailto:suaraproduction@gmail.com" target="_blank">suaraproduction@gmail.com</a>
                    </div>
                    <br><br>
                </div>
            </section>
        </div>
        <div class="copyright">
            <p>SUARA PRODUCTION Media © 2021 – All rights reserved.</p>
        </div>
    </footer>


    <script src="js/script.js"></script>
</body>

</html>