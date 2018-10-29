
<?php 
$conn = mysqli_connect("localhost", "root", "");

if(!$conn){
    DIE("could not connect:" . mysqli_error($conn));
}
    
mysqli_select_db($conn, "battlebot");

?>


