<?php
session_start();
error_reporting(0);
include('connect.php');
if(strlen($_SESSION['user'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
  {	
	$file = $_FILES['image']['name'];
	$file_loc = $_FILES['image']['tmp_name'];
	$folder="images/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobile'];
	$package=$_POST['package'];
	$idedit=$_POST['editid'];
	$image=$_POST['image'];

	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$image=$final_file;
		}

	$sql="UPDATE users SET name=(:name), email=(:email), mobile=(:mobileno), package=(:package), Image=(:image) WHERE id=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
	$query-> bindParam(':package', $package, PDO::PARAM_STR);
	$query-> bindParam(':image', $image, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully";
}    
?>

<?php
		$email = $_SESSION['user'];
		$sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Edit Profile</title>
	<link rel="stylesheet" href="dataTables.bootstrap.min.css">

	<!-- Font awesome -->
	<style>
	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>
<body class="bg-theme bg-theme2">
	<div class="wrapper">
	<?php include('side.php');
	    include('header.php');
?>

	<div class="ts-main-content">

		<div class="content-wrapper">
			<div class="container-fluid">
               
               <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">PROFILE</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
													
		
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<form method="post" class="row g-3 needs-validation" enctype="multipart/form-data">

	<div class="col-md-4">
	</div>
	<div class="col-sm-4 text-center">
		<img src="images/<?php echo htmlentities($result->image);?>" style="width:200px; border-radius:50%; margin:10px;">
		<input type="file" name="image" class="form-control">
		<input type="hidden" name="image" class="form-control" value="<?php echo htmlentities($result->image);?>">
	</div>
	<div class="col-md-4">
	</div>

<div class="col-md-6	">
	<label for="validationCustom01" class="form-label">Name</label>
	<input type="text" class="form-control" id="validationCustom01" name="name" required value="<?php echo htmlentities($result->name);?>" readonly>
</div>

<div class="col-md-6">
		<label for="validationCustom02" class="form-label">Email</label>
     	<input type="email" name="email" class="form-control" id="validationCustom02" required value="<?php echo htmlentities($result->email);?>" readonly>
</div>

<div class="col-md-6">
	<label for="validationCustom01" class="form-label">Mobile</label>
	<input type="text" name="mobile" class="form-control" required value="<?php echo htmlentities($result->mobile);?>" readonly>
</div>

<div class="col-md-6">
	<label for="validationCustom01" class="form-label">package</label>
	<input type="text" name="package" class="form-control" required value="<?php echo htmlentities($result->package);?>" readonly>
	</div>

<input type="hidden" name="editid" class="form-control" required value="<?php echo htmlentities($result->id);?>">

<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-light btn-center" name="submit" type="submit">Save Changes</button>
	</div>
</div>

</form></div></div></div></div></div></div></div></div></div></div></div>
<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>
</body>
									

	<!-- Loading Scripts -->


</html>
<?php } ?>
<?php include("footer.php"); ?>
