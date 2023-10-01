<?php
//notes
// session aik time period hota hy 
// ap ny hr us page py session lgana hy jisko ap chahty hy k login k bad show ho
// session lgany ka tariqa 


session_start();
// session ko use krny k liye hmy aik variable bna hota hy 

// like  

$_SESSION["username"]="Muhammad zubair";

echo $_SESSION["username"];

// session ko destroy krny k liye hum function use krty hy 

session_unset();

echo $_SESSION["username"];


?>