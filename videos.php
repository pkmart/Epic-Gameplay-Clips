<?php


// this array hold all values
$valuearray[] = array();

// pdo
     $pdo = new PDO("mysql: host=localhost; dbname=epicgameplayclips; charset=utf8","root","");


 //this function extract the value from the query using the foreach statement
    function foreach_statement($getval){
        $getvalues[]= array();
        $countr = 1;
        foreach ($getval as $key){
            foreach ($key as $value){
               $getvalues[$countr]= $value; 
            }
            $countr++;
        } 
        
        //return values as array
        return $getvalues;
    
    }

//get category id, name
$selectcat = "select cat_id from categories";
$selectcat = $pdo->query($selectcat);
$valuearray[1]= foreach_statement($selectcat);
$selectcat = null;

$selectcat = "select name from categories";
$selectcat = $pdo->query($selectcat);
$valuearray[2]= foreach_statement($selectcat);
$selectcat = null;

//gameplay genre colors
$valuearray[3] = array("primary","success","info","warning","danger","cust1","cust2","cust3","cust4");

//get videos

$cat = isset($_GET["cat"]) ?   $_GET["cat"] : "First Person Shooter (FPS)";

$selectcat = "select vid_id from videos_info where categories='".$cat."' ORDER BY date_uploaded DESC";
$selectcat = $pdo->query($selectcat);
$valuearray[4]= foreach_statement($selectcat);
$selectcat = null;
/*
echo var_dump($valuearray[4]);
exit();*/

$selectcat = "select name from videos_info  where categories='".$cat."' ORDER BY date_uploaded DESC";
$selectcat = $pdo->query($selectcat);
$valuearray[5]= foreach_statement($selectcat);
$selectcat = null;

$selectcat = "select views from videos_info  where categories='".$cat."' ORDER BY date_uploaded DESC";
$selectcat = $pdo->query($selectcat);
$valuearray[6]= foreach_statement($selectcat);
$selectcat = null;

//echo var_dump($valuearray[6]);

$selectcat = "select source_link from videos_info  where categories='".$cat."' ORDER BY date_uploaded DESC";
$selectcat = $pdo->query($selectcat);
$valuearray[7]= foreach_statement($selectcat);
$selectcat = null;

$selectcat = "select vid_rates from videos_info  where categories='".$cat."' ORDER BY date_uploaded DESC";
$selectcat = $pdo->query($selectcat);
$valuearray[8]= foreach_statement($selectcat);
$selectcat = null;

$selectcat = "select date_uploaded from videos_info  where categories='".$cat."' ORDER BY date_uploaded DESC";
$selectcat = $pdo->query($selectcat);
$valuearray[9]= foreach_statement($selectcat);
$selectcat = null;


//echo $cat;
/*
$k = array_rand($valuearray[3]);
$v = $valuearray[3][$k];

echo var_dump($v);

exit();*/

