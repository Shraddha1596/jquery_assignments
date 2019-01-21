<?php

    $con=mysqli_connect("localhost", "root", "java@123");
    mysqli_select_db($con, "assignment5") or die("please check your database");

    if(!isset($_POST['searchTerm']))
    {
        // $query="SELECT * FROM users ORDER BY name DESC";
        $fetchData=mysqli_query($con, "select * from users ORDER BY name DESC");
    }
    else
    {
        $search=$_POST['searchTerm'];
        // $query="SELECT * from users where name like '%".$search."%'";
        $fetchData=mysqli_query($con,"select * from users where name like '%".$search."%'");
    }

    $data=array();

    while($row = mysqli_fetch_array($fetchData))
    {
        $data[] = array("id"=>$row['id'], "text"=>$row['name']);
    }
    // console.log($data);

    echo json_encode($data);
?>