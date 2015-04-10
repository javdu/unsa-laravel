<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="redessociales/style.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        
        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <div class="container">
            <div class="box-head">
                <h1 id="titulo-pagina">UNIVERSIDAD NACIONAL DE SALTA</h1>
            </div>
        <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div id="menu-principal">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">UNSa</a>
                    </div>
                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-main">
                        <ul class="nav navbar-nav  navbar-main">
                            <li><a href="{{{ URL::to('') }}}" class="dropdown-toggle" data-toggle="dropdown">Inicio<b class="caret"></b></a>
                                <ul class="dropdown-menu sub-menu multi-column-dropdown">
                                    <li><a href="#">Autoridades</a></li>
                                    <li><a href="#">Estatuto</a></li>
                                    <li><a href="#">Secretarías</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Facultades, Sedes e Institutos</a></li>
                                    <li><a href="#">Boletin Oficial</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </li>
                            <li><a href="{{{ URL::to('') }}}" class="dropdown-toggle" data-toggle="dropdown">Información Académica<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                               	    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li class="menu-titulo" style="">FACULTADES</li>
                                                <li><a href="#">Fac. de Cs. Exactas</a></li>
                                                <li><a href="#">Fac. de Cs. Ecomicas</a></li>
                                                <li><a href="#">Fac. de Cs. de la Salud</a></li>
                                                <li><a href="#">Fac. de Humanidades</a></li>
                                                <li><a href="#">Fac. de Ingenieria</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li class="menu-titulo">SEDES REGIONALES</li>
                                                <li><a href="#">Sede Regional Tartagal</a></li>
                                                <li><a href="#">Sede Regional Orán</a></li>
                                                <li><a href="#">Sede Regional Metán - Rosario de la Frontera</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li class="menu-titulo">INSTITUTO DE EDUCACION MEDIA</li>
                                                <li><a href="#">I.E.M. Salta</a></li>
                                                <li><a href="#">I.E.M. Tartagal</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="{{{ URL::to('') }}}">Información Administrativa</a></li>
                            <li><a href="{{{ URL::to('') }}}">Bienestar Universitario</a></li>
                            <li><a href="{{{ URL::to('') }}}">Institucional</a></li>
                            <li><a href="{{{ URL::to('') }}}">Extensión Universitaria</a></li>
                            <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                              <input type="text" class="form-control"  placeholder="Buscar" style="width: 160px; border-radius: 25px 25px 25px 25px;
