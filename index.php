<!DOCTYPE html>


<?php 
require_once 'connect.php';
?>
<?php
            $start = 0;
            $end = 2;
            $post= array();
            $i=0;
            $query = "SELECT * FROM posts  ORDER BY Created DESC LIMIT $start, $end";
            $count_query = mysql_query("select * from posts");
            $count = mysql_num_rows($count_query);
            if($query_run=mysql_query($query)){
                while($row = mysql_fetch_assoc($query_run)){
                    $title[$i]=$row['Title'];
                    $post[$i] = $row['Shortdes'];
                    $date[$i] = date('d M Y',$row['Created']);
                    $full_post[$i] = $row['Detail'];
                    $full_post[$i] = str_replace("</p><p>", "<br>", $full_post[$i]); 

                   $img[$i] = $row['Image'];
                    $i++;
                }
            }
            //echo $full_post[1];
            ?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Responsive Onepage HTML Template | Multi</title>


    <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(img/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>


        <style>
            /* jssor slider thumbnail navigator skin 01 css */
            /*
            .jssort01 .p            (normal)
            .jssort01 .p:hover      (normal mouseover)
            .jssort01 .p.pav        (active)
            .jssort01 .p.pdn        (mousedown)
            */

            .jssort01 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 800px;
                height: 100px;
            }

                .jssort01 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                }

                .jssort01 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                    box-sizing: content-box;
                    background: url(img/t01.png) -800px -800px no-repeat;
                    _background: none;
                }

                .jssort01 .pav .c {
                    top: 2px;
                    _top: 0px;
                    left: 2px;
                    _left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 0px solid;
                    _border: #fff 2px solid;
                    background-position: 50% 50%;
                }

                .jssort01 .p:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: #fff 1px solid;
                    background-position: 50% 50%;
                }

                .jssort01 .p.pdn .c {
                    background-position: 50% 50%;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                }

                * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
                    /* ie quirks mode adjust */
                    width /**/: 72px;
                    height /**/: 72px;
                }
        </style>





        <!--  Live updates style  -->


	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">


