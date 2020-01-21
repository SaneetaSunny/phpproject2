
<!doctype html>
 <html>
  <head>
      <title>Applied Appointments</title>
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
              <a class="nav-link " href="userprofile.php">
                <i class="fas fa-home"><p> My Profile</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="applyappointment.php">
                <i class="fas fa-home"><p> Appointment</p></i>
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
	<div>
	<!-------------------------User to see their applied appointments--------------------------------------->
		<div class="card" style="">
			<div class="card-body">
				<h1>Applied Appointments</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							
							<th scope="col">ID</th>
							<th scope="col">Doctor Name</th>
							<th scope="col">Date</th>
							<th scope="col">Slot</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'connection.php';
							session_start();
							$var=$_SESSION['user'];
							$sql="select * from appointment where Uname='".$var."'";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
						<form action="action.php" method="post">
							<td scope="row"><input type="text" value="<?php echo $row['id'];?>" name="id" readonly></td>
							<td scope="row"><?php echo $row['Dname'];?></td>
							<td scope="row"><?php echo $row['Date'];?></td>
							<td scope="row"><?php echo $row['Slot'];?></td>
							<td scope="row"><?php echo $row['Status'];?></td>
							<td><input type="submit" value="Cancel" class="btn-danger" name="cancel"></td>
						</form>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
  </body>
</html>