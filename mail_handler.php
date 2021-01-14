<?php
	if(isset($_POST['submit'])){
		$name=$_POST['uname'];
		$cname=$_POST['cname'];
		$email=$_POST['uemail'];
		$phone=$_POST['uphone'];
		$msg=$_POST['umessage'];

		$to='webindianlion@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Company Name :".$cname."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>