@extends('layouts.master')

@section('title')
@parent
:: home
@stop

@section('content')

<div id="sloganRow">
    <div class="container">
        <h1>Thingernet: <br/>The Internet <font color = #ff5555 >in</font> the Things. </h1>
    </div>
</div>

<div id="sliderRow">
    <div class="container">
        <div class="slider">
            <div id="quartumCarousel" class="carousel slide">



                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="active item">
                        <div class="carousel-caption">
                            <div class="w1 pull-left"><a href="06work-project.html">
                                    <span class="title">Thingernet</span></a>
                                <span class="description">Siempre a tu servicio</span>
                            </div>
                            <div class="w2 pull-right">
                                <a href="06work-project.html" class="btn red-btn">ACERCA DE NOSOTROS</a>
                            </div><div class="clearfix"></div>
                        </div>
                        <!-- IMAGEN -->
                        <div class="box"><img src="img/content/home-usual-slider-1.jpg" alt=""></div>
                    </div>

                    <!-- NUEVO ITEM -->
                    <div class="item">
                        <div class="carousel-caption">
                            <div class="w1 pull-left"><a href="06work-project.html">
                                    <span class="title">Aliduino UNO</span></a>
                                <span class="description">2 Sed posuere, ipsum sit amet congue viverra, mi est gravida nisl.</span>
                            </div>
                            <div class="w2 pull-right">
                                <a href="06work-project.html" class="btn red-btn">VER MÁS</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="box"><img src="img/content/home-usual-slider-1.jpg" alt="" ></div></div>


                <!-- NUEVO ITEM -->
                <div class="item">
                    <div class="carousel-caption">
                        <div class="w1 pull-left"><a href="06work-project.html">
                                <span class="title">Aliduino NANO</span></a>
                            <span class="description">2 Sed posuere, ipsum sit amet congue viverra, mi est gravida nisl.</span>
                        </div>
                        <div class="w2 pull-right">
                            <a href="06work-project.html" class="btn red-btn">VER MÁS</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="box"><img src="img/content/home-usual-slider-1.jpg" alt="" ></div></div>


            <!-- NUEVO ITEM -->
            <div class="item">
                <div class="carousel-caption">
                    <div class="w1 pull-left"><a href="06work-project.html">
                            <span class="title">Aliduino Mini</span></a>
                        <span class="description">2 Sed posuere, ipsum sit amet congue viverra, mi est gravida nisl.</span>
                    </div>
                    <div class="w2 pull-right">
                        <a href="06work-project.html" class="btn red-btn">VER MÁS</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="box"><img src="img/content/home-usual-slider-1.jpg" alt=""  ></div></div>


        <!-- NUEVO ITEM -->
        <div class="item">
            <div class="carousel-caption">
                <div class="w1 pull-left"><a href="06work-project.html">
                        <span class="title">Productos Aliduino</span></a>
                    <span class="description">2 Sed posuere, ipsum sit amet congue viverra, mi est gravida nisl.</span>
                </div>
                <div class="w2 pull-right">
                    <a href="06work-project.html" class="btn red-btn">VER MÁS</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="box"><img src="img/content/home-usual-slider-1.jpg" alt="" ></div></div>
    </div>

    <!-- Carousel nav -->
    <div class="controlContainer">
        <a class="carousel-control left" href="#quartumCarousel" data-slide="prev"></a>
        <a class="carousel-control right" href="#quartumCarousel" data-slide="next"></a>
    </div>
</div>
</div>
</div>
</div>


