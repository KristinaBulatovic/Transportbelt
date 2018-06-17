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
                                <li><a href="<?php echo site_url("index.php/welcome/proizvod2"); ?>">Klinasto - zupčasto
                                        remenje
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


<div class="container">
    <!-- Carousel
  ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?= base_url("assets/img/img1.jpg") ?>">
            </div>

            <div class="item">
                <img src="<?= base_url("assets/img/img2.jpg") ?>">
            </div>

            <div class="item">
                <img src="<?= base_url("assets/img/img3.jpg") ?>">
            </div>

            <div class="item">
                <img src="<?= base_url("assets/img/img4.jpg") ?>">
            </div>

            <div class="item">
                <img src="<?= base_url("assets/img/img5.jpg") ?>">
            </div>
 
            <div class="item">
                <img src="<?= base_url("assets/img/img6.jpg") ?>">
            </div>

            <div class="item">
                <img src="<?= base_url("assets/img/img7.jpg") ?>">
            </div>

        </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!-- /.carousel -->


<!-- Begin page content -->
<div class="divider" style="background-color: black" id="naslovna"></div>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header text-center">
            <h1>Dobro došli na našu web prezentaciju!</h1>
        </div>

        <p class="lead text-justify">
            Predstavljamo Vam web prezentaciju našeg preduzeća d.o.o. Transportbelt.<br><br>
            Skoro pola veka u oblasti projektovanja, proizvodnje, prodaje i servisa transportnih traka
            svrstavaju "Transportbelt" u lidera u regionu. Mi predlažemo samo proizvode koji odgovaraju svim
            svetskim zahtevima i standardima. Svi naši proizvodi su u skladu s DIN standardom i zadovoljavaju
            sve najsavremenije zahteve koje današnje tržište zahteva. <br><br>
            Osim toga uvek smo spremni da odgovorimo na izazove koje pred nas stavljaju naši kupci i da svojim
            iskustvom i znanjem pomognemo u odabiru proizvoda koji bi najoptimalnije i najracionalnije ispunio
            sve zahteve naših klijenata.
        </p>

        <hr>

        <div class="divider"></div>

    </div>
</div>


<div class="divider"></div>

<section class="bg-1">
    <div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>

<div class="divider" id="o_nama"></div>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="text-center">Ukratko o nama</h1>

        <hr>

        <p class="text-justify">
            "Transportbelt" je preduzeće za proizvodnju, trgovinu i usluge gumarsko-hemijskim proizvodima koje
            nastavlja dugogodišnju tradiciju plasmana i distribucije gumenih proizvoda koja je ostvarivana preko
            "Balkanbelt" Suva Reka i Beograd.
        </p>

        <p>
            "Transportbelt" je specijalizovan za plasmen gumarsko-hemjskih proizvoda, gumarsko-tehničke robe, proizvoda
            od PVC-a
            i pružanja usluga servisiranja u oblasti gume i plastike.
        </p>


        <hr>

        <div class="divider"></div>

    </div>
    <!--/col-->
</div>
<!--/container-->

<div class="divider"></div>

<section class="bg-2">
</section>

<div class="divider" id="usluge"></div>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="text-center">O transportnoj traci</h1>

        <hr>

        <p class="text-justify">
            Transportna traka je jedan od najvažnijih delova transportera. Transportna traka je uvek bila
            i biće najskupljim i najosetljivijim delom transportera. Takođe za razliku od ostalih elemenata
            transportera traka ima najkraći rok eksploatacije. U zavisnosti od uslova ekploatacije njen rok
            može da bude svega nekoliko meseci. Na današnji dan najviše se upotrebljavaju gumene trake sa
            ulošcima iz tkanine.
        </p>

        <br>

        <p class="text-justify">
            Osnovni elementi gumene transportne trake su gumene obloge i karkas koji se nalazi među njima.
            Gumene obloge se izrađuju od prirodnog i veštačkog kaučuka ili iz specijalnih sintetičkih materijala.
            Površina trake koja nosi teret naziva se radna površina, a donji deo neradna ili noseća gumena obloga.
            Gumene obloge štite karkas od mehaničkih oštećenja kao i od štetnih atmosferskih uticaja.
            Karkas se izrađuje od prirodnih ili veštačkih materijala (poliamid) ili kombinovanih vlakana.
        </p>

        <br><br><br>

        <div class="col-md-6">
            <img src="<?= base_url("assets/img/img10.jpg") ?>"
                 style="width:90%">
        </div>


        <div class="col-md-6">
            <img src="<?= base_url("assets/img/img11.jpg") ?>"
                 style="width:90%">
            <br><br><br><br>
        </div>

        <h2 class="text-center">Analliza stanja u eksploataciji</h2>

        <p class="text-justify">
            Pravilnost rada trake u eksploataciji(pogon trake, vođenje trake, ugao prenosa, zatezni uređaj,
            prelaz trake preko bubnjeva, čišćenje traka, materijal koji se transportuje, kapacitet prenosa)
        </p>

        <br>

        <hr>
        <br><br><br><br><br><br>
    </div>

    <br>


    <!--/col-->