<style type="text/css">
    .dropdown-submenu{
        position:relative;
    }
    .dropdown-submenu>.dropdown-menu{
        top:0;
        left:100%;
        margin-top:0px;
        margin-left:2px;
        
        -webkit-border-radius:0 6px 6px 6px;
        -moz-border-radius:0 6px 6px 6px;
        border-radius:0 6px 6px 6px;
    }
    .dropdown-submenu:hover>.dropdown-menu{
        display:block;
    }
    .dropdown-submenu>a:after{
        display:block;
        content:" ";
        float:right;
        width:0;
        height:0;
        
        border-color:transparent;
        border-style:solid;
        border-width:5px 0 5px 5px;
        border-left-color:#cccccc;
        margin-top:5px;
        margin-right:-10px;
    }
    .dropdown-submenu:hover>a:after{
        border-left-color:#ffffff;
        
    }
    .dropdown-submenu.pull-left{
        float:none;
        
    }
    .dropdown-submenu.pull-left>.dropdown-menu{
        left:-100%;
        margin-left:10px;
        -webkit-border-radius:6px 0 6px 6px;
        -moz-border-radius:6px 0 6px 6px;
        border-radius:6px 0 6px 6px;
        
    }
    </style>






    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#features">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Events">Events<b class="caret"></b></a>
                                   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" >
                                   <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#"><i class="fa fa-globe fa-fw"></i>Inter B School Events</a>
                                        <ul class="dropdown-menu">
                                          <li><a tabindex="-1" href="mandi.html">Mandi</a></li>
                                          
                                        <li><a href="ulhaas.html">Ulhaas</a></li>
                                        
                                    </ul>
                                      </li>
                                    <!-- ********-->
                                     <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#"><i class="fa fa-star fa-fw"></i>Intra B School Events</a>
                                        <ul class="dropdown-menu">
                                          <li><a tabindex="-1" href="marketing god.html">Marketing God of Joka</a></li>
                                         
                                        
                                    </ul>
                                      </li>
                                     <!-- ***************************-->
                                      <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#"><i class="fa fa-pencil fa-fw"></i>Pan IIM Events</a>
                                        <ul class="dropdown-menu">
                                          <li><a tabindex="-1" href="samar.html">Samar</a></li>
                                         
                                    </ul>
                                      </li>
                                        </ul>
                        </li>
                        <li class="scroll"><a href="#blog">Projects</a></li>
                        <li class="scroll"><a href="#updates">Updates</a></li>
                        <li class="scroll"><a href="#portfolio">Gallery</a></li>
                        <li class="scroll"><a href="#testimonialn">Testimonials</a></li>
                        <li class="scroll"><a href="#meet-team">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/cta2/iim.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>IIM</span> Calcutta</h2>
                                    <p>Indian Institute of Management Calcutta is a public business school located in West Bengal, India and was the first Indian Institute of Management to be established.It is consistently ranked as one of the best business schools in India and the Asia-Pacific region.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>TEAM CENSUS<span> IIM Calcutta</span> </h2>
                                    <p>Team Census is the experiential marketing club of IIM-Calcutta.
                                    Established in 2006 as a marketing research club, the club has grown significantly to become the best academic club in 2014! </p>
                                    <a class="btn btn-primary btn-lg" href="#about">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
    

    

 <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Team Census</h2>
                <p class="text-center wow fadeInDown"><b><u>Team Census</u> - the result of a quest to explore experiential marketing</b>
                <br>We specialize in experiential marketing and marketing research. Started in 2006, our two major offerings are Mandi & Ulhaas.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Video</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/UTbHlfUMs-g" frameborder="0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Who we are</h3>
                    <p>Team Census is the experiential marketing club of IIM-Calcutta. Established in 2006 as a marketing research club, the club has grown significantly to become the best academic club in 2014! The  two signature events of the club are Mandi and Ulhaas, which usually take place in the months of September and December, respectively, each year. We pride in delivering over 50 live projects and satisfied clients.
                
                    
                Following are the events held under the aegis of Team Census~ 
                
                <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Mandi</li>
                                <li><i class="fa fa-check-square"></i> Ulhaas</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Marketing God of Joka</li>
                                <li><i class="fa fa-check-square"></i> SAMAR</li>
                            </ul>
                        </div>
                    </div>
                    
                    
                
                <b>Our Aim</b> is to provide first hand marketing experience to the students of IIM-Calcutta through various year round events, case study competitions and industry live projects.  <br>
                <b>Our Belief</b> is that MBA is all about 'learning by doing' and that there is more to be learned by going out there and promoting and selling your product to real customers than by reading about how to do it from a book. </p>
                
                
                    <!-- <a class="btn btn-primary" href="#">Learn More</a> -->
                
                </div>
            </div>
        </div>
    </section><!--/#about-->

    

    <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Live Projects</h2>
                <p class="text-center wow fadeInDown">We do live projects for our partners across sectors. That helps just not only our clients but provides with our club members with rich experience and a taste of what it is like in the corporate world for a fresh business graduate.</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="images/projects/img15.jpg" alt="">
                                </div>
                                
                                <h2 class="entry-title">Project Pre-requisites</h2>
                            </header>

                            <div class="entry-content">
                                <P>The time frames for the projects range from a few weeks to a few months. A carefully selected team works under supervision of an experienced  faculty member and complete the task for the clients. </P>
                                
                            </div>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->


                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="images/projects/img15.jpg" alt="">
                                </div>
                                
                                <h2 class="entry-title">Our Team</h2>
                            </header>

                            <div class="entry-content">
                                    <P>A flexible and experienced team enables us to welcome new and challenging projects requiring innovative methodologies to suit our client’s needs.
                                    <br/>
                                    <br/>
</P>
                                </div>
                        </article>
                    </div>

                </div>


                

            </div>

            <br/>

            <div class="row">

                <div class="col-sm-3"></div>

                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="images/projects/img15.jpg" alt="">
                                </div>
                                
                                <h2 class="entry-title">Our Clients</h2>
                            </header>

                            <div class="entry-content">
                                    <P>We have helped over 50 satisfied clients solve a variety of problems from understanding buying behavior to formulating marketing strategies. <br>
