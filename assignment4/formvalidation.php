<?php
echo '<pre>'; print_r($_POST);
if(isset($_POST['username']))
{ 
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $check=$_POST['terms'];
    // echo"data123";

    if(empty($user)){
       echo' username mandatory to fill';
    }
    else
    {
        if(empty($pass))
        {
            echo'password mandatory to fill';
        }
        else
        {
            if(empty($cpass))
            {
                echo'confirmpass are mandatory to fill';
            }
            else
            {
                if(empty($check))
                {
                    echo "<b class='text'>tick the checkbx</b>";
                }
                else
                {
                    if($pass!= $cpass){
                        echo "<b class='text'>password and onfirm password didn't match<b>";
                    }
                    else{
                        echo "success";
                    }

                }
            }
        }
    }
    
}

?>