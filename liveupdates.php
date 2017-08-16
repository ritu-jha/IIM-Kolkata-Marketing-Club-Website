
<!Doctype HTML>
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
    <style>
    br {
   display: block;
   margin: 1px 0;
}
    </style>  
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
    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">

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
		                    <ul class="dropdown-menu">
		                        <li>
		                            <a href="/template-categories/all"><i class="fa fa-globe fa-fw"></i>Inter B School Events</a>
		                        </li>
		                        <li>
		                            <a href="/template-categories/popular"><i class="fa fa-star fa-fw"></i>Intra B School Events</a>
		                        </li>
		                        <li>
		                            <a href="/buy-bootstrap-templates"><i class="fa fa-shopping-cart fa-fw"></i>Pan IIM Events</a>
		                        </li>
		                        
		                    </ul>
		                </li>
                        <li class="scroll"><a href="#portfolio">Projects</a></li>
                        <li class="scroll"><a href="#about">Updates</a></li>
                        <li class="scroll"><a href="#meet-team">Gallery</a></li>
                        <li class="scroll"><a href="#testimonial">Testimonials</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->








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
                                <img class="img-responsive" src="img/alila/<?php echo $img[0]?>.jpg" alt="" style="width:180px; height:180px;">
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
                                <img class="img-responsive" src="img/alila/<?php echo $img[1]?>.jpg" alt="" style="width:180px; height:180px;">
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

    

</body>
</html>