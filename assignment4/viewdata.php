<?php

$con=mysqli_connect("localhost", "root", "java@123");
mysqli_select_db($con, "assignment2") or die("check your database");

    try
    {
        //    $query=  "SELECT TOP 5 * FROM employee";
        $query="select * from employee LIMIT 5";

        $showdata=mysqli_query($con, $query);
       
        $data=array();

        while($dt=mysqli_fetch_assoc($showdata)){

            print_r($dt);
            $data[]=$dt;
        }
        echo json_encode($data);
        // print_r($data);
    } 
    catch(Exception $e)
    {
        echo $e->getMessage().'xx';
    }  



?>