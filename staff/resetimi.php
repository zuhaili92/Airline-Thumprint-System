<?php
include_once("../config.php");
$id=$_GET['id'];
$password = mt_rand(10000000, 99999999);
$queryimi  = mysql_query("SELECT * FROM imigration where user_id='".$id."'");
$rowsimi = mysql_fetch_array($queryimi);
if($queryimi){
 /*Email*/

 $to = $rowsimi['email'];
 $subject = "Reset Password ";

 $message = "
 <html>
 <head>
  <title>Reset Password TAS : THUMBPRINT SYSTEM FROM AIRLINES (TAS)</title>
</head>
<body>
  <h3>Forgot Password</h3>
  <p>
    <p>Dear <b>'".$rowsimi['first_name']."'</b></p>
    <br/>
    
    <p>Following are the details:</p>
    <table>
      <tr>
        <th>Email</th>
        <th>Password</th>
      </tr>
      <tr>
        <td>".$to."</td>
        <td>".$password."</td>
      </tr>
    </table>
    <p>For any further technical assistance in the context, please reach us at the contact details provided at the bottom of this email. We are happy to serve you!</p>
    <br/>
    <p>Thanks,</p>
    <p>Thumbprint System From Airlines</p>
    <a href='mailto:admin@tas.com'>admin@tas.com</a>
  </body>
  </html>
  ";

// Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
  $headers .= 'From: Administrator <admin@tas.com>' . "\r\n";

  $mail=mail($to,$subject,$message,$headers);
  if($mail)
  {
    $updatedquery=mysql_query("UPDATE users SET password='".sha1($password)."' WHERE username='".$to."'");
    echo '<script>alert("Reset Password have been sent to email user")</script>';
    echo '<script>window.location="index.php?site=manageuser"</script>';
  }
  else {
    echo '<script>alert("There is some system problem in sending via email.")</script>';
    echo '<script>window.location="index.php?site=manageuser"</script>';
  }
}
else {
     echo '<script>alert("Email Address not exist in database")</script>';
  echo '<script>window.location="index.php?site=manageuser"</script>';
}

?>