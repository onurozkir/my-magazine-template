<header class="default-header" style="position:relative; background-color: white">
    <div class="header-wrap">
        <div class="header-top d-flex justify-content-between align-items-center">
            <nav class="navbar navbar-expand-lg navbar-dark navbar-self">
                <a href="" class="logo-href navbar-brand"><img src="<?=getImgPath("logo.png")?>"
                                                                        class="img-fluid head-logo" alt=""></a>
                <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse main-menubar d-flex align-items-center"
                     id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="<?=getBaseUrl("index.php")?>" class="nav-link navbar-left-link">Ana Sayfa</a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?=getBaseUrl("hakkimizda.php")?>" class="nav-link navbar-left-link">Hakkımızda</a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?=getBaseUrl("sayilarimiz.php")?>" class="nav-link navbar-left-link">Sayılarımız</a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?=getBaseUrl("iletisim.php")?>" class="nav-link navbar-left-link">İletişim</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
</header>