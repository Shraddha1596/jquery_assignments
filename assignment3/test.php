<?php


$con=mysqli_connect("localhost", "root", "java@123");
mysqli_select_db($con, "assignment2") or die("check your database");

try
{
  
    $q = "select * from userdata"; 
    $show=mysqli_query($con,  $q);
    // print_r ($show); die;
    $data =array();
    while($dt=mysqli_fetch_assoc($show)){
        $data[] = $dt;
    }
    echo json_encode($data);
        
}
catch(Exception $e)
{
  echo $e->getMessage().'xx';
}

?>