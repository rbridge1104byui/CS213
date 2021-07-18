<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $datae = array();
    $datae[] = array(
        'performance' => $_POST['performance'],
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'student_id' => $_POST['student_id'],
        'first_name_2' => $_POST['first_name_2'],
        'first_name_2' => $_POST['first_name_2'],
        'student_id_2' => $_POST['student_id_2'],
        'skill' => $_POST['skill'],
        'instrument' => $_POST['instrument'],
        'location' => $_POST['location'],
        'room' => $_POST['room'],
        'time_slot' => $_POST['time_slot'],
    );
    //echo json_encode ($datae);
    $myfile = "/Users/robert.bridge/Documents/School:Church Docs/School Stuff/CS213/CS213/CS 213-20210117T040414Z-001/CS 213/week13/documents/students.txt";
    $fh = fopen($myfile, 'a') or die ("can't open file");
    fwrite($fh, json_encode($datae));
    fclose($fh);

}
/*
if(isset($_GET['request'])){
    $request = $_GET['request'];
 }
 
 // Fetch records 
 if($request == 1){
    $myfile = "/Users/robert.bridge/Documents/School:Church Docs/School Stuff/CS213/CS213/CS 213-20210117T040414Z-001/CS 213/week13/documents/students.txt";

    echo file_get_contents($myfile);
    exit;

 }*/


?>