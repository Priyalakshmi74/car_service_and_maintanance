<?php 
  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'carservice');
  
  
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    $s = "SELECT * FROM status WHERE email='$email' && password='$password'";
    $result = mysqli_query($con, $s);
   
    $num=mysqli_num_rows($result);

    if ($num==1) {
      $_SESSION['email']=$email;
     header('location:https://test.payumoney.com/transact/build/#/view/E0226B0CB407F7C538BB8125E4217A6F/login/v2');

    }
    else{
      
           
            echo '<script type="text/javascript"> alert("Incorrect email or password")</script>';
           
         header('location:user_login.html');


    }
  
?>