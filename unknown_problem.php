<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'carservice');
$name =$_POST['name'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$password =$_POST['password'];
$address =$_POST['address'];
$car_model =$_POST['car_model'];
$car_type =$_POST['car_type'];
$veh_no =$_POST['veh_no'];
$message =$_POST['message'];
$pickup =$_POST['pickup'];
$delivery =$_POST['delivery'];

$status=null;


$reg = "INSERT INTO unknown_problem(name,mobile,email,password,address,car_model,car_type,veh_no,message,pickup,delivery)
values ('$name','$mobile','$email','$password','$address','$car_model','$car_type','$veh_no','$message','$pickup','$delivery')";

$query_run=mysqli_query($con, $reg);
  $st = "INSERT INTO status(name,mobile,email,password,delivery,veh_no,completion_status)
values ('$name','$mobile','$email','$password','$delivery','$veh_no','$status')";    
mysqli_query($con, $st);


        
           if($query_run)
           {
            echo '<script type="text/javascript"> alert("Data saved")</script>';
           }
           else
           {
            echo '<script type="text/javascript"> alert("Data unsaved")</script>';
           }
         
     
          
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="">
    body{
      background-image: url("https://easyauto123.com.au/img/service/check-list.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      
    }
button[type=submit]
    {
      width: 100%;
      box-sizing: border-box;
      padding: 10px 0;
      margin-top: 30px;
      outline: none;
      border: none;
      background: grey;
      opacity: 0.7;
      border-radius: 20px;
      font-size: 20px;
      color: black;

    }
    button[type=submit]:hover{
      background: green;
      opacity: 0.7;
    }
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
  </style>
</head>
<body>
  <h1 align="center" style="color: green">REGISTRATION SUCCESS!!</h1>
<a href="user_login.html"> <button type="submit"style="color: blue">CHECK OUT</button>

<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
   <a href=""> <button type="button" class="cancelbtn">Cancel</button></a>
</body>
</html>