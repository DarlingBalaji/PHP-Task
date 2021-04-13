<!DOCTYPE html>
<html>
<head>
	<title>Task-Curd</title>
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
						<form action="create.php" method="POST">
							<!-- Date -->
							<div class="Form_Fields">
								<label>Date</label>
								<input type="Date" name="Cdate" id="Cdate">
							</div>
							<!-- Date -->

							<!-- Name -->
							<div class="Form_Fields">
								<label>Name</label>
								<input type="text" name="Cname" id="Cname">
							</div>
							<!-- Name -->

							<!-- Package -->
							<div class="Form_Fields">
								<label>Package</label>
								<input type="text" name="Cpackage" id="Cpackage">
							</div>
							<!-- Package -->

							<!-- Class Type -->
							<div class="Form_Fields">
								<label>Class Type</label>
								<input type="text" name="Cclasstype" id="Cclasstype">
							</div>
							<!-- Class Type -->

							<!-- Topics -->
							<div class="Form_Fields">
								<label>Topics</label>
								<input type="text" name="Ctopics" id="Ctopics">
							</div>
							<!-- Topics -->

							<!-- Exercise -->
							<div class="Form_Fields">
								<label>Exercise</label>
								<input type="text" name="Cexercise" id="Cexercise">
							</div>
							<!-- Exercise -->

							<!-- Attandance -->
							<div class="Form_Fields">
								<label>Attandance</label>
								<input type="text" name="Cattandance" id="Cattandance">
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


	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-4">
					<table class="table table-striped">                     
					    <div class="table responsive">
						    <thead>
						        <tr>
						          <th>Date</th>
						          <th>Name</th>
						          <th>Package</th>
						          <th>Topics</th>
						          <th>Exercise</th>
						           <th>Class Type</th>
						           <th>Attandance</th>
						           <th>Action 1</th>
						           <th>Action 2</th>
						        </tr>
						    </thead>
						    <tbody>
							<?php 
								include 'dbconfig.php';
								$sql = "SELECT * FROM user";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
								    echo '<tr>
								              <td scope="row">' . $row["Cdate"]. '</td>
								              <td scope="row">' . $row["Cname"]. '</td>
								              <td>' . $row["Cpackage"] .'</td>
								              <td> '.$row["Ctopics"] .'</td>
								              <td> '.$row["Cexercise"] .'</td>
								              <td> '.$row["Cclasstype"] .'</td>
								              <td> '.$row["Cattandance"] .'</td>
								              <td> <a class="View_Btn btn" onclick="window.location.href=viewone.html;">View</a></td>
								              <td> <button class="Delete_Btn btn">Delete</button></td>
								            </tr>';
								}
								} else {
									echo "0 results";
								} 
							?>
						   </tbody>
						</div>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>