With a highly diverse history of the kind of projects we have done in the past, our team is well equipped to handle most marketing and strategic challenges. 
</P>
                                    <a class="btn btn-primary" href="sponsors.html" target="_blank">Our partners</a>
                                </div>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->
            </div>

        </div>
    </section>

    






 <!-- live updates  -->
 <div id="updates"></div>

    <section id="blog">
        <div class="container" id="main">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Live Updates</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            
            <div class="row" id="row_0">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="img/alila/<?php echo $img[0]?>" alt="" style="width:180px; height:180px;">
<!--                                 <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span> -->
                            </div>
                            <div class="media-body" id="f_0">
                                <header class="entry-header">
                                    <div class="entry-date"><?php echo $date[0] ?></div>
                                    <h2 class="entry-title"><a href="#"><?php echo $title[0] ?></a></h2>
                                </header>

                                <div class="entry-content">
                                    <P><?php echo $post[0] ?></P>
                                    <a class="btn btn-primary" id="read_0" onclick="readmore(this)">Show More</a>
                                </div>
                                
                            </div>
                        </article>

                    </div>
                    <div id="detail_0" style="display:none;"><?php echo nl2br($full_post[0])?></div>
                </div>
            </div>
            <br>
            <div class="row" id="row_1">
            <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="img/alila/<?php echo $img[1]?>" alt="" style="width:180px; height:180px;">
<!--                                 <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span> -->
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date"><?php echo $date[1] ?></div>
                                    <h2 class="entry-title"><a href="#"><?php echo $title[1] ?></a></h2>
                                </header>

                                <div class="entry-content">
                                    <P><?php echo $post[1] ?></P>
                                    <a class="btn btn-primary" id="read_1" onclick="readmore(this);">Show More</a>
                                    
                                </div>
                            </div>
                        </article>
                    </div>
                   <div id="detail_1" style="display:none;"><?php echo nl2br($full_post[1])?></div>
                </div>
            </div>
            <br>
            <div class="row">
            <?php
            if($start>0){
    $start=$start-1;
echo '<div class="col-sm-1"></div><div class="col-sm-1"><a class="btn btn-primary" id="prev" rel="2" onclick="change(this)">&lt;Previous Page</a></div>';
}
if($start<$count-2){
    $start=$start+2;
echo '<div class="col-sm-1"></div><div class="col-sm-1"> <a class="btn btn-primary" id="next" rel="2" onclick="change(this)">Next Page &gt;</a></div>';
}
            ?>
            </div>
        </div>
    </section>

    


    <section id="portfolio">
        <div class="container" align="center">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Gallery</h2>
                <!--<p class="text-center wow fadeInDown">content for gallery</p>-->
            </div>

            <div>
            <h3>Images</h3><br/>
            </div>


<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 456px; background: #191919; overflow: hidden;" align="center">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">
            <div>
                <img u="image" src="images/projects/img1.jpg" />
                <img u="thumb" src="images/projects/img1.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img2.jpg" />
                <img u="thumb" src="images/projects/img2.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img3.jpg" />
                <img u="thumb" src="images/projects/img3.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img4.jpg" />
                <img u="thumb" src="images/projects/img4.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img5.jpg" />
                <img u="thumb" src="images/projects/img5.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img6.jpg" />
                <img u="thumb" src="images/projects/img6.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img7.jpg" />
                <img u="thumb" src="images/projects/img7.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img8.jpg" />
                <img u="thumb" src="images/projects/img8.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img9.jpg" />
                <img u="thumb" src="images/projects/img9.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img10.jpg" />
                <img u="thumb" src="images/projects/img10.jpg" />
            </div>
            
            <div>
                <img u="image" src="images/projects/img11.jpg" />
                <img u="thumb" src="images/projects/img11.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img12.jpg" />
                <img u="thumb" src="images/projects/img12.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img13.jpg" />
                <img u="thumb" src="images/projects/img13.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img14.jpg" />
                <img u="thumb" src="images/projects/img14.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img15.jpg" />
                <img u="thumb" src="images/projects/img15.jpg" />
            </div>
            <div>
                <img u="image" src="images/projects/img16.jpg" />
                <img u="thumb" src="images/projects/img16.jpg" />
            </div>
        </div>
        
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        

        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                    <div class=c></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!--#endregion Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
    </div>
    <!-- Jssor Slider End -->




        </div><!--/.container-->
    </section><!--/#portfolio-->