if(isset($_GET['msg']) == "subs"){
    echo "<script>"
         ."alert('Thank you for SUBSCRIBING')"
         ."</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Video Clips</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/videos.css" rel="stylesheet">
    
    	<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>

    <!-- Navigation -->
    <!--
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">EPIC GAMEPLAY CLIPS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>--
    </nav>-->

       <div id="wrapper">
   <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
    			</button>
                <div  class="navbar-brand">
                    
    				<a href="#">Project name</a>
                </div>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
				</ul>
			</div><!--/.nav-collapse --
		</div>
	</nav>-->
   <nav class="navbar navbar-expand-lg  fixed-top" style="background-color:black">
        <div class="navbar-brand" href="#">
            <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                        <span class="input-group-addon"></i><i class="fa fa-bars"  aria-hidden="true"></i></span>
                    </a>
            <a href="index.php" style="color:white">EPIC GAMEPLAY CLIPS</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>-->
    </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper" >
        <nav id="spy">
            <ul class="sidebar-nav nav" style="padding-bottom: 70px; margin-top: 20px;">
                <li class="sidebar-brand" style="">
                    <a href="index.php#upmsg"><span class="fa fa-home solo">Upload Clips</span></a>
                </li>
                 <li class="sidebar-brand">
                    <a href="#anch1" onclick="" id="openmod" data-toggle="modal" data-target="#GSCCModal"><span class="fa fa-home solo">Subscribe</span></a>
                </li> 
                 <li class="sidebar-brand">
                    <a href="contact-us.php"><span class="fa fa-home solo">Contact</span></a>
                </li>
               
                 <?php
                 if(isset($valuearray[1]) && !empty($valuearray[1])){
                                                      
                    for($e=1;$e<=(count($valuearray[1])-1);$e++){
                         $randy = rand(0, 8);
                      //   <!-- echo "<option value='".$valuearray[1][$e]."'>".$valuearray[2][$e]."</option>";-->
                        // echo "<a href='videos.php?cat=".$valuearray[1][$e]."' class='".$valuearray[3][$randy]."' style='background-color:none'>".$valuearray[2][$e]."</a>";
                          echo "<li id='genretags'>";
                           echo "<a href='videos.php?cat=".$valuearray[1][$e]."' class='".$valuearray[3][$randy]."' style='background-color:none'>";
                                echo "<span class='fa fa-anchor solo'  style=''>".$valuearray[2][$e]."</span>";
                            echo "</a>";
                        echo "</li>";
                                  
                    }
                  }else{}
                  
                ?>
                    
              <!--  <li>
                    <a href="#anch1">
                        <span class="fa fa-anchor solo">Anchor 1</span>
                    </a>
                </li>
                <li>
                    <a href="#anch1">
                        <span class="fa fa-anchor solo">Anchor 1</span>
                    </a>
                </li>
                <li>
                    <a href="#anch2">
                        <span class="fa fa-anchor solo">Anchor 2</span>
                    </a>
                </li>
                <li>
                    <a href="#anch3">
                        <span class="fa fa-anchor solo">Anchor 3</span>
                    </a>
                </li>
                <li>
                    <a href="#anch4">
                        <span class="fa fa-anchor solo">Anchor 4</span>
                    </a>
                </li>-->
            </ul>
        </nav>
    </div>
    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    
                     <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Game Play Videos Categories <small></small></h1>
        
        
        
         <div class="row">
            
            <!-- /.col-lg-3 -->
            <?php
           // echo var_dump($valuearray[5]);
            for($e=1;$e<=(count($valuearray[4])-1);$e++){
                
                    echo "<div class='col-lg-9'>";

                      echo "<div class='card mt-4'>";
                       echo "<p class='card-text' style='background-color:grey; font-weight:bold; font-size:20px;  padding:5px 5px 5px 5px;'>Promoted post</p>";
                       // echo "<img class='card-img-top img-fluid' src='gameplayclips/vid".$valuearray[4][$e].".mp4' alt=''>";
                       //  echo "<iframe  height='315' src='gameplayclips/vid".$valuearray[4][$e].".mp4' allowfullscreen=''></iframe>";
                        echo "<video  class='card-img-top img-fluid' height='315' controls autoplay loop muted>";
                         echo   "<source src='gameplayclips/vid".$valuearray[4][$e].".mp4' type='video/mp4'>";
                         //echo   "<source src='movie.ogg' type='video/ogg'>";
                          echo "Your browser does not support the video tag.";
                         echo "</video>";
                        echo "<div class='card-body'>";
                         echo "<a href='".$valuearray[7][$e]."' target='_blank'><h5 class='card-title'>".$valuearray[7][$e]."</h5></a>";
                         echo  "<h4>Views:".$valuearray[6][$e]."</h4>";
                          echo "<span class='text-warning'>&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                          4.0 stars";
                          echo "<p class='card-text'>".$valuearray[5][$e]."</p>";
                        echo "</div>";
                     echo  "</div>";

                       echo  " </div>";
           
            }
                
                ?>
          <!-- /.card -->

         <!-- <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <a href="#" class="btn btn-success">Leave a Review</a>
            </div>
          </div>-->
          <!-- /.card -->

       
           
       
        </div>
        
        <!--

<div id="infos">hey</div>
-->
        <!--
        <div class="row">
            
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Project One</a></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Project Two</a></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
       
        </div>-->
        <!-- /.row -->

       

    </div>
    <!-- /.container -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
       
       <!-- this is the mmodal to uses-->
       <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
        <h4 class="modal-title" id="myModalLabel">NEVER MISS EPIC GAMEPLAY AGAIN</h4>
      </div>
      <div class="modal-body">
       
          <form class="form-horizontal" action="subs.php" method="post">
              <!--
          <div class="form-group"><label>Name</label><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          -->
          <div class="col-xs-8">
                                        <div class="form-group">
                                            <label for="InputName" class="col-lg-4 control-label">Email</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="email@you.com (so that we can contact you)" required>
                                            </div>
                                        </div>
                                                      <input style="background-color: orange; font-weight:bold; font-size:20px;" type="submit" name="submit" id="submit" value="SUBSCRIBE!" class="btn btn-info pull-right" >

              
          </div>
          <!--
              <div class="form-group"><label>E-Mail</label><input class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
          <div class="form-group"><button type="submit" class="btn btn-success pull-right" style="background-color: orange; font-weight:bold;">SUBSCRIBE!</button> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; </p></div>
       
          -->
          </form>
          
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
    
   

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script>

            
	/*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
       // e.preventDefault();
        $("#wrapper").toggleClass("active");
        //alert(1);
    });
     
    var myVideos = [];
window.URL = window.URL || window.webkitURL;
function setFileInfo(files) {
  myVideos.push(files[0]);
  var video = document.createElement('video');
  video.preload = 'metadata';
  video.onloadedmetadata = function() {
    window.URL.revokeObjectURL(this.src)
    var duration = video.duration;
    myVideos[myVideos.length-1].duration = duration;
    updateInfos();
  }
  video.src = URL.createObjectURL(files[0]);;
}

function updateInfos(){
      document.querySelector('#infos').innerHTML="";
  for(i=0;i<myVideos.length;i++){
      document.querySelector('#infos').innerHTML += "<div>"+myVideos[i].name+" duration: "+myVideos[i].duration+'</div>';
     }
  } 
  
 
  var i = setInterval(function(){
    // do your thing
    
        $('#openmod').trigger('click');
   
}, 40000);
    
    </script>
</body>

</html>
