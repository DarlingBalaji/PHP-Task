<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<meta charset="utf-8">	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
	<!-- BOOTSTARP CSS LINK -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- BOOTSTRAP JS LINKS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>


<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 m-auto">
					<div class="Form_Details">
						<h2 class="Form_Heading"> Daily Entry </h2>

						<?php
						include 'dbconfig.php';
						echo "To Display all data from DB";
						$Viewurl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
						parse_str($Viewurl, $params);
						$test = $params['name'];
						echo "<br>";
						$sql = "SELECT * FROM user WHERE `Cname` = '$test'";

						$result = $conn->query($sql);
						// echo($result);
						if ($result->num_rows > 0) {

						while ($rows = $result->fetch_assoc() ) {
						    $fieldname = $rows['Cdate'];
						    $field1name = $rows['Cname'];
						    $field2name = $rows['Cpackage'];
						    $field3name = $rows['Cclasstype'];
						    $field4name = $rows['Ctopics'];
						    $field5name = $rows['Cexercise'];
						    $field6name = $rows['Cattandance'];

						    echo '<b>'.$field1name.'</b><br />';
						    echo $field2name. '<br />';
						    echo $field3name.'<br />';
						    echo $field4name.'<br />';
						    echo $field5name.'<br />';
						    echo $field6name.'<br/>';
						    echo date('d-m-y', strtotime($fieldname));
						    echo "<br/><br/>";
						}
						} else {
						echo '
						<script>
							alert("Invaild data");
							window.location.href="index.php";
						</script>';
						}

						$conn-> close();
						?>

						<form action="updateval.php?name='$field1name'" method="POST">
							<!-- Date -->
							<div class="Form_Fields">
								<label>Date</label>
								<input type="Date" name="Cdate" id="Cdate" value="<?php echo $fieldname?>">
							</div>
							<!-- Date -->

							<!-- Name -->
							<div class="Form_Fields">
								<label>Name</label>
								<input type="text" name="Cname" id="Cname" value="<?php echo $field1name?>">
							</div>
							<!-- Name -->

							<!-- Package -->
							<div class="Form_Fields">
								<label>Package</label>
								<input type="text" name="Cpackage" id="Cpackage" value="<?php echo $field2name?>">
							</div>
							<!-- Package -->

							<!-- Class Type -->
							<div class="Form_Fields">
								<label>Class Type</label>
								<input type="text" name="Cclasstype" id="Cclasstype" value="<?php echo $field3name?>">
							</div>
							<!-- Class Type -->

							<!-- Topics -->
							<div class="Form_Fields">
								<label>Topics</label>
								<input type="text" name="Ctopics" id="Ctopics" value="<?php echo $field4name?>">
							</div>
							<!-- Topics -->

							<!-- Exercise -->
							<div class="Form_Fields">
								<label>Exercise</label>
								<input type="text" name="Cexercise" id="Cexercise" value="<?php echo $field5name?>">
							</div>
							<!-- Exercise -->

							<!-- Attandance -->
							<div class="Form_Fields">
								<label>Attandance</label>
								<input type="text" name="Cattandance" id="Cattandance" value="<?php echo $field6name?>">
							</div>
							<!-- Attandance -->

							<!-- Button -->
							<div class="text-center">
								<button class="Home_Btn btn" type="submit">Submit</button>
							</div>
							<!-- Button -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>