<!-- <div id="testimonialn"></div>

    <div class="section-header">
        <h2 class="section-title text-center wow fadeInDown">Testimonials</h2>          
    </div> -->

<div id="testimonialn"></div>
    <section id="animated-number">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Testimonials</h2>
            </div>
        
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <p>"It was fun. I never knew I was giving responses."</p>
                                <h5>Respondent, Ulhaas 2013</h5>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <p>"If you can sell at Mandi, you can sell anywhere in the world."</p>
                                <h5>Participant, Mandi 2012</h5>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <p>"Marketing God of Joka introduced me to the concepts of marketing even before entering the class."</p>
                                <h5>Participant, Marketing God of Joka</h5>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-danger btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->


    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/01.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Gaurav Agarwal</h3>
                            <span>President</span><br/>
                            <span>+918585010135</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/02.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Tejaswi Makkapati</h3>
                            <span>Sponsorship &amp; Corporate Relations</span><br/>
                            <span>+918585010377</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/03.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Ishan Mazumder</h3>
                            <span>Events Co-Head</span><br/>
                            <span>+918585010155</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/04.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Ankit Kumpawat</h3>
                            <span>Events Co-Head</span><br/>
                            <span>+918420817351</span>
                        </div>
                    </div>
                </div>
            </div>


           <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/01.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Sampati Dutta</h3>
                            <span>Infra Head</span><br/>
                            <span>+918585010312</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/02.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Ifrah Shaikh</h3>
                            <span>Design &amp; IT Head</span><br/>
                            <span>+918584880044</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/03.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Pranali Janbandhu</h3>
                            <span>Media &amp; PR Head</span><br/>
                            <span>+918585010159</span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/04.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Shivani Yadav</h3>
                            <span>New Initiatives &amp; Live Projects Head</span><br/>
                            <span>+918585010344</span>
                        </div>
                    </div>
                </div>
            </div>

          
    </section><!--/#meet-team-->

    <div class="section-header">
        <h2 class="section-title text-center wow fadeInDown">GET IN TOUCH</h2>          
    </div>


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="22.4456" data-longitude="88.3033"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Us</h3>
                            <br/>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 Team Census
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/TeamCensus.IIMC" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript" src="iim.js"></script>

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>

    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
                , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
                , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
                , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
                , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
                , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
                , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
                , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
                , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
                , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>


    <script type="text/javascript">
    function readmore (element) {
        //alert (element.id);
    var x = element.id;
    var n = x.split("_");
    var id = n[1];
    //alert (id);
    if(id==0){
        var x =document.getElementById("detail_0");
        if(document.getElementById('read_0').innerHTML =="Show More"){
        //x.innerHTML = '<?php echo $full_post[0]?>';
        x.style.border = '1px solid #F8F8FF';
        $("#detail_0").slideDown(1000);
        document.getElementById('read_0').innerHTML = "Show Less";
    }
    else{
        $("#detail_0").slideUp(1000);
        document.getElementById('read_0').innerHTML = "Show More";
        }
    }
    else{
        var x =document.getElementById("detail_1");
        if(document.getElementById('read_1').innerHTML == "Show More"){
            //x.innerHTML = '<?php echo $full_post[1]?>';
            x.style.border = '1px solid #F8F8FF';
        $("#detail_1").slideDown(1000);
        //x.style.border = '1px solid black';

        document.getElementById('read_1').innerHTML = "Show Less";
    }
    else{
        $("#detail_1").slideUp(1000);
        document.getElementById('read_1').innerHTML = "Show More";
        }
    }
}
    </script>






</body>
</html>