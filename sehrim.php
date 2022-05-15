<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/css/splide.min.css">
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
                <a href="index.php">Hakkımda</a>
            </div>
            <div class="col-md menu-item">
                <a href="ozgecmis.php">Özgeçmiş</a>
            </div>
            <div class="col-md menu-item active">
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
                <section class="splide" aria-label="Sehrim Slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide"><a href="1.php"><img class="img-fluid" src="img/1.jpg"></a></li>
                            <li class="splide__slide"><a href="2.php"><img class="img-fluid" src="img/2.jpg"></a></li>
                            <li class="splide__slide"><a href="3.php"><img class="img-fluid" src="img/3.jpg"></a></li>
                            <li class="splide__slide"><a href="4.php"><img class="img-fluid" src="img/4.jpg"></a></li>
                        </ul>
                    </div>
                </section>
                <p> Türkiye'nin Kırklareli iline bağlı bir ilçedir. İlçenin sınırları dahilinde altı belde ve otuz köy bulunmaktadır. 
                    Çorlu, Çerkezköy, Edirne ve Tekirdağ'dan sonra Doğu Trakya'nın beşinci en büyük yerleşim yeridir. Kırklareli'nin güneyinde, sanayisi ve tarımı ile öne çıkan Lüleburgaz, söz konusu ilin en büyük ve en gelişmiş ilçesidir.</p>
                <p>Lüleburgaz ve civarı milattan önceki dönemde Trak, Büyük İskender ve Roma İmparatorluğu hakimiyetine girdi. Roma İmparatorluğu'nun bölünme döneminde Bizans egemenliğine girdi. Lüleburgaz, Osmanlı'nın kuruluş döneminde Osmanlı'nın eline geçti.

Edirne Vilayet Matbaası Müdürü Şevket Dağdeviren'in yazdığı 1892 tarihli salnameye göre;

Kırkkilise sancağının ikinci sınıf bir kazası olan Lüleburgaz kazası içinde 2 nahiye ve 30 köyde 3492 evde 14950 nüfus bulunur. Kaza içinde 22 cami ve bir mescit vardır. Büyük caminin harem avlusunda 17 odalı bir medrese vardır. Kazada 20 okul, telgrafhane, belediye dairesi, jandarma dairesi, aşar ambarı, büyük saat kulesi, 2 hamam, 20 çeşme, su kemeri ve çömlekhane vardır.[2]

14. yüzyıldan 1919'a kadar Osmanlı egemenliğinde kalan Lüleburgaz, Türk Kurtuluş Savaşı'nın önemli kongrelerinden Trakya Paşaeli Müdafaa-i Hukuk Cemiyeti'nin düzenlediği Lüleburgaz Kongresi'ne sahne oldu. Sevr Antlaşması'ndan sonra yöre Yunanlarca işgal edildi. Yöre, işgalden ancak Mudanya Mütarekesi'nden sonra kurtulabildi.</p>
                <p>Çok ünkü olan Dere Geliyor Dere, Ah Tren Kara Tren şarkısı Lüleburgaz yöresine aittir.</p>
                <p></p>
                <p></p>

            </div>
        </div>
    </div>
    <!--İçerik Bitiş-->


    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/js/splide.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        new Splide('.splide').mount();
    </script>
</body>

</html>