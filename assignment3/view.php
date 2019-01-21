
<?php


    $con=mysqli_connect("localhost", "root", "java@123");
    mysqli_select_db($con, "assignment2") or die("check your database");

    try
    {
     
        $q = "select * from userdata"; 
        $show=mysqli_query($con,  $q);
            
    }
    catch(Exception $e)
    {
      echo $e->getMessage().'xx';
    }
   
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ASSIGNMENT 2</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <!-- MDBootstrap Datatables  -->
    <link href="css/addons/datatables.min.css" rel="stylesheet">
  
    </head>

    <body>
        <div class="container">
            <div class="row mt-5 mb-5">
                <!-- <div class="col-lg-1 col-sm-2 col-md-2"></div> -->

                <div class="col-lg-12 col-sm-8 col-md-8 table-responsive">

                    <form method="post" class="text-center border border-light p-5"  >
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th >First Name</th>
                                    <th >Last Name</th>
                                    <th >Email</th>
                                    <th >Date Of Birth</th>
                                    <th >Mobile no.</th>
                                    <th >Designation</th>
                                    <th >Gender</th>
                                    <th >Hobbies</th>
      
                                </tr>
                            </thead>
                             <tbody>
                                <?php
                                    while($dt=mysqli_fetch_array($show))
                                    {                       
                                ?>
                                <tr>
                                    <td><?php echo $dt['first_name']; ?></td>
                                    <td><?php echo $dt['last_name']; ?></td>
                                    <td><?php echo $dt['email']; ?></td>
                                    <td><?php echo $dt['date_of_birth']; ?></td>
                                    <td><?php echo $dt['mobile']; ?></td>
                                    <td><?php echo $dt['designation']; ?></td>
                                    <td><?php echo $dt['gender']; ?></td>
                                    <td><?php echo $dt['hobbies']; ?></td>
                                </tr>
                                <?php 
                                    }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th >First Name</th>
                                    <th >Last Name</th>
                                    <th >Email</th>
                                    <th >Date Of Birth</th>
                                    <th >Mobile no.</th>
                                    <th >Designation</th>
                                    <th >Gender</th>
                                    <th >Hobbies</th>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
  
                </div>
                <!-- <div class="col-lg-1 col-sm-2 col-md-2"></div> -->
            </div>  
        </div>
  

            <!-- SCRIPTS -->
            <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

            <!-- MDBootstrap Datatables  -->
        <script type="text/javascript" src="js/addons/datatables.min.js"></script>

        <script>
            $(document).ready(function () 
            {
                $('#dtBasicExample').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
        </script>
  
    </body>

</html>


