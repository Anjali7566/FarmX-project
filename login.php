<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="prj2.css">
</head>
<body>
    
    <div class="hero">
        <div class="form-box">
         <form method="post" id="register" class="input-group">
               <input type="text" name="email" class="input-field" placeholder="Email Id" required>
                <input type="password" name="pass" class="input-field" placeholder="Enter Password" required>
                <button type="submit" name="login" class="submit-btn"><a  href="prj1.html">Log in</a></button>
          </form>
          
        </div>
      </div>


    <?php
      $con = mysqli_connect("localhost","root","","loginteachus");

      if(isset($_POST['login']))
        $e = $_POST['email'];
        $p = $POST['pass'];
         
        $query = "SELECT * FROM `registration` WHERE email = '$email' && password = '$p';
        $finddata =  mysqli_query($con,$query); 
     if(mysqli_num_rows($finddata) > 0)
         header('location:myworld.php');
    else
             echo 'Invalid username';
       ?>
</body>
</html>
