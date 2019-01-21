
<?php
// include "index.html";

$con=mysqli_connect("localhost", "root", "java@123");
mysqli_select_db($con, "assignment2") or die("check your database");


if(isset($_POST['submit']))
{
 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $mobile=$_POST['mno'];
  $desig=$_POST['designation'];
  $gender=$_POST['gender'];
  // $hobb=$_POST['hobbies[]'];

  if(isset($_POST["hobbies"]) && is_array($_POST["hobbies"]))
  {
    $hobby = implode(", ", $_POST["hobbies"]);
    echo $hobby;
  }

  $flag=true;

  if(empty($fname))
  {
    // $fnameerror="enter first name";
    echo "enter first name<br>";
    $flag=false;
  }
  else{

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
    {
      echo"Only letters and white space allowed <br>"; 
      $flag=false;
    }
  }
  if (empty($lname))
  {
    echo "enter last name <br>";
    $flag=false;
  }
  if (empty($email))
  {
    echo "email is required<br>";
    $flag=false;
  }
  if (empty($mobile))
  {
    echo "enter mobile <br>";
    $flag=false;
  } 
  else
  {
    if (!preg_match('/^[0-9]{10}+$/', $mobile)) 
    {
      echo "invalid phone number type";
      $flag=false;
    }
  }
  
  if (empty($desig))
  {
    echo "enter designation<br>";
    $flag=false;
  }

  if(empty($dob))
  {
    $dob='null';
  }
  if(empty($gender))
  {
    $gender='null';
  }
  if(empty($hobby))
  {
    $hobby='null';
  }
  
  if( $flag)
  {
    
    try{
      // echo "<br>testing..<br>";
      $q = "INSERT INTO `userdata` (`first_name`, `last_name`, `email`, `date_of_birth`, `mobile`, `designation`, `gender`, `hobbies`) VALUES ('$fname', '$lname', '$email', '$dob', '$mobile', '$desig', '$gender', '$hobby')"; 
      $ins=mysqli_query($con,  $q);
      // echo"check check <br>";
      if($ins>0){
        echo "record inserted successfully";
      }
      else{
        echo "an error occured";
      }
    }catch(Exception $e){
      echo $e->getMessage().'xx';
    }
   
  }
}
?>
