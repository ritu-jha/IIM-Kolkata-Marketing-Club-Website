<!DOCTYPE html>
<?php require_once('connect.php');
?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Responsive Onepage HTML Template | Multi</title>
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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

<body>

<?php
                                    
                                    if(isset($_POST['submit'])){
                                        $title = @$_POST['title'];
                                        $short = @$_POST['shortdes'];
                                        $detail=@$_POST['detail'];
                                        $image=@$_POST['image'];
/*                                        $submit=@$_POST['submit'];
                                        $password=@$_POST['password'];
                                       if($_POST['password']!=$passwordtrue)
                                        {
                                            echo "Wrong Password";
                                        }


                                        else{ */
                                            
                                            if($title&&$detail){
                                            	$time = time();
                                                $detail = str_replace(array("\n", "\r"), array("",""), $detail); 
                                                $qry="INSERT INTO posts(Title,Shortdes,Created,Detail,Image)
                                    VALUES('$title','$short','$time','$detail','$image')";
                                    mysql_query($qry) or die("Can't");
                                    $submit=0;
                                            }
                                            else
                                            {
                                                echo "Please Enter Title Or Post........ Thank You!!!!!!";
                                            }
                                        /*}*/
                                    }
                                    
                                    ?>





<div class="blog-content">
                                

                                    <form method="POST" action="editor.php">
                
                                        <div class="col-sm-4">
                                         
                                                <label>Title:</label>
                                                <input type="text" name="title" class="form-control" required="required">
                                                <br/>
                                            
                                                <label>Short des:</label>
                                                <input type="text" name="shortdes" class="form-control" required="required">
                                                <br/>
                                            
                                                <!-- <label>Date created:</label>
                                                <input type="text" name="title" class="form-control">
                                                <br/> -->
                                            
                                                

                                                <label>Image name(with extension):</label>
                                                <input type="text" name="image" class="form-control">
                                                
                                                                 
                                        </div>
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-7">
                                           
                                                <label>DETAIL DES</label>
                                                <textarea name="detail" rows="12" cols="50"></textarea>
                                                <script type="text/javascript">
        										CKEDITOR.replace( 'detail' );
      												</script>               
                                                                  
                                            
                                                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            
                                        </div> 

                                    </form>

                            </div>




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

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>

</body>
</html>