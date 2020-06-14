<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "usbw";
  $dbname = "gip"
?>
<?php
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        else
        {
            echo "<!--alles ok<br>-->";

        }
        
			echo '<div id="logo">
				<div id="logo_text">
					<h1><a href="_index.php">Helpdesk website voor: <span class="logo_colour" href="https://www.janfevijn.be/">Atheneum Jan Fevijn</span></a></h1>
					<h2>Gemaakt door: Rupert Van Den Eynde</h2>
				</div>
			</div>
			<nav>
				<div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="_index.php">Home</a></li>
            <li><a href="oM.php">Over mij</a></li>
            <li><a href="hWH.php">Hoe het werkt</a></li>
            <!--<li><a>Hulp</a>
              <ul>
                <li><a href="hWH.php">Hoe werkt het?</a></li>
                <li><a>Inhoud</a>
                  <ul>
                    <li><a href="_index.php">Homepage</a></li>
                    <li><a href="contact.php">Contact formulier</a></li>
                    <li><a href="hWH.php">Hoe het werkt</a></li>
                    <li><a href="tickets.php">Bekijk hier je lopende tickets</a></li>
                  </ul>
                </li>
              </ul>
            </li>-->
            <li><a href="contact.php">Contact formulier</a></li>
            <li><a href="tickets.php">Bekijk hier je lopende tickets</a></li>
          </ul>
        </div>
			</nav>'

?>