</div>


<section class="bg-3">
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <!--<h2 style="padding:20px;background-color:rgba(5,5,5,.8)">
            ---------</h2>-->
    </div>
</section>

<div class="divider" id="proizvodi"></div>

<div class="bg-4">
    <div class="container">
        <h1 style="color: black" class="text-center"> Naši proizvodi<br></h1>
<h4 style="color: black" class="text-center"> (kliknite na sliku za opširnije informacije)<br><br><br><h4>
        <div class="row">
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="<?php echo site_url("index.php/welcome/proizvod1"); ?>"
                            ><img
                                src="<?= base_url("assets/img/img13.jpg") ?>" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p style="color: black"><b>Gumene transportne trake</b><br><br>
                            Skoro u svim oblastima kako lake tako i teške industrije transportna traka je postala
                            nezamenjivi deo i danas je gotovo nemoguće zamisliti proizvodni proces gde se ne
                            primenjuje transportna traka.<br><br><br><br></p>


                    </div>
                </div>
                <!--/panel-->
            </div>
            <!--/col-->

            <div class="col-xs-4">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="<?php echo site_url("index.php/welcome/proizvod2"); ?>"
                            ><img
                                src="<?= base_url("assets/img/img14.jpg") ?>" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p style="color: black"><b>Klinasto - zupčasto remenje</b> <br><br>
                            Na našem lageru nalazi se skoro kompletan asortiman klinastog remenja uključujući:<br>
                            - klinasti profil za industriju, mašinogradnju i uređaje(5x3, Y/6x4, 8x5, Z/10x6,
                            A/13x8, B/17x11, 20x12,5, C/22x14, 25x16, D/32x20, E/40x25;<br><br>
                        </p>

                    </div>
                </div>
                <!--/panel-->
            </div>
            <!--/col-->

            <div class="col-xs-4">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="<?php echo site_url("index.php/welcome/proizvod3"); ?>"
                            ><img
                                src="<?= base_url("assets/img/img15.jpg") ?>" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p style="color: black"><b>Pljosnato-pogonsko remenje - Extramultus</b><br>
                            Namenjeno je za prenos snage kod poljoprivrednih i industrijskih mašina sa bubnjevima
                            prečnika od 100 mm do 500 mm. Izrađuje se od dva ili više uložaka gumiranog platna u raznim
                            širinama(uglavnom od 25 mm do 300 mm) i u raznim dužinama prema zahtevu kupca.
                        </p>

                    </div>
                </div>
                <!--/panel-->

            </div>
        </div>
        <!--/col-->
        <div class="row">
            <div class="col-xs-4">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="<?php echo site_url("index.php/welcome/proizvod4"); ?>"
                            ><img
                                src="<?= base_url("assets/img/img16.jpg") ?>" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p style="color: black"><b>PVC i PU transportne trake</b><br><br>
                            Primenjuju se kao nezapaljive i vatrootporne trake za podzemnu eksploataciju ili kao
                            trake opšte namene. Za posebne uslove rada gornja i donja obloga mogu biti od gume sa
                            oznakom PVG trake.<br><br><br><br><br><br>
                        </p>


                    </div>
                </div>
                <!--/panel-->

            </div>
            <!--/col-->

            <div class="col-xs-4">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="<?php echo site_url("index.php/welcome/proizvod5"); ?>"
                            ><img
                                src="<?= base_url("assets/img/img17.jpg") ?>" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p style="color: black"><b>Gumeno - tehnička roba</b><br><br>
                            U mogućnosti smo da Vam ponudimo sledeću gumeno-tehničku robu:<br>
                            - Gumena creva za vazduh, vodu, naftu i naftne derivate, hemijsku industriju, ulja;<br>
                            - Gumene tehničke ploče za zaptivanje i izolaciju to u sledećim kvalitetima: opšte
                            namene. <br><br><br>
                        </p>


                    </div>
                </div>
                <!--/panel-->

            </div>
            <!--/col-->

            <div class="col-xs-4">

                <div class="panel panel-default">
                    <div class="panel-thumbnail"><a href="<?php echo site_url("index.php/welcome/proizvod6"); ?>"
                            ><img
                                src="<?= base_url("assets/img/img18.png") ?>" class="img-responsive"></a></div>
                    <div class="panel-body">
                        <p style="color: black"><b>Usluge - servis</b><br><br>
                            Pomoć pri projektovanju transportnog sistema na bazi višegodišnjeg iskustva. Stručna
                            pomoć u izboru tipa transportne traka(glatke, rebraste trake, elevatorske trake, dezenirane
                            trake i drugo u zavisnosti od ugla prenosa i izbor kvaliteta trake(antiabrazivna,
                            temperaturno
                            otporna, nezapaljive-antistatične i dr.
                        </p>


                    </div>
                </div>
                <!--/panel-->
            </div>
        </div>
        <!--/col-->
        <br><br>
    </div>

</div>




<div class="divider" id="lokacija"></div>

<div class="row">
    <div class="col-md-8 col-md-offset-1">
    </div>
</div>

<div class="row">

    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="text-center">Lokacija</h1>

        <br><br>

        <div class="container">

            <div id="map"></div>
            <script>

                var myLatLng = {lat: 44.7917301, lng: 20.4260042};
                var marker;
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 16,
                        center: myLatLng,
                        scrollwheel: false
                    });

                    marker = new google.maps.Marker({
                        map: map,
                        draggable: false,
                        animation: google.maps.Animation.DROP,
                        position: myLatLng
                    });
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                    marker.addListener('click', function () {
                        infowindow.open(map, marker);
                    });

                    var contentString = '<h3 style="color: black;">Transport Belt</h3><h4 style="color: black;">Beograd, Radnička 51</h4><br><p style="color: black">U oblasti projektovanja, proizvodnje, prodaje i servisiranja transportnih traka "Transportbelt" je svrstan u lidera u regionu. Nudimo proizvode koji odgovaraju svim svetskim zahtevima i standardima. Kompletan naš asortiman je u skladu s DIN standardom i zadovoljavaju sve najsavremenije zahteve koje današnje tržište zahteva. Osim toga uvek smo spremni da odgovorimo na izazove koje pred nas stavljaju naši kupci i da svojim iskustvom i znanjem pomognemo u odabiru proizvoda koji bi najoptimalnije i najracionalnije ispunio sve zahteve. Na skladištu se u svakom momentu nalazi nekoliko hiljada metara transportne trake u raznim konstrukcijama i kvalitetima tako da na vaš zahtev možemo da odgovorimo u najkraćem mogućem roku. U slučaju da se traženi proizvod ne nalazi na lageru, u mogućnosti smo da u najkraćem mogućem roku za Vas i po vašim zahtevima isporučimo traženu traku kao i mnoge druge gumeno-tehničke proizvode kao što su tehničke i gumene ploče, gumena creva, remenje itd.</p>';


                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                }


            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkkhowSjcWvUS8NJMfZJneWIJviyA2An4&callback=initMap">
            </script>


        </div>

    </div>
