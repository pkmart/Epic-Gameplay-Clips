<?php

//this is a test 
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

    <title>EPIC GAMEPLAY CLIPS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
    
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
            <a href="#" style="color:white">EPIC GAMEPLAY CLIPS</a>
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
    <div id="sidebar-wrapper">
        <nav id="spy">
            <ul class="sidebar-nav nav">
                <li class="sidebar-brand" style="margin:20px 0px 0px 0px;">
                    <a href="index.php#upmsg"><span class="fa fa-home solo">Upload Clips</span></a>
                </li>
                <li class="sidebar-brand">
                    <a href="#anch1" onclick="" id="openmod" data-toggle="modal" data-target="#GSCCModal"><span class="fa fa-home solo">Subscribe</span></a>
                </li>
                <li class="sidebar-brand">
                    <a href="contact-us.php"><span class="fa fa-home solo">Contact</span></a>
                </li>
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
        
        <div class="row" style="/*border-style: solid; border-color: black;*/">
            
              <!--<div class="col-md-4">-->
            <h3>
                </h3>
            <div class="tags">
                
                <?php
                 if(isset($valuearray[1]) && !empty($valuearray[1])){
                                                      
                    for($e=1;$e<=(count($valuearray[1])-1);$e++){
                        
                        $randy = rand(0, 8);
                      //   <!-- echo "<option value='".$valuearray[1][$e]."'>".$valuearray[2][$e]."</option>";-->
                         echo "<a href='videos.php?cat=".$valuearray[1][$e]."' class='".$valuearray[3][$randy]."' style='background-color:none'>".$valuearray[2][$e]."</a>";

                    }
                  }else{}
                  
                ?>
              <!--  <a href="http://www.jquery2dotnet.com/search/label/css" class="cust1" style="background-color:none">Adventure</a>
                <a href="http://www.jquery2dotnet.com/search/label/Javascript" class="primary">Simulations</a>
                <a href="http://www.jquery2dotnet.com/search/label/jquery" class="info"> Real-Time Strategy (RTS)</a>
                <a href="http://www.jquery2dotnet.com/search/label/html5" class="danger">Puzzle</a>
                <a href="http://www.jquery2dotnet.com/search/label/css3" class="warning">Action</a>
                <a href="http://www.jquery2dotnet.com/search?q=demo" class="success">Stealth Shooter</a>
                <a href="http://www.jquery2dotnet.com/search/label/mvc4" class="danger">Combat</a>
                <a href="http://www.jquery2dotnet.com/search/label/asp.net" class="info">First Person Shooters (FPS)</a> 
                <a href="http://www.jquery2dotnet.com/search/label/c%23" class="primary">Sports</a> 
                <a href="http://www.jquery2dotnet.com/search/label/wpf" class="warning">Role-Playing (RPG)</a>
                <a href="http://www.jquery2dotnet.com/search/label/linq" class="cust3">Educational</a>
                <a href="http://www.jquery2dotnet.com/search/label/linq" class="primary">Third Person Shooters (FPS)</a>
                 <a href="http://www.jquery2dotnet.com/search/label/wpf" class="warning">Top-Down</a>
                <a href="http://www.jquery2dotnet.com/search/label/linq" class="primary">Turn Based</a>
                <a href="http://www.jquery2dotnet.com/search/label/linq" class="primary">Real-Time</a>
                 <a href="http://www.jquery2dotnet.com/search/label/wpf" class="cust4">Shoot'em up</a>
                <a href="http://www.jquery2dotnet.com/search/label/linq" class="cust1">Beat'em up</a>
                <a href="http://www.jquery2dotnet.com/search/label/linq" class="cust2">Rail Shooter</a>

                <a href="http://www.jquery2dotnet.com/search/label/bootstrap" class="success">Massively Multiplayer Online (MMO)</a>-->
                
            </div>
      <!-- </div>
       -->
        </div>
        
         <div class="row">
            
            <div class="container">
			<div class="row main" id="rowmain">
				<div class="main-login main-center" id="maincent">
				<h5 id="upmsg">Upload GamePlay Video HighLights</h5>
					<form class="" method="post" action="uploadvid.php" id="vidform" enctype="multipart/form-data">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Video file</label>
							<div class="cols-sm-10">
								<div class="input-group">
                                                                    <!--
									<span class="input-group-addon"><!--<i class="fa fa-user fa" aria-hidden="true">--</i></span>
								-->
                                                                <input type="file" class="form-control" name="vidf" id="vidf" required="true"  />
                                                                    
  <!--                                                                  <div id="input-upload-file" class="box-shadow">
  <span>upload! (ღ˘⌣˘ღ)</span> 
  <input type="file" class="upload" id="fileUp" name="fileUpload" onchange="setFileInfo(this.files)">
</div>-->

                                                                </div>
							</div>
						</div>

                                                <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Source Link (OPTIONAL)</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon "><i class="fa fa-link" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="slink" id="slink"  placeholder="Source Link ex: http://www..."/>
								</div>
							</div>
						</div>
                                            
                                            <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Choose Genre to upload your video</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-th-list" aria-hidden="true"></i></span>
                                                                        <!--
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>-->
                                                                        <select id="cat" name="cat"  placeholder="Category"  required="true" value="" class="form-control input-md">
						<?php
                                                   if(isset($valuearray[1]) && !empty($valuearray[1])){
                                                      
                                                       for($e=1;$e<=(count($valuearray[1])-1);$e++){
                                                             echo "<option value='".$valuearray[1][$e]."'>".$valuearray[2][$e]."</option>";
                                                       }
                                                     }else{}
                                                     
                                                     
						?>
                            
                            <!--
                         <option value="1">Option one</option>
                          <option value="2">Option two</option>-->
                        </select>
								</div>
							</div>
						</div>
                                            
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">OPTIONAL ( Title, Description ...etc )</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<!--<input type="text" class="form-control " name="email" id="email"  placeholder="Enter your Email"/>
                                                                        -->
                                                                        <textarea id="message" name="message" class="form-control span6" placeholder="Your Message" rows="5" maxlength="50"></textarea>
								</div>
							</div>
						</div>

						

						
						

						<div class="form-group ">
                                                    <input type='submit'  name='vidsub' id="vidsub"  value='UPLOAD VIDEO' class="btn btn-primary btn-lg btn-block login-button" style="background-color: BLUE; color:white">
						</div>
						
					</form>
				</div>
			</div>
		</div>
           
       
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
   
}, 20000);
    
    </script>
</body>

</html>
