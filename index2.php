<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Mart</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="index2.css">
    
</head>
<body>
<script src="index2.js"></script>
   
        <ul>
            <li class="active"><a href="Index.php"> login </a></li>
        </ul>

    <form class="container3"><h1>Feel the Fashion</h1></form>
 <form action="" class="container" method="POST" 
onsubmit="return validateUsername(this.username.value)&&validatePassword(this.password.value, this.password2.value) && email( this.email.value) "  >
            <h1>Register</h1>
            <label for="username">Username</label>
            <input type="text" name="username" id="un" placeholder= "Enter Username" >


            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter email address" name="email" >
            
            
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password"  id="password">
            
            
            <input type="checkbox" name="checkbox" value="Show/Hide Password"  onclick="showPassword()  ">
            <label for="checkbox">Show Password</label><br><br>
            
            
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Re-enter Password" name="password2"  id="password2">
            
            
            <input type="checkbox" name="checkbox" value="Show/Hide Password2" onclick="showPasswordn()  ">
            <label for="checkbox">Show Password</label>
            
            
            <button  type="submit" class="btn1" value="submit"  >Register</button>
            </form >

    <?php
    error_reporting(0);
     $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    @$db = new mysqli('localhost', 'root', '', 'login1');
    if(mysqli_connect_errno()){
        echo 'Error:Data not saved.';
    }
    if ($email){
        $query = "SELECT * FROM data WHERE email='".$email."'";
        $result = $db->query($query);
    }
    if(mysqli_num_rows($result)>0){
        echo "  <script>alert('User Already Exist....Login');</script>";
     
    } 
    else {
        $sql = "INSERT INTO data (username, email,password)
        VALUES ('$username', '$email','$password')";
        
        if ($db->query($sql) === TRUE) {
            echo "  <script>alert('New record created successfully');</script>";
        }
     
    exit();
    }
    $db -> close();

    ?>       
</body>
</html>