</div>

<br><br><br>
<hr>
<!--/row-->


<div class="divider" id="kontakt"></div>
<div class="container">
    <h1 class="text-center">Kontakt informacije</h1>

    <br><br>

    <div class="row">
        <div class="col-md-4">
            <p><b>Novica Petrović - direktor</b></p>

            <p><span class="glyphicon glyphicon-phone"></span> Telefon: +381/63/347196</p>
            <br>

            <p><b>Dragoljub Lazić - menadžer prodaje</b></p>

            <p><span class="glyphicon glyphicon-phone"></span> Telefon: +381/64/1199938 / +381/66/8117779</p>
            <br>

            <p><span class="glyphicon glyphicon-earphone"></span> Tel/fax: 011/3541-397</p>
            <br>

            <p><span class="glyphicon glyphicon-envelope"></span> E-mail: transportbelt@mts.rs</p>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Ime" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email"
                           required>
                </div>
            </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Komentar"
                              rows="5"></textarea>
            <br>

            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="btn pull-right" type="submit">Pošalji</button>
                </div>
            </div>
        </div>
    </div>


    <br><br>
    <hr>
    <br><br>


    <div class="container">
        <div class="col-sm-8 col-sm-offset-2 text-center">

            <ul class="list-inline center-block">
                <li><a href="https://www.facebook.com/Transport-Belt-1099229470119542"><img
                            src="<?= base_url("assets/img/fb.png") ?>"></a></li>
                <li><a href="http://twitter.com"><img src="<?= base_url("assets/img/tw.png") ?>"></a></li>
                <li><a href="http://google.com"><img src="<?= base_url("assets/img/gplus.png") ?>"></a></li>
                <li><a href="http://pinterest.com"><img src="<?= base_url("assets/img/p.png") ?>"></a></li>
            </ul>

        </div>
        <!--/col-->
    </div>
    <!--/container-->

</div>
<!--/wrap-->

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