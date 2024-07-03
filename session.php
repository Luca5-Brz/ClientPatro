<?php
session_start();
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 600)) { //on compte en secondes
    session_unset(); 
    session_destroy(); 
    echo "session destroyed"; 
    include("logout.php");
}
$_SESSION['start'] = time();
?>