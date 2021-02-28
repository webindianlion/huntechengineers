<?php
	if(isset($_POST['submit'])){
		$name=$_POST['uname'];
		$cname=$_POST['cname'];
		$email=$_POST['uemail'];
		$phone=$_POST['uphone'];
		$msg=$_POST['umessage'];

		$to='huntechengineers@gmail.com , webindianlion@gmail.com'; // Receiver Email ID, Replace with your email ID
		// $to='webindianlion@gmail.com';
		$subject='Form Submission';
		$message="Name :".$name."\n"."Company Name :".$cname."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		mail($to, $subject, $message, $headers);
		echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		// header('Location: http://huntechengineers.com/');
		header('Refresh: 5; URL=http://huntechengineers.com/');
		
	}
?>