<div id="whatWeDoRow" class="green-row">
    <div class="container">

        <h2>
            <span class="lft"></span><span class="mid">¿Qué ofrecemos?</span><span class="rt"></span>
        </h2>

        <div class="row">
            <div class="span4">
                <div class="row">
                    <div class="span1">
                        <img src="img/content/iconDesign.png" alt="Design" />
                    </div>
                    <div class="span3">
                        <div class="moveMe">
                            <h3>Tienda Online</h3>
                            <p>Hemos abierto una tienda online en Ebay. Ahí encontrarás todos los productos que tenemos en venta, ¡no olvides echarle un vistazo y llevarte uno de nuestros aliduinos!</p>
                            <a href="#" class="btn btn-green" href="#">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="row">
                    <div class="span1">
                        <img src="img/content/iconDevelopment.png" alt="Development" />
                    </div>
                    <div class="span3">
                        <div class="moveMe">
                            <h3>Aliduinos</h3>
                            <p>Tenemos en marcha una serie de aliduinos que te encantarán. Desde el aliduino UNO, el más completo, hasta el Mini Pro, ¡con
                                el que podrás hacer tus proyectos de una forma económica y fácil!</p>
                            <a href="#" class="btn btn-green" href="#">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="row">
                    <div class="span1">
                        <img src="img/content/iconPromotion.png" alt="Promotion" />
                    </div>
                    <div class="span3">
                        <div class="moveMe">
                            <h3>Nuestro blog</h3>
                            <p>Hablamos y te actualizamos acerca de las nuevas tecnologías. Todo lo relacionado con el mundo de arduino y el desarrollo de nuestras propias versiones Aliduino</p>
                            <a href="#" class="btn btn-green" href="#">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="recentWorksRow">
    <div class="container">

        <h2>
            <span class="lft"></span><span class="mid">Nuestros proyectos</span><span class="rt"></span>
        </h2>

        <ul class="thumbnails withHover">
            <li class="span3">
                <a href="06work-project.html" class="thumbnail corner">
                    <span class="topCorner"></span>
                    <img src="img/content/home-recent-works-1.jpg" alt="">
                    <div class="contenthover"></div>
                    <span class="bottomCorner"></span>
                </a>
                <div class="caption">
                    <h3><a href="06work-project.html"><i class='fa fa-rocket'></i> Shuttle</a></h3>
                    <p>¡Con él podrás conectarte a todo!</p>
                </div>
            </li>
            <li class="span3">
                <a href="06work-project.html" class="thumbnail corner">
                    <span class="topCorner"></span>
                    <img src="img/content/home-recent-works-2.jpg" alt="">
                    <div class="contenthover"></div>
                    <span class="bottomCorner"></span>
                </a>
                <div class="caption">
                    <h3><a href="06work-project.html">Haciendo nuestras PCBs</a></h3>
                    <p>Video ilustrativo acerca del proceso de producción de prototipos</p>
                </div>
            </li>
            <li class="span3">
                <a href="06work-project.html" class="thumbnail corner">
                    <span class="topCorner"></span>
                    <img src="img/content/home-recent-works-3.jpg" alt="">
                    <div class="contenthover"></div>
                    <span class="bottomCorner"></span>
                </a>
                <div class="caption">
                    <h3><a href="06work-project.html">DIY: Glowing Paper Cube</a></h3>
                    <p>Pequeño proyecto hecho con Aliduino Mini Pro. ¡No te lo pierdas!</p>
                </div>
            </li>
            <li class="span3">
                <a href="06work-project.html" class="thumbnail corner">
                    <span class="topCorner"></span>
                    <img src="img/content/home-recent-works-4.jpg" alt="">
                    <div class="contenthover"></div>
                    <span class="bottomCorner"></span>
                </a>
                <div class="caption">
                    <h3><a href="06work-project.html">¿Te gusta programar?</a></h3>
                    <p>Pequeña reflexión acerca del aprendizaje de la programación. ¡Muy interesante!</p>
                </div>
            </li>
        </ul>
    </div>
</div>

