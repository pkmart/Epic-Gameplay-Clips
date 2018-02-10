<?php
error_reporting(E_ALL | E_STRICT);
// value array
$vidf[] = array();

// pdo
     $pdo = new PDO("mysql: host=localhost; dbname=epicgameplayclips; charset=utf8","root","");


   // echo isset($_FILES['vidf']['error']);

    // Code following an exception is not executed.
   // echo 'Never executed';
     //$vidf[1][2] = isset($_FILES["vidf"]) ?   $_FILES["vidf"] : ' ';
    if(isset($_FILES['vidf']['error'])){
         $vidf[1][1][1] = $_FILES["vidf"]['name'];
        $vidf[1][1][2] =$_FILES["vidf"]['size'];
        $vidf[1][1][3] =$_FILES["vidf"]['tmp_name'];
        $vidf[1][1][4]=$_FILES["vidf"]['type'];
              //  echo "hey";

    }else{
         header("Location: index.php?msg=Video not uploaded");
            exit();
    }



$type[] = array("mp4", "avi","asf","flv", "mov","avchd","mpg","wmv","divx","swf","qt","mpeg-4");
//$vidw= strtolower(end(explode('.',$vidf[1][1][1])));
$ext = pathinfo($vidf[1][1][1], PATHINFO_EXTENSION);

 //$vidf[1][2][1] = "vous";

 $vidf[1][2] = isset($_POST["slink"]) ?   $_POST["slink"] : ' ';
 $vidf[1][3] = isset($_POST["cat"]) ?  $_POST["cat"] : ' ';
 $vidf[1][4] = isset($_POST["message"]) ?   $_POST["message"] : ' ';
 
 /*
 echo var_dump($vidf[1][3]);
 exit();*/
 
 //select all video id
 //get category id, name
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
        
         return $getvalues;
    }
       
$selectvids = "SELECT temp_code FROM videos_info";
$selectvids = $pdo->query($selectvids);
$selectvidsv[1]=array();
$selectvidsv[1]= foreach_statement($selectvids);
//$selectvids = null;

 //echo var_dump($selectvidsv);
   // exit();
 //echo "hey";
 
 if(isset($_POST["vidsub"]) && isset($_FILES['vidf']['error'])){
     
     $errors = "";
      
      //get present_date
     $vidf[1][5] = new DateTime();
     $vidf[1][5] =$vidf[1][5]->format("Y-m-d H:i:s");
     
     $vidf[1][6] = rand(1, 30000);
     
     //get temp code
     if(!empty($selectvidsv[1])){
     while(in_array($vidf[1][6], $selectvidsv[1])){
        
        $vidf[1][6] = rand(1, 30000);
        
        }
     }
    
     
      //add video info to database
       $prep  = $pdo->prepare("INSERT INTO videos_info (name, date_uploaded, categories, source_link, temp_code) VALUES(:name, :date_uploaded, :categories, :source_link, :temp_code)");
       $prep->execute(array(
			"name" =>  $vidf[1][4],
                       "date_uploaded" => $vidf[1][5],
			"categories" =>  $vidf[1][3],
			//"file_link" => "gameplayclips/".$vidf[1][1][1]."",
			"source_link" => $vidf[1][2],
                        "temp_code" => $vidf[1][6]
		));
       
       //get vid_id using temp_code
        //$selectvidsv[1]= null;
        $selectvidsv[1]=array();
        $selectvids = "select vid_id from videos_info where temp_code=".$vidf[1][6]."";
        $selectvids = $pdo->query($selectvids);
        $selectvidsv[1]= foreach_statement($selectvids);
        $selectvids = null;
        
        
      //   echo var_dump($selectvidsv);
  //  exit();
        //delete temporary code
	   $delete ="update videos_info set temp_code=0 where vid_id =".$selectvidsv[1][1].";";
	$pdo->query($delete);
        
       //upload video section
       
      // echo strtolower($ext);
         if (!empty($selectvidsv[1])) {
     if(!in_array(strtolower($ext), $type)=== false){
                $errors="extension not allowed, Accepted: mp4, avi, asf, flv, mov, avchd, mpg, wmv, divx, swf, qt, mpeg-4.";
             }
             
     //file size
    if($vidf[1][1][2] > 400000000000){
       $errors='File size must be or under 400 MB';
    }
    
     //change file name
   if (!empty($vidf[1][1][1])) {
        $vidid = $selectvidsv[1][1];
      $vidf[1][1][1] = "vid".$vidid.".mp4";

      }
      
      if(empty($errors)==true){
                if(move_uploaded_file($vidf[1][1][3], "gameplayclips/".$vidf[1][1][1])){
                    
                     header("Location: index.php?msg=Video uploaded successfullly.");
                      exit();
                    
                }else{
                     $errors='Video not uploaded';
                  //  echo var_dump($errors);
                     
                     header("Location: index.php?msg=Video not uploaded");
            exit();
                }
      }else{
           header("Location: index.php?msg=Video not uploaded");
            exit();
      }
       
         }else{
              header("Location: index.php?msg=Video not uploaded");
            exit();
         }
       
     /* echo var_dump($errors);
      
     echo "hey";*/
     
     
    // echo var_dump($selectvidsv)." ".count($selectvidsv[1]);
    // echo $vidf[1][2];
 }else{
      header("Location: index.php?msg=Video not uploaded");
            exit();
 }

