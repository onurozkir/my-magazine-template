<?php include ('component/header.php'); ?>
<body class="dup-body">
<div class="dup-body-wrap">
    <header class="default-header">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <nav class="navbar navbar-expand-lg navbar-dark navbar-self">
                    <a href="index.php" class="logo-href navbar-brand"><img src="assets/img/logo.png"
                                                                            class="img-fluid head-logo" alt=""></a>
                    <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menubar d-flex align-items-center"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a href="index.php" class="nav-link navbar-left-link">Ana Sayfa</a>
                            </li>
                            <li class="nav-item ">
                                <a href="hakkimizda.php" class="nav-link navbar-left-link">Hakkımızda</a>
                            </li>
                            <li class="nav-item ">
                                <a href="sayilarimiz.php" class="nav-link navbar-left-link">Sayılarımız</a>
                            </li>
                            <li class="nav-item ">
                                <a href="iletisim.php" class="nav-link navbar-left-link">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </header>
    <section class="section-gap achivement-area contact-page" style="padding: 0;padding-top: 120px">
        <div class="container-fluid cont-header">
            <div class="row">
                <div class="header-content-text"><h3 class="about-title mb-70 text-white">İLETİŞİM</h3></div>
            </div>
        </div>
        <div class="container-fluid border-top-generic cont-wrapper">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 about-us-content-wrapper">
                            <h3 class="">Bize Ulaşın</h3>
                            <div class="form-area">
                                <form role="form" id="magazineContactForm" method="post" action="<?=getBaseUrl("mail.php")?>">
                                    <br style="clear:both">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="İsim Soyisim(*)"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Eposta(*)" required>
                                    </div>
                                    <div class="form-group ">
                                        <textarea class="form-control message-box-textarea" type="textarea" id="message" name="message"
                                                  placeholder="Mesajınız(*)" maxlength="255" rows="7"></textarea>
                                        <span class="help-block"><p id="characterLeft"
                                                                    class="help-block ">harf kaldı</p></span>
                                    </div>

                                    <button type="submit" id="submit" name="submit"
                                            class="primary-btn contact-btn">
                                        Gönder
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 about-us-content-wrapper">
                            <div class="social-area-wrapper">
                                <ul class="social">
                                    <li><a href="#"> <i class=" fa fa-facebook">   </i> </a></li>
                                    <li><a href="#"> <i class="fa fa-twitter">   </i> </a></li>
                                    <li><a href="#"> <i class="fa fa-youtube">   </i> </a></li>
                                </ul>
                                <div class="social-company-info">
                                    <p><span>İmtiyaz Sahibi: </span>SGB Gıda Limited Şirketi</p>
                                    <p><span>Adres: </span>Tepekule Kongre Merkezi Anadolu Caddesi No:40 Bayraklı -
                                        İZMİR</p>
                                    <p><span>Telefon: </span>0232 462 67 30</p>
                                    <p><span>E-posta: </span>info@tepekule.com.tr</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('component/footer.php'); ?>

