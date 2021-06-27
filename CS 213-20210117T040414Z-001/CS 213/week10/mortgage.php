<?php

   //  This function reads the form "query string"
   //  
   // This function handles both an http "get".
   $apr = $_GET['apr']; 
   $term = $_GET['term'];
   $amount = $_GET['amount'];
   //amount * (apr / 100 / 12) / (1 - (Math.pow(1/(1 + (apr / 100 / 12)), (term * 12))))
   $payment = $amount * ($apr/"100"/"12") / ("1" - (pow("1"/("1" + ($apr / "100"/"12")),$term * "12")));
   $payment = number_format($payment,2);
?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Read Form!</title>
  <body>
    <h3> Whith the following information</h3>
      <?php
        print "APR is: $apr<br/>";
        print "Length of the loan is: $term<br/>";
        print "Amount of the loan is: $amount<br/>";
        ?>
    <h3>The monthly Payment is : <br />
      <?php
         print "$ $payment<br />";
      ?>  
   </h3>

   

  

 
</body>
</html>

