<?php require "config/database.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>LoginPage</title>
</head>
<body>
    <div class="loginform">
    <?php
        if(isset ($_POST['register']))
        {
            $mat_no = trim(mysqli_real_escape_string($conn, string: $_POST['mat_no']));
            $first_name = trim(mysqli_real_escape_string($conn, string: $_POST['first_name']));
            $middle_name = trim(mysqli_real_escape_string($conn, string: $_POST['middle_name']));
            $last_name = trim(mysqli_real_escape_string($conn, string: $_POST['last_name']));
            $email = trim(mysqli_real_escape_string($conn, string: $_POST['email']));
            $phone_number = trim(mysqli_real_escape_string($conn, string: $_POST['phone_number']));
            
            date_default_timezone_set("Africa/Lagos");
            $date = date('1 M d, Y');
            $time = date('h:ia');

            //Select
            $select = mysqli_query($conn, "SELECT * FROM student where mat_no='$mat_no'");
            if(mysqli_num_rows($select)>0)
            {
                echo "<button class='message_error'>Already Registered!</button>";
            }

            else{
                $insert = mysqli_query($conn, "INSERT INTO student (mat_no,first_name,middle_name,last_name,email,phone_number) VALUES('$mat_no','$first_name','$middle_name','$last_name','$email','$phone_number')");
                if($insert)
                {
                    echo "<button class='message_success'>Successfully Registered!</button>";
                }
            }
           
        }


     ?>
        
        <form action="#" method="POST">
        <div class="welcome">
        <img src="nacos.png">
        <h4>Kindly fill in your details correctly</h4>
        </div>
       
        <div class="inputgroup">
            <input type="text" name="mat_no" required>
            <label for="txtusername" id="lblUsername">Matric No.</label>
        </div>

        <div class="inputgroup">
            <input type="text" name="first_name" required>
            <label for="txtfirst" id="lblPassword">First Name</label>
        </div>

        <div class="inputgroup">
            <input type="text" name="middle_name" required>
            <label for="txtmiddle" id="lblUsername">Middle Name</label>
        </div>

        <div class="inputgroup">
            <input type="text" name="last_name" required>
            <label for="txtmiddle" id="lbllast">Last Name</label>
        </div>

        <div class="inputgroup">
            <input type="Email" name="email" required>
            <label for="txtmiddle" id="lblemail">Email</label>
        </div>

        <div class="inputgroup">
            <input type="text" name="phone_number" required>
            <label for="txtmiddle" id="lblphone">Phone No</label>
        </div>

        

        <div class="divcallforaction topmarginlarge">
            <button class="btnlogin inactivecolor" name="register">Register</button>
        </div>

        </form>
    </div>
</body>
</html>