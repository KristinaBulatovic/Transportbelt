<!-- Wrap all page content here -->
<body id="pocetna" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <div class="logoFasic">
                <a href="<?php echo site_url("index.php/welcome/index/#pocetna"); ?>"><img
                        src="<?= base_url("assets/img/logo.png") ?>" class="imgLogo"></a>
            </div>
            <div class="meniFasic">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url("index.php/welcome/index/#naslovna"); ?>">Naslovna</a></li>
                        <li><a href="<?php echo site_url("index.php/welcome/index/#o_nama"); ?>">O nama</a></li>
                        <li><a href="<?php echo site_url("index.php/welcome/index/#usluge"); ?>">Usluge</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"
                               href="<?php echo site_url("index.php/welcome/index/#proizvodi"); ?>">Proizvodi<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url("index.php/welcome/proizvod1"); ?>">Gumene transportne
                                        trake</a></li>
                                <li><a href="<?php echo site_url("index.php/welcome/proizvod2"); ?>">Klinasto - zupčasto remenje
                                    </a></li>
                                <li><a href="<?php echo site_url("index.php/welcome/proizvod3"); ?>">Pljosnato-pogonsko
                                        remenje - Extramultus</a></li>
                                <li><a href="<?php echo site_url("index.php/welcome/proizvod4"); ?>">PVC i PU
                                        transportne trake</a></li>
                                <li><a href="<?php echo site_url("index.php/welcome/proizvod5"); ?>">Gumeno - tehnička
                                        roba</a></li>
                                <li><a href="<?php echo site_url("index.php/welcome/proizvod6"); ?>">Usluge - servis</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url("index.php/welcome/index/#lokacija"); ?>">Lokacija</a></li>
                        <li><a href="<?php echo site_url("index.php/welcome/index/#kontakt"); ?>">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </div>
</nav>


<br><br><br><br><br>

<div class="container-fluid">
    <div class="row content">
        <div class="container">

            <h2 class="text-center">Pljosnato - pogonsko remenje - Extramultus</h2>
            <br>
<div class="col-md-6">
            <img src="<?= base_url("assets/img/images5.jpg") ?>"
                 style="width:90%">
        </div>
            <p style= "text-align: left">Izrađuje se u više kombinacija prema nameni, odnosno vrsti materijala, konstrukciji,
                dezenu, debljini, jačini, temeraturnom području i dr. Najčešće kombinacije materijala: poliamid/tekstil,
                tekstil/tekstil, elastomer/elastomer, elastomer/tekstil, tekstil/koža, koža/koža. Extramultus remenje ima
                široku primenu kao pljosnato pogonsko remenje za prenos snage u farmaceutskoj, prehrambenoj, hemijskoj,
                papirnoj i grafičkoj industiji kao i u drugim oblastima. </p>



            <br><hr><br>

            <h3 class="text-center">Obaveštenje</h3>
            <br>
            <p class="text-justify">Molimo Vas da pre nego što naručite transportnu traku ili drugu
                gumeno-tehničku robu pažljivo izučite i definišete vaše potrebe i zahteve, jer već
                isporučenu robu u slučaju da ne odgovara vašim potrebama nismo u mogućnosti da zamenimo
                ili da vam vratimo uložena novčana sredstva.<br><br>

                Pravo na zamenu ili povraćaj robe je moguće samo u slučaju da ista ne zadovoljava
                standarde i zahteve koji su definisani JUS ili DIN standardom ili ako roba kvantitativno
                ne zadovoljava vašem zahtevu. Za svu našu robu imate pravo da tražite prateći sertifikat
                proizvođača o kvalitetu.<br><br>

                Transportbelt d.o.o.</p><br>

            <h3 class="text-center">Aktuelnosti</h3>
            <br>
            <p class="text-justify">U oblasti projektovanja, proizvodnje, prodaje i servisiranja transportnih traka
                "Transportbelt" je svrstan u lidera u regionu. Nudimo proizvode koji odgovaraju svim svetskim
                zahtevima i standardima. Kompletan naš asortiman je u skladu s DIN standardom i zadovoljavaju sve
                najsavremenije zahteve koje današnje tržište zahteva.</p>


            <br><br><br><hr><br>

</div>
</div>
</div>



<div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">

        <ul class="list-inline center-block">
            <li><a href="https://www.facebook.com/Transport-Belt-1099229470119542"><img src="<?=base_url("assets/img/fb.png")?>"></a></li>
            <li><a href="http://twitter.com"><img src="<?=base_url("assets/img/tw.png")?>"></a></li>
            <li><a href="http://google.com"><img src="<?=base_url("assets/img/gplus.png")?>"></a></li>
            <li><a href="http://pinterest.com"><img src="<?=base_url("assets/img/p.png")?>"></a></li>
        </ul>

    </div>
    <!--/col-->
</div>
<!--/container-->

</div><!--/wrap-->

<div id="footer">
    <div class="container">
        <p class="text-muted">http://www.transportbelt.rs/</p>
    </div>
</div>

<ul class="nav pull-right scroll-top">
    <li><a href="#" title="Idite na vrh"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div id="modalCarousel" class="carousel">

                    <div class="carousel-inner">

                    </div>

                    <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i
                            class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i
                            class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
