<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'carservice');



	$status1=$_POST["sclt"];
	$vn=$_POST["vn"];
	
	$st = "UPDATE status set completion_status='$status1' where veh_no='$vn' ";
  $id="SELECT email,delivery from status where veh_no='{$vn}'";

$query_run=mysqli_query($con, $st);
$ans=mysqli_query($con, $id);
if(mysqli_num_rows($ans)>0)
{
  while($rows=mysqli_fetch_assoc($ans))
  {
   
    $em=$rows["email"];
    $del=$rows["delivery"];
  }
 }
if($status1=='Completed')
  {
    require 'PHPMailerAutoload.php';

$mail=new PHPMailer;
$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';


$mail->Username='prilaks2107@gmail.com';
$mail->Password='lakspri2107';

$mail->setFrom('prilaks2107@gmail.com','prilaks');
$mail->addAddress($em);
$mail->addReplyTo('prilaks2107@gmail.com');
$mail->isHTML(true);
$mail->Subject='MECHSPARE';
$mail->Body='<h1 align=center>MECHSPARE</h1><br><h4 align=center>Your car gets ready..We will return it within due date</h4>'.$del;
if(!$mail->send())
{
  echo '<script type="text/javascript"> alert("Table updated...Mail not sent")</script>';

}
else
{
   echo '<script type="text/javascript"> alert("Table updated...Mail sent")</script>';
   echo $em;
}


 }
           else
           {
            require 'PHPMailerAutoload.php';
$mail=new PHPMailer;
$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';


$mail->Username='prilaks2107@gmail.com';
$mail->Password='lakspri2107';

$mail->setFrom('prilaks2107@gmail.com','prilaks');
$mail->addAddress($em);
$mail->addReplyTo('prilaks2107@gmail.com');
$mail->isHTML(true);
$mail->Subject='MECHSPARE';
$mail->Body='<h1 align=center>MECHSPARE</h1><br><h4 align=center>Sorry.. Your car service yet not completed within due date.
Will return it within 24HRS</h4>';
if(!$mail->send())
{
  echo '<script type="text/javascript"> alert("Table updated...Mail not sent")</script>';

}
else
{
   echo '<script type="text/javascript"> alert("Table updated...Mail sent")</script>';
   echo $em;
}
           }

			?>