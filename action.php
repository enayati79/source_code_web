<?php
var_dump($_POST);
var_dump( $POST);
var_dump( $_REQUEST ); 
 
 $dbc = new mysqli('sql200.gigfa.com', 'gigfa_25765222', 'sng2hfv4', 'gigfa_25765222_815'); 
  $sql = "INSERT INTO cm (title, body)
  VALUES ('{$_POST['title']}', '{$_POST['body']}')"; 
  echo $sql . '<br>';
   $result = $dbc -> query( $sql ); 
   $dbc -> close();
?>