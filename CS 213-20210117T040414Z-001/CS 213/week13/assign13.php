<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    //echo json_encode ($datae);
    $myfile = "data/students.txt";
    $fh = fopen($myfile, 'a+') or die ("can't open file");
    fwrite($fh, json_encode($_POST));
    fclose($fh);
    //echo file_get_contents($myfile);
    //return file_get_contents($myfile);
    header("Location: assign13.html");
    exit;

}

//if ($_SERVER['REQUEST_METHOD'] ==='GET'){
  
    $myfile = "data/students.txt";


    print json_encode( file_get_contents($myfile));
    exit;

 //}


?>