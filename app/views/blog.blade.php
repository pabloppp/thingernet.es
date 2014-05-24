@extends('layouts.master')

@section('title')
@parent
:: blog

@stop

@section('content')

<div id="titleRow">
    <div class="container">
        <h1>
            <span class="lft"></span><span class="mid">Nuestro blog</span><span class="rt"></span>
        </h1>
    </div>
</div>

<div id="ourBlog">
    <div class="container">
        <div class="row">
            <div class="span9">


                <?php
                    if($posts->count() == 0) echo '
                    <div class="blogPost">
                    <h5>
                        <span class="lft"></span><span class="mid">Todavia no hay ningun post</span><span class="rt"></span>
                    </h5>
                    </div>
                    ';
                ?>
                <!-- POSTS -->
                @foreach($posts as $post)
                <div class="blogPost">
                    <h5>
                        <span class="lft"></span><span class="mid">dia mes año</span><span class="rt"></span>
                    </h5>
                    <?php if($post->getImagen() != null) : ?>
                    <ul class="thumbnails">
                        <li>
                            <a href="08singlepost.html" class="thumbnail corner">
                                <span class="topCorner"></span>
                                <img src="/img/content/blog-1.jpg" alt="">
                                <span class="bottomCorner"></span>
                            </a>
                        </li>
                    </ul>
                    <?php endif; ?>

                    <h2><a href="08singlepost.html">{{ $post->getNombre() }}</a></h2>

                    <p>
                        {{ $post->getContenido() }}
                    </p>

                    <p class="summary">
                        Categorias:
                        @foreach($post->getCategorias()->get() as $hascat)
                            <a href="#">{{ $hascat->getNombre() }}</a>
                            <span class="dividers">,</span>
                        @endforeach
                        <span class="dividers">||</span>
                        <a href="#">{{ $post->getComentarios()->count() }} comentarios</a>
                    </p>
                </div>
                @endforeach
                <!-- FIN POSTS -->

                <div class="pager">
                    <ul class="unstyled">
                        <li class="previous"><span>Previous page</span></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#" >Next page</a></li>
                    </ul>
                </div>

            </div>

            <div class="span3">
                <!-- right sidebar -->

                <div class="blogSidebar">
                    <h4>Search Blog</h4>

                    <form class="form-search">
                        <input type="text" class="input-medium search-query" placeholder="Type and press enter">
                    </form>

                    <br><br>

                    <h4>Categories</h4>

                    <ul class="categories unstyled clearfix">

                        @foreach($categorias as $cat)
                        <li><a href="blog/{{ $cat->getNombre() }}">{{ $cat->getNombre() }}</a>
                            <span>{{ $cat->getPosts()->get()->count()}}</span></li>
                        @endforeach

                    </ul>

                    <br><br>

                    <h4>Archives</h4>

                    <h5>2012</h5>
                    <ul class="months unstyled">
                        <li><a href="#">August</a></li>
                        <li><a href="#">July</a></li>
                        <li><a href="#">June</a></li>
                        <li><a href="#">May</a></li>
                        <li><a href="#">April</a></li>
                        <li><a href="#">March</a></li>
                        <li><a href="#">February</a></li>
                        <li><a href="#">January</a></li>
                    </ul>

                    <h5>2011</h5>
                    <ul class="months unstyled">
                        <li><a href="#">December</a></li>
                        <li><a href="#">November</a></li>
                        <li><a href="#">October</a></li>
                        <li><a href="#">September</a></li>
                    </ul>

                    <br><br><br><br>

                    <div class="tabs1">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#recent" data-toggle="tab">Recent</a></li>
                            <li><a href="#popular" data-toggle="tab">Popular</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="recent">
                                <a href="#">Sed sit amet justo ac risus mattis varius qellus</a>
                                <span>3 August, 2012</span>

                                <a href="#">Sed sit amet justo ac risus mattis varius qellus</a>
                                <span>3 August, 2012</span>

                                <a href="#">Sed sit amet justo ac risus mattis varius qellus</a>
                                <span>3 August, 2012</span>

                            </div>
                            <div class="tab-pane" id="popular">
                                <a href="#">Sed sit amet justo ac risus mattis varius qellus t amet justo ac risus mattis var t amet justo ac risus mattis var</a>
                                <span>2 August, 2012</span>

                            </div>
                        </div>
                    </div>


                    <br><br>

                    <h4>About</h4>

                    <p>Vivamus quis magna a tempor euismod. Proin eget id sapien. Pellentesque sed lorem massa, eu tristique urna. Phasellus soda faucibus neque feugiat cursus.</p>


                    <br><br>

                    <h4>Accordion</h4>

                    <div class="acc1">
                        <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        Design
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        1 In enim justo, elementum vitae commodo vel, luctus nec mauris. Nunc rhoncus laoreet eleifend. Morbi in sem ac nibh lacinia non ac leo. Nulla a augue sit amet tellus cursus par varius.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        Development
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        2 In enim justo, elementum vitae commodo vel, luctus nec mauris. Nunc rhoncus laoreet eleifend. Morbi in sem ac nibh lacinia non ac leo. Nulla a augue sit amet tellus cursus par varius.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        Promotion
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        3 In enim justo, elementum vitae commodo vel, luctus nec mauris. Nunc rhoncus laoreet eleifend. Morbi in sem ac nibh lacinia non ac leo. Nulla a augue sit amet tellus cursus par varius.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- acc1 -->



                </div>
            </div>
        </div>
    </div>
</div>

@stop
