<!doctype html>
 <html>
  <head>
      <title>Doctor</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  <script>
			
		</script>
  </head>
  <body>
	<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="index.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="doctorprofile.php">
                <i class="fas fa-home"><p> My Profile</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewappointment.php">
                <i class="fas fa-home"><p> Appointments</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="index.php">
                <i class="fas fa-home"><p> Logout</p></i>
              </a>
            </li>

          </ul>

        </nav>
	</div>
<!-------------------------------DOCTORS TO VIEW THEIR PROFILE------------------------------------------->
	<div class="container bg-light col-5">
		<div class="form-hrizontal">
			<div class="form-group">
								
				<?php
					require_once 'connection.php';
					session_start();
					$var=$_SESSION['user'];
					$sql="select * from doctor where Username='".$var."'";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
					<h1><?php echo $row['Name'];?></h1><br>
						<div class="form-group">
                        <label  class="col-sm-3 control-label">MobileNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="mobile" class="form-control" name="mobile" value="<?php echo $row['MobileNo'];?>" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Email Id</label>
                    <div class="col-sm-8">
                        <input type="email" id="password" class="form-control" name="email" value="<?php echo $row['Emailid'];?>" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" class="form-control" name="nationalid" value="<?php echo $row['Nationalid'];?>" readonly>
                       
                    </div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" class="form-control" name="qualification" value="<?php echo $row['Qualification'];?>" readonly>
                       
                    </div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Experience</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" class="form-control" name="experience" value="<?php echo $row['Experience'];?>" readonly>                    
					</div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" class="form-control" name="department" value="<?php echo $row['Department'];?>" readonly>                    
					</div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Clinic Address</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" class="form-control" name="clinicaddress" value="<?php echo $row['ClinicAddress'];?>" readonly>                    
					</div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Clinic Timing</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" class="form-control" name="clinictiming" value="<?php echo $row['ClinicTiming'];?>" readonly>                    
					</div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['Username'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control" name="password" value="<?php echo $row['Password'];?>" readonly>
                    </div>
			
				<?php
					}
				?>
			</div>
		</div>
	</div>
  </body>
</html>