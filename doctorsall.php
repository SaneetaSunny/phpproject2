<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> hospital</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="fontawesome/css/all.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
    <body>
	<div>
	
	
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
              <a class="nav-link " href="login.php">
                <i class="fas fa-home"><p> Login</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
	

     <!--section 1-->
    
   
     <!--section 2-->
     <section class="bg_img1">
      <div class=" bg_lblack">

        <div class="container vh-100">
            <div class="card" style="">
			<div class="card-body">
				<h1>ENT</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Qualification</th>
							<th scope="col">MobileNo</th>
							<th scope="col">Emailid</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'connection.php';
							$sql="select * from doctor where Department='ENT' and Status='Approved'";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
							<form action="action.php" method="post">
							<td scope="row"><?php echo $row['Name'];?></td>
							<td scope="row"><?php echo $row['ClinicAddress'];?></td>
							<td scope="row"><?php echo $row['ClinicTiming'];?></td>
							<td scope="row"><?php echo $row['Qualification'];?></td>
							<td scope="row"><?php echo $row['MobileNo'];?></td>
							<td scope="row"><?php echo $row['Emailid'];?></td>
							 </form>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				
				
				<h1>Neurology</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Qualification</th>
							<th scope="col">MobileNo</th>
							<th scope="col">Emailid</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'connection.php';
							$sql="select * from doctor where Department='Neurology' and Status='Approved'";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
							<form action="action.php" method="post">
							<td scope="row"><?php echo $row['Name'];?></td>
							<td scope="row"><?php echo $row['ClinicAddress'];?></td>
							<td scope="row"><?php echo $row['ClinicTiming'];?></td>
							<td scope="row"><?php echo $row['Qualification'];?></td>
							<td scope="row"><?php echo $row['MobileNo'];?></td>
							<td scope="row"><?php echo $row['Emailid'];?></td>
							
							 </form>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				
				
				
				
				<h1>Paediatry</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Qualification</th>
							<th scope="col">MobileNo</th>
							<th scope="col">Emailid</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'connection.php';
							$sql="select * from doctor where Department='Paediatry' and Status='Approved'";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
							<form action="action.php" method="post">
							<td scope="row"><?php echo $row['Name'];?></td>
							<td scope="row"><?php echo $row['ClinicAddress'];?></td>
							<td scope="row"><?php echo $row['ClinicTiming'];?></td>
							<td scope="row"><?php echo $row['Qualification'];?></td>
							<td scope="row"><?php echo $row['MobileNo'];?></td>
							<td scope="row"><?php echo $row['Emailid'];?></td>
							
							 </form>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				
				<h1>Gynaecology</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Qualification</th>
							<th scope="col">MobileNo</th>
							<th scope="col">Emailid</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'connection.php';
							$sql="select * from doctor where Department='Gynaecology' and Status='Approved'";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
							<form action="action.php" method="post">
							<td scope="row"><?php echo $row['Name'];?></td>
							<td scope="row"><?php echo $row['ClinicAddress'];?></td>
							<td scope="row"><?php echo $row['ClinicTiming'];?></td>
							<td scope="row"><?php echo $row['Qualification'];?></td>
							<td scope="row"><?php echo $row['MobileNo'];?></td>
							<td scope="row"><?php echo $row['Emailid'];?></td>
							
							 </form>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				
				<h1>Cardiology</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Qualification</th>
							<th scope="col">MobileNo</th>
							<th scope="col">Emailid</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'connection.php';
							$sql="select * from doctor where Department='Cardiology' and Status='Approved'";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
							<form action="action.php" method="post">
							<td scope="row"><?php echo $row['Name'];?></td>
							<td scope="row"><?php echo $row['ClinicAddress'];?></td>
							<td scope="row"><?php echo $row['ClinicTiming'];?></td>
							<td scope="row"><?php echo $row['Qualification'];?></td>
							<td scope="row"><?php echo $row['MobileNo'];?></td>
							<td scope="row"><?php echo $row['Emailid'];?></td>
							
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
		
		
		
     </section>
    </div>    
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>           
        

    </body>
</html>