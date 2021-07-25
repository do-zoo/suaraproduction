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
    <div class="loader">
        <div class="loader-cont">
            <img src="https://www.suaraproduction.com/img/loader/gif/loader_gif.gif" class="loader-gif">
        </div>
    </div>
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
                    <li><a href="https://www.suaraproduction.com/">HOME</a></li>
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
                    <li><a href="https://suaraproduction.com/#client-list">OUR CLIENT</a></li>
                    <li><a href="https://suaraproduction.com/#footer-section">CONTACT</a></li>
                    <li><a href="https://suaraproduction.com/#footer-section">ABOUT</a></li>
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


    <div class="detail-product">
        <div class="proper-cont">
            <div class="left-content">
                <div class="judul-content">
                    <h1>PROPER</h1>
                    <h2>PACK</h2>
                </div>
                <div class="kategori-item">

                    <?php foreach ($dataProperPack as $data) : ?>
                        <div class="cont-price-webinar" id="data<?= $data["id"]; ?>">
                            <div class="nama-kategori"><?= $data["kategori"];  ?>
                            </div>
                            <div class="id-paket"><?= $data["id"]; ?></div>
                            <div class="nama-paket"> <?= $data["nama"]; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="first-loader">
                <div class="loader-cont">
                    <img src="../../img/loader/gif/loader_gif.gif" class="loader-gif">
                </div>
            </div>

            <div class="right-content">
                <div class="price-cont">
                    <div class="price-isi">
                        <span>
                            <?= buatRp($dataProperPack[0]["harga"]); ?>
                        </span>
                    </div>
                </div>

                <div class="detail-tools">
                    <div class="tools-judul">
                        <span>Tools</span>
                    </div>
                    <div class="tools-isi">
                        <div>
                            <ul>
                                <li>Sony NX100 + video tripod + cameraman</li>
                                <li>(2x) Dison LED + (2x) Apurture + dome</li>
                                <li>3-5 additional laptop</li>
                                <li>2 unit 42” TV+Standing ( HDMI 15 m ) for promter / slide and Priview</li>
                                <li>Digital mixer, (2) wirelless mic, (2) 15” Yamaha DBR standing
                                    speaker</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="detail-main-power">
                    <div class="main-power-judul">
                        <span>Main Power</span>
                    </div>
                    <div class="main-power-isi">
                        <div class="isi-kanan">
                            <ul>
                                <li>Director</li>
                                <li>Floor Director</li>
                                <li>Zoom Host</li>
                                <li>Pin Crew</li>
                                <li>Admin</li>
                                <li>Telepromter/presentation
                                    Slide operator</li>
                            </ul>
                        </div>
                        <div class="isi-kiri">
                            <ul>
                                <li>3D Stage</li>
                                <li>Flyer</li>
                                <li>Lowerthird</li>
                                <li>Opening</li>
                                <li>Bumper Segment</li>
                                <li>Bumper Speaker</li>
                                <li>Closing</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="standard-cont">
            <div class="left-content">
                <div class="judul-content">
                    <h1>STANDARD</h1>
                    <h2>PACK</h2>
                </div>
                <div class="kategori-item">

                    <?php foreach ($dataStandardPack as $data) : ?>
                        <div class="cont-price-webinar" id="data<?= $data["id"]; ?>">
                            <div class="nama-kategori"><?= $data["kategori"];  ?>
                            </div>
                            <div class="id-paket"><?= $data["id"]; ?></div>
                            <div class="nama-paket"> <?= $data["nama"]; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="second-loader">
                <div class="loader-cont">
                    <img src="../../img/loader/gif/loader_gif.gif" class="loader-gif">
                </div>
            </div>

            <div class="right-content">
                <div class="price-cont">
                    <div class="price-isi">
                        <span>
                            <?= buatRp($dataStandardPack[0]["harga"]); ?>
                        </span>
                    </div>
                </div>
                <div class="detail-tools">
                    <div class="tools-judul">
                        <span>Tools</span>
                    </div>
                    <div class="tools-isi">
                        <div>
                            <ul>
                                <li>Sony mirrorless a 6500 + sony lens 18-105 F4 G + video tripod + cameraman</li>
                                <li>(4x) Dison LED</li>
                                <li>1-2 additional laptop</li>
                                <li>1 unit 42” TV+standing ( HDMI 15 m ) for Priview</li>
                                <li>Analog mixer, (2) wireless mic, 15” speaker</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="detail-main-power">
                    <div class="main-power-judul">
                        <span>Main Power</span>
                    </div>
                    <div class="main-power-isi">
                        <div class="isi-kanan">
                            <ul>
                                <li>Director</li>
                                <li>Floor Director</li>
                                <li>Zoom Host</li>
                                <li>Pin Crew</li>
                                <li>Admin</li>
                                <li>Telepromter/presentation
                                    Slide operator</li>
                            </ul>
                        </div>
                        <div class="isi-kiri">
                            <ul>
                                <li>2D Background</li>
                                <li>Flyer</li>
                                <li>Lowerthird</li>
                                <li>Opening</li>
                                <li>Bumper Segment</li>
                                <li>Bumper Speaker</li>
                                <li>Closing</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/ajax.js"></script>
</body>