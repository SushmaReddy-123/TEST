<!DOCTYPE html>
<html>
<head>
	<title>Auva Wellness - Gym Workout</title>	

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Logo -->
		 <div class="row-fluid logobar">
      <div class="span6">
             <nav>
        <div id="logo">Aura Wellness</div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="home.html">Home</a></li>
                    <!-- First Tier Drop Down -->
                         <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="register.html">Form</a>
                </li>
                <li>
                  <a class="dropdown-item" href="display.php">Data</a>
                </li>
              </ul>
                </li>
                    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">YOGA<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="begineer.html">Beginners</a>
                </li>
                <li>
                  <a class="dropdown-item" href="intermediate.html">Intermediate</a>
                </li>
                 <li>
                  <a class="dropdown-item" href="advanced.html">Advanced</a>
                </li>
              </ul>
                </li>
                <li><a href="gym.html">Gym Workout</a></li>
                 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sample Diet Plans<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="diet.html">Diet Plan 1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="diet2.html">Diet Plan 2</a>
                </li>
                 <li>
                  <a class="dropdown-item" href="diet3.html">Diet Plan 3</a>
                </li>
              </ul>
            </li>
             <li><a href="aboutus.html">About</a></li>
                <li><a href="contactus.html">Contact</a></li>
            </ul>
        </nav>
      </div>
    </div>
		<!-- content -->
		<div class="container">
			<div class="row-fluid about-us">
				<div class="content">
                     <div class="card">
			<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "aura");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM members";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Birthday</th>";
                echo "<th>Email</th>";
                echo "<th>Contact</th>";
                echo "<th>Gender</th>";
                echo "<th>Address</th>";
                echo "<th>City</th>";
                echo "<th>Pincode</th>";
                echo "<th>State</th>";
                echo "<th>Country</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['pincode'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
			<div class="footer">
			<div class="address">
				<ul>
					<li>USA</li>
					<li> info@auvawellness.com</li>
					<li>+1 9139402878</li>
				</ul>
			</div>
		</div>
</body>	
</html>
 