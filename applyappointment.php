<!doctype html>
 <html>
  <head>
      <title> Appointment</title>
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
		<a href="appliedappointment.php"> View Applied Appointments</a>
	<div>
	<!------------------------------users to see available doctors------------------------------------->
	</div>
		<h1>Available Doctors</h1>
	<div>
		<div class="card" style="">
			<div class="card-body">
				<h1>ENT</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							
							<th scope="col">DoctorID</th>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Date</th>
							<th scope="col">Slot</th>
							<th scope="col"></th>
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
							<td scope="row"><input type="text" value="<?php echo $row['Did'];?>" name="did" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['Name'];?>" name="dname" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicAddress'];?>" name="clinicaddress" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicTiming'];?>" name="clinictime"readonly></td>
							<td scope="row"><input type="date" name="date"></td>
							<td scope="row">
							<select name="slot">
								<option value="10 AM">10 AM</option>
								<option value="11 AM">11 AM</option>
								<option value="12 PM">12 PM</option>
								<option value="2 PM">2 PM</option>
								<option value="3 PM">3 PM</option>
								<option value="4 PM">4 PM</option>
							</select>
							 </td>
							 <td scope="row"><input type="submit" value="Apply" class="btn-primary" name="appointment"></td>
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
	
	
	<div>
		<div class="card" style="">
			<div class="card-body">
				<h1>Neurology</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							
							<th scope="col">DoctorID</th>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Date</th>
							<th scope="col">Slot</th>
							<th scope="col"></th>
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
							<td scope="row"><input type="text" value="<?php echo $row['Did'];?>" name="did" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['Name'];?>" name="dname" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicAddress'];?>" name="clinicaddress" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicTiming'];?>" name="clinictime"readonly></td>
							<td scope="row"><input type="date" name="date"></td>
							<td scope="row">
							<select name="slot">
								<option value="10 AM">10 AM</option>
								<option value="11 AM">11 AM</option>
								<option value="12 PM">12 PM</option>
								<option value="2 PM">2 PM</option>
								<option value="3 PM">3 PM</option>
								<option value="4 PM">4 PM</option>
							</select>
							 </td>
							 <td scope="row"><input type="submit" value="Apply" class="btn-primary" name="appointment"></td>
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
	
	<div>
		<div class="card" style="">
			<div class="card-body">
				<h1>Paediatry</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							
							<th scope="col">DoctorID</th>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Date</th>
							<th scope="col">Slot</th>
							<th scope="col"></th>
						
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
							<td scope="row"><input type="text" value="<?php echo $row['Did'];?>" name="did" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['Name'];?>" name="dname" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicAddress'];?>" name="clinicaddress" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicTiming'];?>" name="clinictime"readonly></td>
							<td scope="row"><input type="date" name="date"></td>
							<td scope="row">
							<select name="slot">
								<option value="10 AM">10 AM</option>
								<option value="11 AM">11 AM</option>
								<option value="12 PM">12 PM</option>
								<option value="2 PM">2 PM</option>
								<option value="3 PM">3 PM</option>
								<option value="4 PM">4 PM</option>
							</select>
							 </td>
							 <td scope="row"><input type="submit" value="Apply" class="btn-primary" name="appointment"></td>
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
	
	<div>
		<div class="card" style="">
			<div class="card-body">
				<h1>Gynaecology</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							
							<th scope="col">DoctorID</th>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Date</th>
							<th scope="col">Slot</th>
							<th scope="col"></th>
						
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
							<td scope="row"><input type="text" value="<?php echo $row['Did'];?>" name="did" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['Name'];?>" name="dname" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicAddress'];?>" name="clinicaddress" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicTiming'];?>" name="clinictime"readonly></td>
							<td scope="row"><input type="date" name="date"></td>
							<td scope="row">
							<select name="slot">
								<option value="10 AM">10 AM</option>
								<option value="11 AM">11 AM</option>
								<option value="12 PM">12 PM</option>
								<option value="2 PM">2 PM</option>
								<option value="3 PM">3 PM</option>
								<option value="4 PM">4 PM</option>
							</select>
							 </td>
							 <td scope="row"><input type="submit" value="Apply" class="btn-primary" name="appointment"></td>
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
	
	<div>
		<div class="card" style="">
			<div class="card-body">
				<h1>Cardiology</h1>
				<table class="table table-striped card-text bg-light">
					<thead>
						<tr>
							
							<th scope="col">DoctorID</th>
							<th scope="col">Doctor Name</th>
							<th scope="col">Clinic Name</th>
							<th scope="col">Clinic Timimg</th>
							<th scope="col">Date</th>
							<th scope="col">Slot</th>
							<th scope="col"></th>
						
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
							<td scope="row"><input type="text" value="<?php echo $row['Did'];?>" name="did" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['Name'];?>" name="dname" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicAddress'];?>" name="clinicaddress" readonly></td>
							<td scope="row"><input type="text" value="<?php echo $row['ClinicTiming'];?>" name="clinictime"readonly></td>
							<td scope="row"><input type="date" name="date"></td>
							<td scope="row">
							<select name="slot">
								<option value="10 AM">10 AM</option>
								<option value="11 AM">11 AM</option>
								<option value="12 PM">12 PM</option>
								<option value="2 PM">2 PM</option>
								<option value="3 PM">3 PM</option>
								<option value="4 PM">4 PM</option>
							</select>
							 </td>
							 <td scope="row"><input type="submit"  value="Apply" class="btn-primary" name="appointment"></td>
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