-moz-border-radius: 25px 25px 25px 25px;
-webkit-border-radius: 25px 25px 25px 25px">
                            </div>
                        </form>
                        </ul>                        
                    </div>  
                </div>  
            </div>
            
        </div>
        <div class="container">
            <div class="sub-navbar">
                <ul class="nav navbar-nav">
                    <li><a href="{{{ URL::to('') }}}">Inscripciones 2015</a></li>
                    <li><a href="{{{ URL::to('') }}}">Medicina 2015</a></li>
                    <li><a href="{{{ URL::to('') }}}">Tarjeta SAETA</a></li>
                    <li><a href="{{{ URL::to('') }}}">Cursos de Ingreso</a></li>
                    <li><a href="{{{ URL::to('') }}}">Incripciones Centro de Lenguas</a></li>
                    <li><a href="{{{ URL::to('') }}}">Inscripción becas 2015</a></li>
                </ul>
            </div>
        </div>
        <!-- Container -->
        <div class="container">
            <!----------------------------------------------------->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
             
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/imagen1.jpg" alt="...">
                  <div class="carousel-caption">
                      <h3>Caption Text</h3>
                  </div>
                </div>
                <div class="item">
                  <img src="img/imagen2.jpg" alt="...">
                  <div class="carousel-caption">
                      <h3>Caption Text</h3>
                  </div>
                </div>
                <div class="item">
                  <img src="img/imagen3.jpg" alt="...">
                  <div class="carousel-caption">
                      <h3>Caption Text</h3>
                  </div>
                </div>
              </div>
             
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div> <!-- Carousel -->
            <!---------------------------------------------------------->
            <!-- Content -->
            @yield('content')

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-6 col-xs-12">
                    <h3 class="titulo">Noticias</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box-noticias box-alumnos">
                        <img class="imagen" src="img/notalumnos/saeta.jpg" alt="Noticia">
                        <a class="titulo">No cobrarán exámenes a alumnos de medicina carenciados</a>
                        <p class="intro">
                            <strong>16/03/2015 - Alumnos -</strong> Víctor Hugo Claros, rector de la Universidad Nacional
                            de Salta, informó que la casa de altos estudios se hará cargo de los gastos de aquellos estudiantes
                            que no puedan abonar los $600.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box-noticias box-alumnos">
                        <img class="imagen" src="img/notalumnos/saeta.jpg" alt="Noticia">
                        <a class="titulo">Renovación de tarjeta SAETA</a>
                        <p class="intro">
                            <strong>16/03/2015 - Alumnos -</strong> Se trata de un poste que se quebró y cayó sobre la calle e impide
                            que alumnos de la UNSa desciendan en la parada habitual. El servicio
                            del Transversal modificó su recorrido.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-noticias-small">
                                <img class="imagen" src="img/notalumnos/saeta.jpg" alt="Noticia">
                                <a class="titulo">Para Abel Cornejo los abogados deberían formarse en la UNSa</a>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-noticias-small"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-noticias-small">
                                <img class="imagen" src="img/notalumnos/saeta.jpg" alt="Noticia">
                                <a class="titulo">Comienza el ciclo lectivo en la UNSa</a>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-noticias-small"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-noticias-small">
                                <img class="imagen" src="img/notalumnos/saeta.jpg" alt="Noticia">
                                <a class="titulo">Colectivos modifican su recorrido por la caída de un poste</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="twitter-timeline"  href="https://twitter.com/JJavdu0113" data-widget-id="577935308609757184">Tweets por el @JJavdu0113.</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
        <div class="social">
            <ul>
                <li><a href="#" target="_blank" class="icon-facebook"></a></li>
                <li><a href="#" target="_blank" class="icon-twitter"></a></li>
                <li><a href="#" target="_blank" class="icon-pinterest"></a></li>
                <li><a href="#" class="icon-mail"></a></li>
            </ul>
        </div>
        <div class="container">
            <div style="background: #DFDFDF; padding: 20px 40px; height: 100%; margin-top: 40px;">
            <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h5 style="color: #26A65B;">CARRERAS MAS ELEGIDAS</h5>
                        <ul style="list-style-type:none; padding: 0px;">
                            <li>Lic. en Analisis de Sistemas</li>
                            <li>Contador</li>
                            <li>Lic. en Comunicación</li>
                        </ul>
                        <h5 style="color: #26A65B;">CARRERAS MAS ELEGIDAS</h5>
                        <ul style="list-style-type:none; padding: 0px;">
                            <li>Lic. en Analisis de Sistemas</li>
                            <li>Contador</li>
                            <li>Lic. en Comunicación</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h5 style="color: #26A65B;">CARRERAS MAS ELEGIDAS</h5>
                        <ul style="list-style-type:none; padding: 0px;">
                            <li>Lic. en Analisis de Sistemas</li>
                            <li>Contador</li>
                            <li>Lic. en Comunicación</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h5 style="color: #26A65B;">CARRERAS MAS ELEGIDAS</h5>
                        <ul style="list-style-type:none; padding: 0px;">
                            <li>Lic. en Analisis de Sistemas</li>
                            <li>Contador</li>
                            <li>Lic. en Comunicación</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h5 style="color: #26A65B;">CARRERAS MAS ELEGIDAS</h5>
                        <ul style="list-style-type:none; padding: 0px;">
                            <li>Lic. en Analisis de Sistemas</li>
                            <li>Contador</li>
                            <li>Lic. en Comunicación</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <footer class="footer">
                <div class="row">
                     <div class="col-md-6 visible-xs-12">
                        <div class="footer-left">
                            <img src="img/logo-unsa.png" height="80"/>
                            <p>UNIVERSIDAD NACIONAL DE SALTA</p>
                            <p style="color: #95FF8F; font-style: italic;">Mi sabiduria viene de esta tierra</p>
                        </div>
                     </div>
                     <div class="col-md-6 visible-xs-12">
                        <div class="footer-right">
                            <address>
                                <p>Complejo Universitario Gral. San Martín</p>
                                <p>Av. Bolivia 5150 - 4400 - Salta - Argentina</p>
                                <p>&#169; UNSa 2015</p>
                            </address>
                        </div>
                     </div>
                </div>
            </footer>
        </div>
        <!-- Scripts are placed here -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.carousel').carousel();
            });
        </script>
        <script>
            posicionarMenu();
            
            $(window).scroll(function() {    
                posicionarMenu();
            });
            
            function posicionarMenu() {
                var altura_del_header = $('.box-head').outerHeight(true);
                var altura_del_menu = $('.navbar-default').outerHeight(true);
            
                if ($(window).scrollTop() >= altura_del_header){
                    $('.navbar-default').addClass('navbar-fixed-top');
                    $('body').css('margin-top', (altura_del_menu) + 'px');
                } else {
                    $('.navbar-default').removeClass('navbar-fixed-top');
                    $('body').css('margin-top', '0');
                }
            }
        </script>
    </body>
</html>
