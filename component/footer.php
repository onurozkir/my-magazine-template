<footer class="section-gap footer-widget-area" style="padding: 40px 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img src="<?= getBaseUrl("assets/img/logo.png") ?>" class="img-fluid footer-logo" alt="">
            </div>
            <div class="col-md-6 menu-tabs">
                <ul class="list-inline footer-menu">
                    <li class="list-inline-item menu-item"><a href="<?= getBaseUrl("index.php") ?>">Ana Sayfa</a></li>
                    <li class="list-inline-item menu-item"><a href="<?= getBaseUrl("hakkimizda.php") ?>">Hakkımızda</a>
                    </li>
                    <li class="list-inline-item menu-item"><a
                                href="<?= getBaseUrl("sayilarimiz.php") ?>">Sayılarımız</a></li>
                    <li class="list-inline-item menu-item"><a href="<?= getBaseUrl("iletisim.php") ?>">İletişim</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-mail">
                <?= mailAdress() ?>
            </div>
        </div>
    </div>
</footer>
<!--<script src="--><?//=js('vendor/jquery-2.2.4.min.js')?><!--"></script>-->
<!--<script src="--><?//=js('popper.min.js')?><!--"></script>-->
<!--<script src="--><?//=js('vendor/bootstrap.min.js')?><!--"></script>-->
<!--<script src="--><?//=js('sweetalert2.all.js')?><!--"></script>-->
<!--<script src="--><?//=js('jquery.ajaxchimp.min.js')?><!--"></script>-->
<!--<script src="--><?//=js('jquery.validate.js')?><!--"></script>-->
<!--<script src="--><?//=js('owl.carousel.min.js')?><!--"></script>-->
<!--<script src="--><?//=js('jquery.magnific-popup.min.js')?><!--"></script>-->
<!--<script src="--><?//=js('main.js')?><!--"></script>-->
<script src="<?= jsBuild('app.min.js') . '?' . jsVersion() ?>"></script>
<script>
    <?php
    if (isset($_SESSION['type'])) {
        if($_SESSION['type'] === 'success') { ?>
            swal("Teşekkürler", "<?=$_SESSION['message']?>", "<?=$_SESSION['type']?>");
    <?php } elseif($_SESSION['type'] === 'success') { ?>
            swal("Malesef...", "<?=$_SESSION['message']?>", "<?=$_SESSION['type']?>");
    <?php }

    unset($_SESSION['type']);
    unset($_SESSION['message']);
    } ?>
</script>
</body>
</html>