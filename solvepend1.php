<?php
$usr=$_POST['user'];
$compid=$_POST['compid'];





?>
<html>
	<head>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <title>Admin</title>
    <style>
	input{
		margin:20px;
	}
	.nav-item{
		padding:0px;
			width:100%;
	}
	.btn1{
		width:200px;
		padding:20px;
	}
	.btn1:hover{
		background:#17a2b8;
	}
	
	.navbar ul{
		padding:0px;
		border:1px solid white;
		width:100%;
	}
	.now{
		display:none;
	}
			
  </style>
  </head>
	<body>
		<nav class="navbar-nav navbar-expand-sm bg-info" style="margin:0px;padding:0px;">
		
			<div class="nav-item item1" style="margin-left:5%">
		
					<h3  style="float:left;cursor:pointer;margin:10px 2px 0px 20px;">ADMIN	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.822 18.096c-3.439-.794-6.641-1.49-5.09-4.418.4-.756.74-1.481 1.027-2.178-.866.496-1.833.88-2.359 1.011l-.224-1.066c1.148-.328 2.388-.939 3.252-1.838 1.836-6.283-1.267-9.607-5.428-9.607-5.082 0-8.465 4.949-3.732 13.678 1.598 2.945-1.725 3.641-5.09 4.418-2.979.688-3.178 2.143-3.178 4.663l.005 1.241h23.99l.005-1.241c0-2.52-.199-3.975-3.178-4.663zm-8.814-4.776c-.441.091-.873-.194-.963-.636-.092-.442.193-.874.634-.965l1.753-.389.329 1.6-1.753.39z"/></svg></h3>
						
			</div>
					<div style="width:90%" >
					<a class="btn btn-danger" style="float:right;padding-left:30px;padding-right:30px;margin:10px;" href="adminlogin1.html">Logout</a>
					<a class="btn btn-success" style="float:right;margin:10px;" href="afteradminlogin.php">Back to Dashboard</a>
			</div>
		
		</nav>
		<div class="container">
		<h2 style="padding-top:10px;">Complete the Uncheked complaint here</h2><hr />
			<form class="forum" method="POST" action="solvepend2.php">
			<h5>USER NAME
				<input type="text" name="user" value="<?php echo $usr;?>" class="now">
				<input type="text" name="complaintnum" value="<?php echo $compid;?>" class="now">
				<p class="form-control" style="width:25%;display:inline-block;background:#00ffff29;"><?php echo $usr;?></p>
				COMPLAINT NUMBER
				
				<p class="form-control" style="width:15%;display:inline-block;background:#00ffff29;"><?php echo $compid;?></p>
				
				<hr />Status
				<select name="status" class="form-control">
					<option>in-progress</option>
					<option>completed</option>
				</select>
				<br />
				Enter Remarks here<br />
				<textarea type="text" name="remark" class="form-control" style="height:200px" placeholder="Enter Remark here to complete this complaint."></textarea>
				<input type="submit" value="In-progress/Complete this Complaint" class="btn btn-success" style="padding-left:2%;padding-right:2%;margin-left:5%;">
				<a class="btn btn-light" style="padding-left:2%;padding-right:2%;margin-left:1%;" href="afteradminlogin.php">Back to Portal</a>
			</h3>
			</form>
		</div>
		
		
	</body>
	
</html>