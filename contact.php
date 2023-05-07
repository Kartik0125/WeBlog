<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
        echo "nocon";
    }
     echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $EMail = $_POST['mail'];
    $Info = $_POST['info'];
    $sql = "INSERT INTO `contact`.`contact` (`Full Name`, `E-Mail`, `Info`, `Time`) VALUES ('$name', '$EMail', '$Info', current_timestamp());";
    // Execute the query
    if($con->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!Doctype html>
<head>
	<title>
		Contact Us
	</title>
	<link rel="stylesheet" href="stylehome.css" />
	<script src="scripthome.js"></script>
</head>

<body>
		<div class="leftnavbar">
			<div class="header">
				<div id="name">
					<a href="home.html" style="color: black;
    text-decoration: dashed;"> WeBlog </a>
				</div>
				<div id="form">
					<form>
						<input type="type" id="searchbar" placeholder="Search"></input>
					</form>
				</div>
			</div>

			<a href="home.html" style="color: black;
    text-decoration: dashed;"><button id="Home" type="button">Home</button></a>
			<button id="Blogs" type="button" onclick="Blogs()">Category</button>
			<div id="menu" style="display:none">
				<a href="home.html#mainTECH"><button id="tech" type="button">Tech</button></a>
				<a href="home.html#mainDSA"><button id="DSA" type="button">DSA</button></a>
				<a href="home.html#mainSTL"><button id="STL" type="button">STL</button></a>
				<a href="home.html#mainOOPs"><button id="OOPs" type="button">OOPs</button></a>
				</div>
			<a href="http://localhost/WeBlog-main/contact.php" ><button id="Contact" type="button" style="border-left: 3px solid #005af0;">Contact</button></a>
			<a href="privacy.html"><button id="Privacy" type="button">Privacy</button></a>
			<a href="about.html"><button id="About" type="button">About</button></a>
			<a href="terms and condition.html"><button id="tnc" type="button">Terms and conditions</button></a>
			
		</div>
	<div class="info_page">

  <div class="contact-container">
      <div class="contact-left">
        <h2 class="contact-left-heading">Contact Us Here</h2>

        <form action="contact.php" method="post" >
          <div class="form-element">
            <input type="text" name="name" id="contact-name" class="form-input" placeholder="Full Name" />
            
          </div>

          <div class="form-element">
            <input type="text" name="mail" id="contact-email" class="form-input" placeholder="Email"/>
          </div>
          <div class="form-element">
            <textarea
              name="info"
              id="contact-message"
              cols="30"
              rows="10"
              class="form-input"
              placeholder="Your Message"
            ></textarea>
            
          </div>

          <button class="form-btn">Send</button>
          <?php
          if($insert == true){
          echo "<p><strong>Thanks for Contacting us!</strong></p>";
          }
      ?>
        </form>
      </div>
      <div class="contact-right">
        <h2>Or Here</h2>

        <p>
          <strong>Email:</strong>
        </p>
        <p>info@webblog.ac.in</p>
        <br />
      </div>
    </div>

    <script src="main.js"></script>
    
</div>
</body>

</html>-->
