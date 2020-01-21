<?php
	require_once("connection.php");
	session_start();
	#--------------------DOCTOR REGISTRATION------------------
	if(isset($_POST['docregister']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$nationalid=$_POST['nationalid'];
		$qualification=$_POST['qualification'];
		$experience=$_POST['experience'];
		$department=$_POST['department'];
		$clinicaddress=$_POST['clinicaddress'];
		$clinictiming=$_POST['clinictiming'];
		$username=$_POST['username'];
		$password=$_POST['confpassword'];
		$status='Pending';
		
#--------------------------------VALIDATION-----------------------
		
		$sql1="SELECT * from doctor";
		$result1=mysqli_query($conn,$sql1);
		$flag=0;
		while($row1=mysqli_fetch_assoc($result1))
		{
			if ($row1['Username']==$username)
			{
				$flag=1;
			}
		}
		if($flag==1)
		{
			echo "Already existing user";
			mysqli_close($conn);
		}
		else
		{
		$sql="INSERT INTO doctor(Name,MobileNo,Emailid,Nationalid,Qualification,Experience,Department,ClinicAddress,ClinicTiming,Username,Password,Status) VALUES ('".$name."','".$mobile."','".$email."','".$nationalid."','".$qualification."','".$experience."','".$department."','".$clinicaddress."','".$clinictiming."','".$username."','".$password."','".$status."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:doctor-reg.php');
		}
		mysqli_close($conn);
		}
	}
	#---------------------USER REGISTRATION----------------------------
	else if(isset($_POST['userregister']))
	{
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$nationalid=$_POST['nationalid'];
		$username=$_POST['username'];
		$password=$_POST['confpassword'];
		
		#--------------------------validation----------------
		$sql1="SELECT * from user";
		$result1=mysqli_query($conn,$sql1);
		$flag=0;
		while($row1=mysqli_fetch_assoc($result1))
		{
			if ($row1['Username']==$username)
			{
				$flag=1;
			}
		}
		if($flag==1)
		{
			echo "Already existing user";
			mysqli_close($conn);
		}
		else
		{
		$sql="INSERT INTO user(Name,Gender,Age,Emailid,MobileNo,Nationalid,Username,Password) VALUES ('".$name."','".$gender."','".$age."','".$email."','".$mobile."','".$nationalid."','".$username."','".$password."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:user-reg.php');
		}
		mysqli_close($conn);
		}
	}
	
	#-------------------LOGIN---------------------------------
	else if(isset($_POST['login']))
	{
		require_once("login.php");
	}
	else if(isset($_POST['logcheck']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from doctor where Username='".$username."' and Password='".$password."'";
		$result= mysqli_query ($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				#session_start();
				$_SESSION['user']=$row['Username'];
				if($row['Status']!='Approved')
				{
					echo 'You are still not approved by the admin';
				}
				else{
					header('location:doctorhome.php');
				}
				
			}
		}
		else
		{
			$sql="select * from user where Username='".$username."' and Password='".$password."'";
			$result= mysqli_query ($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$_SESSION['user']=$row['Username'];
					header('location:userhome.php');
				}
			}
			else
			{
				$sql="select * from admin where Username='".$username."' and Password='".$password."'";
				$result= mysqli_query ($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						header('location:adminhome.php');
					}
				}
				else
				{
					echo 'Invalid Username or Password';
				}
			}
			
		}
		
	}
	#--------------------APPOINTMENT--------------------------------
	else if(isset($_POST['appointment']))
	{
		
		$did=$_POST['did'];
		$dname=$_POST['dname'];
		$uname=$_SESSION['user'];
		$clinicaddress=$_POST['clinicaddress'];
		$clinictime=$_POST['clinictime'];
		$date=$_POST['date'];
		$slot=$_POST['slot'];
		$status="Pending";
		$sql="INSERT INTO appointment(Did,Dname,Uname,Date,Slot,Status) VALUES ('".$did."','".$dname."','".$uname."','".$date."','".$slot."','".$status."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:applyappointment.php');
		}
		mysqli_close($conn);
		
	}
	
	#-------------------CANCEL APPOINTMENT--------------------------------
	else if(isset($_POST['cancel']))
	{
		$id=$_POST['id'];
		$sql="DELETE FROM appointment where id=$id";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:appliedappointment.php');
		}
	}
	
	#--------------------APPROVE APPOINTMENT---------------------------------
	else if(isset($_POST['approve']))
	{
		$id=$_POST['id'];
		$sql="UPDATE appointment set Status='Approved' where id=$id";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:viewappointment.php');
		}
	}
	#----------------------------REJECT APPOINTMENT--------------------------------
	else if(isset($_POST['reject']))
	{
		$id=$_POST['id'];
		$sql="UPDATE appointment set Status='Rejected' where id=$id";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:viewappointment.php');
		}
	}
	#-----------------------APPROVE DOCTOR-----------------------------------------
	else if(isset($_POST['approvedoc']))
	{
		$id=$_POST['id'];
		$sql="UPDATE doctor set Status='Approved' where Did=$id";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:doctorlist.php');
		}
	}
	
	#---------------------------REJECT DOCTOR--------------------------------------------
	else if(isset($_POST['rejectdoc']))
	{
		$id=$_POST['id'];
		$sql="UPDATE doctor set Status='Rejected' where Did=$id";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:doctorlist.php');
		}
	}
	
	#---------------------------CHANGE PASSWORD------------------------------------------------
	else if(isset($_POST['Change']))
	{
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sq="select * from doctor where Username='".$username."' and Emailid='".$email."'";
		$r=mysqli_query($conn,$sq);
		if(mysqli_num_rows($r)>0)
		{
			while($row1=mysqli_fetch_assoc($r))
			{
				
					$sql="UPDATE doctor SET Password='".$password."' where Username='".$username."'";
					if(mysqli_query($conn,$sql))
					{
						require_once "login.php";
					}
				
			}
		}
		else{
			$sq="select * from user where Username='".$username."' and Emailid='".$email."'";
			$r=mysqli_query($conn,$sq);
			if(mysqli_num_rows($r)>0)
			{
				while($row1=mysqli_fetch_assoc($r))
				{
					
						$sql="UPDATE user SET Password='".$password."' where Username='".$username."'";
						if(mysqli_query($conn,$sql))
						{
							require_once "login.php";
						}
						
					
				}
			}
			else
			{
				echo "username and email don't match";
			}
			mysqli_close($conn);
		}
	}
		
?>
