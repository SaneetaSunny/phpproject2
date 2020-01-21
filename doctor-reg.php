<!doctype html>
 <html>
  <head>
      <title>Doctor Registration</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css"> 
  <style>
  
  </style>
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




<!-----------------form for register--------------------------------------->

	<div class="container bg-light col-5">
          <form class="form-horizontal" name="myform" role="form" onsubmit=" return validate_form()" action="action.php" method="post">
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="Name" class="form-control" name="name" required autofocus>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="nationalid" class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text" id="nationalid" class="form-control" name="nationalid" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-8">
                        <input type="text" id="birthDate" class="form-control" name="qualification" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Experience</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" class="form-control" name="experience" required>
                       
                    </div>
                </div>
                
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Department </label>
                    <div class="col-sm-8">
						<select name="department" id="department" class="form-control">
							<option value="ENT">ENT</option>
							<option value="Neurology">Neurology</option>
							<option value="Paediatry">Paediatry</option>
							<option value="Gynaecology">Gynaecology</option>
							<option value="Cardiology">Cardiology</option>
						</select>
                    </div>
                </div>
				<div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">ClinicAddress </label>
                    <div class="col-sm-8">
                        <input type="text" id="clinicaddress" class="form-control" name="clinicaddress">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Clinic Timing</label>
                    <div class="col-sm-8">
                        <input type="text" id="clinictiming" class="form-control" name="clinictiming">
                    </div>
                </div>
				
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="confpassword" class="form-control" name="confpassword" required><br>
						
                    </div>
					<button type="submit" class="btn btn-primary ml-5" name="docregister">Register</button>
				
                </div>
            </form>
    </div> 
				 <!-- /.form-group -->
               
            </div>
               
			
            <!-- /form -->
 <!-- ./container -->

   
  
       
 </body>
 <script>
			function validate_form()
			{
				var mb=document.forms["myform"]["mobile"].value;
				var str=document.forms["myform"]["password"].value;
				var str1=document.forms["myform"]["confpassword"].value;
				
				if(mb.length!=10){
					alert("Invalid mobileno");
					return false;
					
				}
				else if(str.length<6){
					alert("Password too short.");
					return false;
				}
				else if(str != str1){
					alert ("password doesn't match");
					return false;
				}
				/*else{
					return true;
				}*/
				
			}
		</script>
</html>