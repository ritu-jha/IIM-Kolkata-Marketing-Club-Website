<?php
$start=$_GET['q'];
$array = "";
require_once "connect.php";
$end = 2;
//echo $start;
$array=$array.'<div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Live Updates</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>';
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
            	$array=$array.'<div class="row" id="row_0">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="img/alila/'.$img[0].'" alt="" style="width:180px; height:180px;">
<!--                                 <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span> -->
                            </div>
                            <div class="media-body" id="f_0">
                                <header class="entry-header">
                                    <div class="entry-date">'.$date[0].'</div>
                                    <h2 class="entry-title"><a href="#">'.$title[0].'</a></h2>
                                </header>

                                <div class="entry-content">
                                    <P>'.$post[0].'</P>
                                    <a class="btn btn-primary" id="read_0" onclick="readmore(this)">Show More</a>
                                </div>
                               
                            </div>
                        </article>
                    </div>
                     <div id="detail_0" style="display:none;">'.$full_post[0].'</div>
                </div>
            </div>
            <br>';
            if($i>1){
            $array=$array.'<div class="row" id="row_1">
            <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="img/alila/'.$img[1].'" alt="" style="width:180px; height:180px;">
<!--                                 <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span> -->
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">'.$date[1].'</div>
                                    <h2 class="entry-title"><a href="#">'.$title[1].'</a></h2>
                                </header>

                                <div class="entry-content">
                                    <P>'.$post[1].'</P>
                                    <a class="btn btn-primary" id="read_1" onclick="readmore(this)">Show More</a>
                                </div>
                               
                            </div>
                        </article>
                    </div>
                   <div id="detail_1" style="display:none;">'.$full_post[1].'</div>
                </div>
            </div>
            <br>';
        }
        $array=$array.'<div class="row">';

if($start>0){
	//$start=$start-3;
$array=$array.'<div class="col-sm-1"></div><div class="col-sm-1"><a class="btn btn-primary" id="prev" rel="2" onclick="change(this)">&lt;Previous Page</a></div>';
}
if($start<$count-2){
	//$start=$start+3;
$array=$array.'<div class="col-sm-1"></div><div class="col-sm-1"> <a class="btn btn-primary" id="next" rel="2" onclick="change(this)">Next Page &gt;</a></div>';
}
$array=$array.'</div>';
echo $array;
?>