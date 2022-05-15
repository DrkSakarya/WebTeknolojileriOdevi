<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>

<body>
    <!--Navbar Başlangıç-->
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md menu-item">
                <a href="index.php">Hakkında</a>
            </div>
            <div class="col-md menu-item active">
                <a href="ozgecmis.php">Özgeçmiş</a>
            </div>
            <div class="col-md menu-item">
                <a href="sehrim.php">Şehrim</a>
            </div>
            <div class="col-md menu-item">
                <a href="mirasimiz.php">Mirasımız</a>
            </div>
            <div class="col-md menu-item">
                <a href="hobilerim.php">İlgi Alanlarım</a>
            </div>
            <div class="col-md menu-item">
                <a href="login.php">Login</a>
            </div>
            <div class="col-md menu-item">
                <a href="iletisim.php">İletişim</a>
            </div>
        </div>
    </div>
    <!--Navbar Bitiş-->

    <!--İçerik Başlangıç-->
    <div class="container main-content">
        <div class="row">
            <div class="col">
                <!-- Semantik etiketler ve benimle ilgili eğitim bilgileri içeren özgeçmiş/özgeçmiş sayfası
 -->
                <header class="cv-header">
                    <h1>Özgeçmiş</h1>
                </header>
                <main class="cv-main">
                    <aside class="cv-aside">
                        <h2>Profil</h2>
                        <img class="cv-photo" src="img/pp.png" width="70%" class="img-fluid">
                        <p>
                            Merhaba, Ben Dorukan. Sakarya Üniversitesi Bilgisayar Mühendisliği öğrencisiyim. Çocukluğumdan beri teknoloji ile iç içe olmayı seviyorum. 
                        </p>
                    </aside>
                    <section class="cv-section">
                        <h2>Eğitim</h2>
                        <ul class="cv-list">
                            <li class="cv-item">
                                <h3>Sakarya Üniversitesi</h3>
                                <p>Bilgisayar Mühendisliği</p>
                                <p>2020 - Devam</p>
                            </li>
                            <li class="cv-item">
                                <h3>Kırklareli Fen Lisesi</h3>
                                <p>Sayısal</p>
                                <p>2016 - 2019</p>
                            </li>
                            
                        </ul>
                    </section>
                    <section class="cv-section">
                        <h2>Yetenekler</h2>
                        <ul class="cv-list">
                            <li class="cv-item">
                                <h3>Javascript</h3>
                                <p>Orta Düzey</p>
                            </li>
                            <li class="cv-item">
                                <h3>PHP</h3>
                                <p>Orta Düzey</p>
                            </li>
                            <li class="cv-item">
                                <h3>HTML</h3>
                                <p>Orta Düzey</p>
                            </li>
                            <li class="cv-item">
                                <h3>CSS</h3>
                                <p>Orta Düzey</p>
                            </li>
                        </ul>
                    </section>
                    <section class="cv-section">
                        <h2>Deneyim</h2>
                        <ul class="cv-list">
                            <li class="cv-item">
                                <h3>Türk Hava Kurumu</h3>
                                <p>Genç Kanat</p>
                                <p>2017</p>
                            </li>
                            <li class="cv-item">
                                <h3>Tema</h3>
                                <p>Gönüllü</p>
                                <p>2018</p>
                            </li>
                        </ul>
                    </section>

                </main>
                <footer class="cv-footer">
                    <!-- Bağlantı Bilgisi-->
                    <ul class="cv-list cv-footer-list">
                        <li class="cv-item">
                            <h3>Adres</h3>
                            <p>Aydınevler 3.Kısım Lüleburgaz/Kırklareli</p>
                        </li>
                        <li class="cv-item">
                            <h3>E-posta</h3>
                            <p>
                                <a href="mailto:
                                dorukan.uysal@ogr.sakarya.edu.tr">
                                dorukan.uysal@ogr.sakarya.edu.tr </a>
                            </p>
                        </li>
                        <li class="cv-item">
                            <h3>Telefon</h3>
                            <p>
                                <a href="tel:0555555555">
                                    05396855657</a>
                            </p>
                        </li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
    <!--İçerik Bitiş-->

    <!--Footer -->
    <div class="container-fluid footer">
        <div class="row">
            <div class="col text-center">
                <!-- add copyright symbol with current year -->
                <p>&copy; Copyright
                    <?php echo date('Y'); ?>
                </p>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>