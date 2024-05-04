<?php
session_start();
session_unset();
session_destroy();
header('location:register.php');
//ki ta3ml bochra el avatar ki nenzl alih nalkaw 
//my settings , my profile w logout , ken e logout tekhdm , ki tnzl aleha taml e traitement hedha 
//fama mini code taa if (!isset ... heder ... yalzm ytkteb f owl page login normalement )
?>