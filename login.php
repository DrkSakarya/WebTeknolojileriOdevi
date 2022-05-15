<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <?php
    $email = "dorukan.uysal@ogr.sakarya.edu.tr";
    $password = "g201210040";
    $form_page = '<h1>Login</h1>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="InputEmail">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Eposta adresini giriniz." name="email" required>
        </div>
        <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>'
    ?>
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
            <div class="col-md menu-item active">
                <a href="login.php">Login</a>
            </div>
            <div class="col-md menu-item">
                <a href="iletisim.php">İletişim</a>
            </div>
        </div>
    </div>
    <!--Navbar End-->

    <!--Content Start-->
    <div class="container main-content">
        <div class="row">
            <div class="col">
                <?php if(isset($_POST['email']) && isset($_POST['password'])){
                    if($_POST['email'] == $email && $_POST['password'] == $password){
                        echo "<h1>Hoşgeldiniz g201210040, giriş başarılı.</h1>";
                    }else{
                        echo "<h1>Hatalı Giriş!</h1>".$form_page;
                    }
                    }else{
                        echo $form_page;
                    }

                ?>

            </div>
        </div>
    </div>
    <!--Content End-->

    <!--Footer Start-->
    <div class="container-fluid footer">
        <div class="row">
            <div class="col text-center">
                <p>&copy; Copyright
                    <?php echo date('Y'); ?>
                </p>
            </div>
        </div>
    </div>
    <!--Footer End-->
    <script src="js/script.js"></script>
</body>

</html>