<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
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
                <h1>İletişim Formu</h1>
                <form action="iletisim-check.php" method="POST">
                    <div class="form-group">
                        <label for="nameField">Adınız</label>
                        <input type="text" class="form-control" id="nameField" placeholder="Adınızı Giriniz" name="firstName">
                    </div>
                    <div class="form-group">
                        <label for="surnameField">Soyadınız</label>
                        <input type="text" class="form-control" id="surnameField" placeholder="Soyadınızı Giriniz" name="lastName">
                    </div>
                    <div class="form-group">
                        <label for="ageField">Yaşınız</label>
                        <input type="number" class="form-control" id="ageField" placeholder="Yaşınızı Giriniz" name="age">
                    </div>
                    <div class="form-group">
                        <label for="genderField">Cinsiyetiniz</label>
                        <select class="form-control" id="genderField" name="gender">
                            <option value="">Cinsiyet Seçiniz</option>
                            <option value="Erkek">Erkek</option>
                            <option value="Kadın">Kadın</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="emailField">E-Mail Adresiniz</label>
                        <input type="text" class="form-control" id="emailField" placeholder="E-Mail Adresinizi Giriniz" name="email">
                    </div>
                    <div class="form-group">
                        <label for="messageField">Mesajınız</label>
                        <textarea class="form-control" id="messageField" rows="3" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                <a href="#">Kullanım Şartlarını</a> ve <a href="#">Gizlilik Politikasını</a> kabul ediyorum.
                            </label>
                        </div>
                    </div>
                    <span id="errorMessage" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lütfen tüm alanları doldurunuz.">
                        <button id="submitButton" disabled type="submit" class="btn btn-primary" name="gonder">
                            Gönder
                        </button>
                    </span>
                    <button type="reset" class="btn btn-secondary">Temizle</button>
                </form>
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
    <script src="js/contact-validate.js"></script>
</body>

</html>