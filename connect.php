<?php
$host = 'localhost';
$user = 'root';
$pw = '';
$nbd = 'sign';
$con = mysqli_connect($host,$user,$pw,$nbd);
if($con){
    echo "connected";
}else{
    echo "error ";
}
?>   