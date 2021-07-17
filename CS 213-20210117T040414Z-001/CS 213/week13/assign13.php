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
    echo json_encode ($datae);
    $myfile = "students.txt";
    $fh = fopen($myfile, 'w') or die ("can't open file");
    fwrite($fh, $datae);
    fclose($fh);

}


?>