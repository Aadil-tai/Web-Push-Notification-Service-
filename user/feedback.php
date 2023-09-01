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
	$file = $_FILES['attachment']['name'];
	$file_loc = $_FILES['attachment']['tmp_name'];
	$folder="attachment/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	
	$title=$_POST['title'];
    $description=$_POST['description'];
	$user=$_SESSION['user'];
	$reciver= 'Admin';
    $notitype='Send Feedback';
    $attachment=' ';

	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$attachment=$final_file;
		}
	$notireciver = 'Admin';
    $sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    $querynoti = $dbh->prepare($sqlnoti);
	$querynoti-> bindParam(':notiuser', $user, PDO::PARAM_STR);
	$querynoti-> bindParam(':notireciver', $notireciver, PDO::PARAM_STR);
    $querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
    $querynoti->execute();

	$sql="insert into feedback (sender, reciver, title,feedbackdata,attachment) values (:user,:reciver,:title,:description,:attachment)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':user', $user, PDO::PARAM_STR);
	$query-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
	$query-> bindParam(':title', $title, PDO::PARAM_STR);
	$query-> bindParam(':description', $description, PDO::PARAM_STR);
	$query-> bindParam(':attachment', $attachment, PDO::PARAM_STR);
    $query->execute(); 
	$msg="Feedback Send";
}    
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
	
	<title>Feedback</title>
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
<?php
        include('connect.php');

		$sql = "SELECT * from users;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
	<?php ?>
	<div class="wrapper">
	<?php include('side.php');
	    include('header.php');
?>
	<div class="ts-main-content">

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
						<div class="col-xl-9 mx-auto">
								<div class="p-4 border rounded">
						                            <h2>Send Messages</h2>
		<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
				<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<form method="post" class="row g-3 needs-validation" enctype="multipart/form-data">
<div class="col-md-4">
	</div>
	
<div class="col-sm-4">
    <input type="hidden" name="user" value="<?php echo htmlentities($_SESSION['user']); ?>">
</div>

	<label for="validationCustom02" class="form-label">Title<span style="color:red">*</span></label>

	<div class="col-md-6 ">
	<input type="text" id="validationCustom02" name="title" class="form-control" required>
	</div>

	<label for="validationCustom01" class="form-label">Attachment<span style="color:red"></span></label>
	<div class="col-md-6">
	<input type="file" name="attachment" id="validationCustom01" class="form-control">
	</div>

<div class="container-fluid page__heading-container">
	<label class="form-label">Description<span style="color:red">*</span></label>
	<div class="col-md-6">
	<input type="text" class="form-control"   name="description" aria-label="default input example">
	</div>
</div>

<div class="container-fluid page__heading-container">
	<div class="col-sm-8 col-sm-offset-2">
		<button btn btn-light name="submit" type="submit" class="btn btn-light">Send</button>
	</div>
</div>

</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Loading Scripts -->
</body>
</html>
<?php include("footer.php"); ?>
<?php } ?>