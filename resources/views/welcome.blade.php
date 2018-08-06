<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>walimaji maps</title>

    <link rel="stylesheet" href="{{ asset("assets/css/style.css")  }}">
</head>

<body>
<!--/////////////////////////////// map header here ///////////////////////////////-->
<header id="map-header" class="map-header">
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper teal z-depth-3">
                <div class="container">
                    <a href="index.html" class="brand-logo">WalimajI</a>

                {{--<!--@if(user.connected === true)-->--}}
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large">
                        <i class="material-icons">menu</i>
                    </a>
                {{--<!--@endif-->--}}

                {{--<!--@if(!user.connected === true)-->--}}
                    <ul class="right">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown-login">
                                <i class="material-icons right">person_pin</i></a></li>
                    </ul>
                    <ul id="dropdown-login" class="dropdown-content">
                        <li><a href="../modules.auth/login.html">Connexion</a></li>
                        <li><a href="../modules.auth/sign.html">Inscription</a></li>
                    </ul>
                {{--<!--@endif-->--}}
                </div>
            </div>
        </nav>
    </div>
    <!--/////////////////////////////// map header here ///////////////////////////////-->


    <!--////////////////////////////////////// maps tab /////////////////////////////////////////////-->
    <div class="row col s12" style="margin-bottom: 0;">
        <ul class="tabs grey darken-4">
            <div class="container">
                <li class="tab col s3"><a href="#tab-map1" class="active">Traders</a></li>
                <li class="tab col s3"><a href="#tab-map2"> Producteurs</a></li>
                <li class="tab col s3"><a href="#tab-map3">Fournisseurs</a></li>
                <li class="tab col s3"><a href="#tab-map4">Transformateur</a></li>
            </div>
        </ul>
    </div>
    <!--////////////////////////////////////// maps tab /////////////////////////////////////////////-->


    <!--////////////////////////////////////// sidebar /////////////////////////////////////////////-->
{{--<!--@if(user.connected === true)-->--}}
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="../../images/default-cover.jpg" class="responsive-img">
                </div>
                <a href="#!user">
                    <img class="circle" src="../../images/profile.png">
                </a>
                <a href="#!name">
                    <span class="white-text name">username</span>
                </a>
                <a href="#!email">
                    <span class="white-text email">user@mail.com</span>
                </a>
            </div>
        </li>
        <li>
            <a href="#!">
                <i class="material-icons">person</i>mon profile</a>
        </li>
        <li>
            <a href="#!">
                <i class="material-icons">show_chart</i> Mes activités</a>
        </li>
        <li>
            <a href="#!">
                <i class="material-icons">maps</i> Carte</a>
        </li>
        <li>
            <a href="#!">
                <i class="material-icons">settings</i>Paramètres
            </a>
        </li>
    </ul>
    <!--////////////////////////////////////// sidebar /////////////////////////////////////////////-->
</header>
<main>
    <!--//////////////////////////////////////////  maps should be generated here///////////////////////////////-->
    <div id="tab-map1">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map1"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map2" class="col s12">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map2"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map3" class="col s12">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map3"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map4" class="col s12">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map4"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////  maps should be generated here///////////////////////////////-->
</main>
<!-- //////////////////////////////////// footer here //////////////////////////////////////////// -->
<footer class="page-footer transparent">
    <div class="parallax-container valign-wrapper map-banner" style="background: url('../../images/walimaji.jpg');">
        <div class="container map-banner-content">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="icon-block">
                            <h4 class="white-text hero-title">A propos</h4>
                            <p class="light white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Adipisci aperiam consequuntur cum
                                cupiditate dolores ducimus earum eligendi, est, in labore molestiae nostrum officiis
                                perspiciatis possimus quis rem reprehenderit sed ullam! Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Eaque inventore tempore assumenda deleniti, ea alias blanditiis
                                delectus,
                                fugiat asperiores a cumque neque nobis labore officia eveniet nihil, possimus libero
                                explicabo? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, suscipit!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-banner-overlay"></div>
    </div>
    <div class="footer-copyright grey darken-4">
        <div class="container">
            © 2018 Copyright walimaji.org
            <a class="grey-text text-lighten-4 right" href="https://github.com/itotafrica/walimaji">code source</a>
        </div>
    </div>
</footer>
<script src="{{ asset("assets/js/bin/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/bin/materialize.min.js")  }}"></script>
<script src="{{ asset("assets/js/bin/app.init.js") }}"></script>
</body>

</html>
