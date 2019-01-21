<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){

                $("form#register").submit(function(e)
                {
                    console.log("testing");
                    var form= $(this);
                    var url= form.attr('action');

                    $.ajax(
                    {
                        type:"POST",
                        url:url,
                        data: form.serialize(),

                        success: function(data)
                        {
                            // alert(data);
                            // console.log("checking");
                            $('#message').html(data);
                            // console.log(data);
                        }
                    });

                    e.preventDefault(); 
                });

            });
        </script>
        <style>
            .text{
                color:red;
            }
        </style>
    </head>
    <body style="text-align:center">
        <form id="register" method="post" action="formvalidation.php">
            <h3>SIGN UP</h3>
            USERNAME &nbsp;&nbsp;<input type="text" name="username"><br><br>
            PASSWORD &nbsp;&nbsp;<input type="password" name="password"><br><br>
            CONFIRM PASSWORD &nbsp;&nbsp;<input type="password" name="cpassword"><br><br>
            <input type="checkbox" name="terms">I agree to the terms and conditions<br><br>
            
            <input type="submit" name="signup" value="SIGN UP">

            <div id="message"></div>
        </form>
    </body> 
<html>

