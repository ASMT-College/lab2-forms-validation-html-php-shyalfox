<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

</head>
<body>
    <?php
        if(isset($_GET['submit']))
        {
            $email2=$_GET['email2'];
            $emailRegex="/[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/";
            if(preg_match($emailRegex,$email2)){
                echo "valid;signup completed;Inserted to db";
            }else{
                echo "Invalid email";
            }
        }
    ?>

    <form action="" method="get" onsubmit="return validateForm()">
        <div>Sign Up</div>
        <div>Username: <input type="text" name="un" id="" required></div>
        <div>Password: <input type="password" name="pw" id="pw" required></div>
        <div> Email1: <input type="email" id="email1" name="email1"></div>
        <div> Email2: <input type="text" id="email2" name="email2" ></div>
        <div id = "emailError"></div>
        <div><input type="submit" value="Signup" ></div>
    </form>

   
</body>
</html>