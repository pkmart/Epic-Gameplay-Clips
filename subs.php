<?php

//error_reporting(E_ALL | E_STRICT);
// value array
$subs[] = array();

// pdo
     $pdo = new PDO("mysql: host=localhost; dbname=epicgameplayclips; charset=utf8","root","");
     
     //echo $_SERVER['HTTP_REFERER'];
     /*exit();*/


 $subs[1][1] = isset($_POST["email"]) ?   $_POST["email"] : ' ';
 
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
       
$selectemail = "SELECT email FROM email_subs";
$selectemail = $pdo->query($selectemail);
$selectemailv[1]=array();
$selectemailv[1]= foreach_statement($selectemail);

//get present_date
     $subs[1][2] = new DateTime();
     $subs[1][2] =$subs[1][2]->format("Y-m-d H:i:s");
     
if(in_array($subs[1][1], $selectemailv[1])){
     header("Location: ".$_SERVER['HTTP_REFERER']."&msg=subs");
      exit();
}else{}

if(isset($_POST["submit"]) && !in_array($subs[1][2], $selectemailv[1])){
    
     $prep  = $pdo->prepare("INSERT INTO email_subs (email, date_subed) VALUES(:email, :date_subed)");
       $prep->execute(array(
			"email" =>  $subs[1][1],
                       "date_subed" =>  $subs[1][2]
			
		));
       
    //  echo var_dump($subs[1][2]);
     header("Location: ".$_SERVER['HTTP_REFERER']."?&msg=subs");
        exit();
       
    
}else{
    header("Location: ".$_SERVER['HTTP_REFERER']."&msg=subs");
        exit();
}
//$selectvids = null;