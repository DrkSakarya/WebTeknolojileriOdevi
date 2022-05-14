<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Gönderildi</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>

<body>
    <!--Navbar Start-->
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md menu-item">
                <a href="index.php">Hakkında</a>
            </div>
            <div class="col-md menu-item">
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
            <div class="col-md menu-item active">
                <a href="iletisim.php">İletişim</a>
            </div>
        </div>
    </div>
    <!--Navbar End-->

    <!--Content Start-->
    <div class="container main-content">
        <div class="row">
            <div class="col">
                <h1>Mesajınız başarıyla gönderildi!</h1>
                <h2>Mesaj detayları aşağıdadır.</h2>
                <hr>
                <table class="table">
                    <?php


                    foreach ($_POST as $key => $value) {
                        if ($key == "gridCheck") {
                            continue;
                        }
                        if ($key == "gonder") {
                            continue;
                        }
                        if ($key == "message") { $baslik = "Mesaj"; }
                        if ($key == "firstName") { $baslik = "Ad"; }
                        if ($key == "lastName") { $baslik = "Soyad"; }
                        if ($key == "email") { $baslik = "E-mail"; }
                        if ($key == "age") { $baslik = "Yaş"; }
                        if ($key == "gender") { $baslik = "Cinsiyet"; }
                        echo "<tr>";
                        echo "<td>";
                        echo $baslik;
                        echo "</td>";
                        echo "<td>";
                        echo $value;
                        echo "</td>";
                        echo "</tr>";
                    }


                    ?>
                </table>
            </div>
        </div>
    </div>
    <!--Content End-->

    <!--Footer Start-->
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