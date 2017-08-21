<?php
include_once("config.php");
$email=mysql_real_escape_string($_POST['email']);
$password = mt_rand(10000000, 99999999);
$querycust  = mysql_query("SELECT * FROM passenger where email='".$email."'");
$rowscust = mysql_fetch_array($querycust);
if($querycust){
 /*Email*/

 $to = $rowscust['email'];
 $subject = "Reset Password ";

 $message = "
 <html>
 <head>
  <title>Reset Password TAS : Thumbprint System from Airlines</title>
</head>
<body>
  <h3>Forgot Password</h3>
  <p>
    <p>Dear <b>'".$rowscust['first_name']."'</b></p>
    <br/>
    
    <p>Following are the details:</p>
    <table>
      <tr>
        <th>Email</th>
        <th>Password</th>
      </tr>
      <tr>
        <td>'".$to."'</td>
        <td>'".$password."'</td>
      </tr>
    </table>
    <p>For any further technical assistance in the context, please reach us at the contact details provided at the bottom of this email. We are happy to serve you!</p>
    <br/>
    <p>Thanks,</p>
    <p>Thumbprint System from Airlines</p>
    <a href='mailto:admin@tas.com'>admin@tas.com</a>
  </body>
  </html>
  ";

// Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
  $headers .= 'From: <admin@tas.com>' . "\r\n";

  $mail=mail($to,$subject,$message,$headers);
  if($mail)
  {
    $updatedquery=mysql_query("UPDATE users SET password='".sha1($password)."' WHERE username='".$id."'");
    echo '<script>alert("Reset Password have been sent to email user")</script>';
    echo '<script>window.location="index.php"</script>';
  }
  else {
    echo '<script>alert("There is some system problem in sending via email.")</script>';
    echo '<script>window.location="index.php"</script>';
  }
}
else {
     echo '<script>alert("Email Address not exist in database")</script>';
  echo '<script>window.location="index.php"</script>';
}

?>