<div id="aboutUsRow" class="green-row" >
    <div class="container">
        <h2>
            <span class="lft"></span><span class="mid">Sobre Nosotros</span><span class="rt"></span>
        </h2>
        <div class="row">
            <div class="span8">
                <p>Thingernet, creado en el año 2014, es una empresa de tecnología y electrónica que se basa en la idea de "El Internet en las Cosas". Fue fundada en la Comunidad Valencia, específicamente en Alicante.</p>
                <p>Ofrecemos la serie de productos llamada "Aliduino", unas placas compatibles con el software y hardware de Arduino. Entre ellos destacamos el Aliduino UNO, un modelo completo y asequible, el Aliduino NANO y el Aliduino Mini Pro. Todos los productos son desarrollados y testeados para garantizar su calidad por nuestro equipo de trabajo. </p>
                <p>Actualmente estamos trabajando en el proyecto Shuttle, que pronto saldrá a la luz. Para contactar con nosotros, puedes enviar un email al siguiente correo electrónico: info@thingernet.es</p>

            </div>
            <div class="span4">
                <div class="smallSlider">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item"><div class="aut1">Pedro Pernías<span>Universidad de Alicante</span></div><div class="box"><span class="tip"></span><p>Morbi non augue neque, luctus blandit nisi. Integer imperdiet mauris non turpis molestie tinc dunt. Ut aliquet cursus risus vestibulum elit nibh vulputate purus.</p></div></div>
                            <div class="item"><div class="aut1">Pablo Pernías<span>Nonexistent</span></div><div class="box"><span class="tip"></span><p>Morbi non augue neque, luctus blandit n]uet cursus risus vestibulum elit nibh vulputate purus.</p></div></div>
                            <div class="item"><div class="aut1">Roxanne López<span>Nonexistent</span></div><div class="box"><span class="tip"></span><p>Morbi non augue neque, luctus blandit nisi. Integer  elit nibh vulputate purus. . Integer imperdiet mauris non turpis molest Ut aliquet cursus risus ve</p></div></div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="stayTunedRow">
    <div class="container">
        <h2>
            <span class="lft"></span><span class="mid">¡No nos pierdas de vista!</span><span class="rt"></span>
        </h2>

        <div class="row">
            <div class="span6 postShowcase">
                <div class="row">
                    <div class="span2">
                        <ul class="thumbnails">
                            <li class="span2">
                                <a href="#" class="thumbnail corner">
                                    <span class="topCorner"></span>
                                    <img src="img/content/home-stay-tuned-blog.jpg" alt="">
                                    <span class="bottomCorner"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="span4">
                        <h3><a href="#">¿Te gusta programar?</a></h3>
                        <p>Morbi erat urna, malesuada vitae mollis sed, facilisis at felis. Fusce aliquet facilisis orci, ut gravida ligula viverra quis. Aliquam sed accum risus. Duis at pretium arcu. Etiam lectus nisl, rhoncus quis ultricies eu, pellentesque non massa. Duis tempus placerat lectus, sit amet lacinia justo ultrices. Curabitur sit amet nunc. Sed ornare elit lorem. Integer mattis purus ut eros vulputate nec posuere nisl ultrices.</p>
                        <p class="summary"><span class="datetime">3 August, 2012</span> <span class="dividers">||</span> <a href="#">3 comments</a></p>
                    </div>
                </div>
            </div>
            <div class="span6 newsData">
                <div class="row">
                    <div class="span3">
                        <div class="tweets"></div>

                        <a href="https://twitter.com/thethingernet" class="btn twitterBtn">Síguenos</a>
                    </div>
                    <div class="span3">
                        <ul class="thumbnails">
                            <li>
                                <a href="#" class="thumbnail"><img src="img/content/home-stay-tuned-instagram-1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="thumbnail"><img src="img/content/home-stay-tuned-instagram-2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="thumbnail"><img src="img/content/home-stay-tuned-instagram-3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="thumbnail"><img src="img/content/home-stay-tuned-instagram-4.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contactUsRow" class="green-row">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h4>Contáctanos</h4>
                <address>
                    <strong>Correo:</strong> Alicante, España<br>
                    <strong>Tel:</strong> +12 346-678-90<br>
                    <strong>Fax:</strong> +12 346-678-93<br>
                    <strong>Email:</strong> <a href="#">info@thingernet.com</a>
                </address>

            </div>
            <div class="span3">

                <ul class="thumbnails">
                    <li>
                        <a href="#" class="thumbnail"><img src="img/content/footer-map.jpg" alt=""></a>
                    </li>
                </ul>

            </div>
            <div class="span3">
                <p>¿Te gustaría aportar alguna sugerencia o compartir algún proyecto con nosotros?</p>
                <a href="#" class="btn red-btn">Envíanos un mensaje</a>
            </div>
            <div class="span3">
                <div id="getInTouch">
                    <h4>Síguenos</h4>




                    <ul class="social">
                        <li><a href="https://www.facebook.com/thethingernet" class="facebook" data-toggle="tooltip" title="Facebook"></a></li>
                        <li><a href="https://twitter.com/thethingernet" class="twitter" data-toggle="tooltip" title="Twitter"></a></li>
                        <li><a href="https://plus.google.com/u/2/113803534266298545760/posts" class="googleplus" data-toggle="tooltip" title="Google+"></a></li>
                        <li><a href="https://www.flickr.com/photos/thingernet/" class="flickr" data-toggle="tooltip" title="Flickr"></a></li>
                        <!--
                        <li><a href="#" class="delicious" data-toggle="tooltip" title="Delicious"></a></li>
                        <li><a href="#" class="deviantart" data-toggle="tooltip" title="Deviant Art"></a></li>
                        <li><a href="#" class="digg" data-toggle="tooltip" title="Digg"></a></li>
                        <li><a href="#" class="flickr" data-toggle="tooltip" title="Flickr"></a></li>
                        <li><a href="#" class="lastfm" data-toggle="tooltip" title="LastFm"></a></li>
                        <li><a href="#" class="rss" data-toggle="tooltip" title="RSS"></a></li>
                        <li><a href="#" class="skype" data-toggle="tooltip" title="Skype"></a></li>
                        <li><a href="#" class="stumbleupon" data-toggle="tooltip" title="Stumbleupon"></a></li>
                        <li><a href="#" class="tumblr" data-toggle="tooltip" title="Tumblr"></a></li>
                        <li><a href="#" class="youtube" data-toggle="tooltip" title="You Tube"></a></li>
                        <li><a href="#" class="vimeo" data-toggle="tooltip" title="Vimeo"></a></li>
                        <li><a href="#" class="dribbble" data-toggle="tooltip" title="Dribbble"></a></li>
                        <li><a href="#" class="behance" data-toggle="tooltip" title="Behance"></a></li>
                        <li><a href="#" class="dailymotion" data-toggle="tooltip" title="Dailymotion"></a></li>
                        <li><a href="#" class="instagram" data-toggle="tooltip" title="Instagram"></a></li>
                        <li><a href="#" class="linkedin" data-toggle="tooltip" title="LinkedIn"></a></li>
                        <li><a href="#" class="pinterest" data-toggle="tooltip" title="Pinterest"></a></li>
                        -->
                    </ul>


                </div>
                <div id="newsletter">
                    <h4>Suscríbete</h4>
                    <form class="form-search">
                        <div class="input-append">
                            <input type="text" class="span2 search-query" placeholder="Inserta tu email">
                            <button type="submit" class="btn newsletterSubmit"></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop

