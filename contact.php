<?php
include('connection.php');
if(isset($_POST['saqla']))
{   $ismi = $_POST['ismi'];
    $gmail = $_POST['gmail'];
    $telefon = $_POST['telefon'];
    $xabar = $_POST['xabar'];
$sql = " INSERT INTO contact2(`ismi`, `gmail`, `telefon`, `xabar`)
 VALUES (' $ismi','$gmail','$telefon',' $xabar') ";

    if ($connection->query($sql)) 
    {
        ?>
      <script type="javascript">alert("Saqlandi")</script>
      <?php
    } else echo 'xato!' . $connection->error;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fashions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Haqimizda</a>
                    <a class="text-body mr-3" href="">Bog`lanish</a>
                    <a class="text-body mr-3" href="">Yordam</a>
                    <a class="text-body mr-3" href="">Savollar</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mening hisobim</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Sign in</button>
                            <button class="dropdown-item" type="button">Sign up</button>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">UZ</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EN</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Modalar</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Olami</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mahsulot qidirish">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Xizmat ko`rsatish</p>
                <h5 class="m-0">+998919968382</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Mahsulotlar</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ko'ylaklar <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Erkaklar libosi</a>
                                <a href="" class="dropdown-item">Ayollar libosi</a>
                                <a href="" class="dropdown-item">Bolalar libosi</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Ko'ylaklar</a>
                        <a href="" class="nav-item nav-link">Jensilar</a>
                        <a href="" class="nav-item nav-link">Suzish kiyimi</a>
                        <a href="" class="nav-item nav-link">Pijama kiyimi</a>
                        <a href="" class="nav-item nav-link">Sport kiyimlari</a>
                        <a href="" class="nav-item nav-link">Kombinzonlar</a>
                        <a href="" class="nav-item nav-link">Oyoq kiyimlar</a>
                        <a href="" class="nav-item nav-link">Kurtkalar</a>
                        <a href="" class="nav-item nav-link">Oyoq kiyimlari</a>
                        <a href="" class="nav-item nav-link">Qo`l soatlar</a>
                        <a href="" class="nav-item nav-link">Sumkalar</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Modalar</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Olami</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Bosh sahifa</a>
                            <a href="shop.html" class="nav-item nav-link">Modalar</a>
                            <a href="detail.html" class="nav-item nav-link">Tovarlar tavsilotlari</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sahifalar <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Xarid savati</a>
                                    <a href="checkout.html" class="dropdown-item">Ro'yxatdan o'chirilish</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Bog`lanish</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- navbar end -->

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Sahifa</a>
                    <span class="breadcrumb-item active">Bog`lanish</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Bog`lanish</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <!-- <form action="" method="post">
                        <div class="control-group">
                            <input name="ismi" type="text" class="form-control" placeholder="Ismingizni kiriting"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="email" type="email" class="form-control" placeholder="Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="mavzu" type="text" class="form-control" placeholder="Mavzu"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="xabar" class="form-control" rows="8" placeholder="Xabar"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name="saqla" >Xabar yuborish</button>
                        </div>
                    </form> -->

                    <form action="" method="post">

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="ismi" type="text" class="form-control" placeholder="Isminggiz" aria-label="ism" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input name="gmail" type="text" class="form-control" placeholder="gmail" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">+ 99 8919968382</span>
  <input name="telefon" type="text" class="form-control" placeholder="Raqaminggiz" aria-label="ism" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <textarea name="xabar" class="form-control" aria-label="With textarea"></textarea>
  <span class="input-group-text">Xabaringgizni yozing</span>
</div>
<br>

<input type="submit" value="saqlash" name="saqla" class="btn btn-primary">

</form>


=
                    
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11939.825353480204!2d60.61684654237856!3d41.570189550812394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfcec63d012a49%3A0xa2280e571ee2fa3e!2sMuhammad%20Al-%D0%A5orazmiy%20nomidagi%20Toshkent%20Axborot%20Texnologiyalari%20universiteti%20Urganch%20filiali!5e0!3m2!1sru!2s!4v1685390740035!5m2!1sru!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><a href="https://www.google.com/maps/place/Muhammad+Al-%D0%A5orazmiy+nomidagi+Toshkent+Axborot+Texnologiyalari+universiteti+Urganch+filiali/@41.5701896,60.6168465,15z/data=!4m6!3m5!1s0x41dfcec63d012a49:0xa2280e571ee2fa3e!8m2!3d41.5704886!4d60.6315829!16s%2Fg%2F11cs18wl4w?hl=ru-KG&entry=ttu">Uzbekiston,Xorazm viloyati Urganch shaxri Al-Xorazmiy 118-uy</a></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>latofatqoldosheva1011@gmail.com/p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+998919968382</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Biz bilan bog`laning</h5>
                <p class="mb-4">Biz sizga eng sifatli mahsulotlardan tayyorlangan modalarni taqdim qilamiz.Bizda yangiliklar juda ham ko`p biz bilan doimiy aloqada bo`ling!</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Uzbekiston,Xorazm viloyati ,Urganch shaxri.</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>latofatqoldosheva1011@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+998919968382</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Modalar olami</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sahifalar</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Modalar</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Tovar tavsilotlari</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Xizmatlar</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sahifalar</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Bog`lanish</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Mening hisobim</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bosh sahifa</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bizning modalar</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Tovar tavsilotlari</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Xarid savati</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Ro`yxatdan o`chirish</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Bog`lanish</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Ma`lumotlar</h5>
                        <p>Xorazm bo`ylab tekin dastavka.</p>
                        
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email adress">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Yuborish</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Ijtimoiy sahifa</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Modalar olami</a>Xorazm viloyari Urganch shaxri Al-Xorazmiy ko`cha 184-uy
                    
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>