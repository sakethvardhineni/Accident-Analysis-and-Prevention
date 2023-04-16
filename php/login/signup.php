<?php
include "config.php"; 


if(isset($_POST['but_signup']))
{
    echo "Welcome";
    $uname = $_POST['txt_uname'];
    $flname = $_POST['txt_flname'];
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
    echo "Welcome 2";

    if ($uname != "" && $password != "")
    {

       #queryMysql("insert into users ('username', 'name','password') values ('$uname', '$flname','$password')");
       $insert_query= "insert into `users`(`username`, `name`,`password`) values('$uname', '$flname','$password')";
       $result = mysqli_query($con,$insert_query);
        echo "sucess";

      

    }}

    ?>
    <html>
        <head>
            <title>Create simple login page with PHP and MySQL</title>
            <link href="style.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <div class="container">
                <form method="post" action="">
                    <div id="div_login">
                        <h1>Login</h1>
                        
                        <div>
                            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                        </div>
                        <div>
                            <input type="text" class="textbox" id="txt_flname" name="txt_flname" placeholder="First-lastname"/>
                        </div>
                        <div>
                            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
                        </div>
                        <div>
                            <input type="submit" value="Sign Up" name="but_signup" id="but_signup" />
                        </div>
                    </div>
                </form>
            </div>
        </body>
        </html>