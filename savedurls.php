<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SLICE My URL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!-- NAVBAR BEGINS HERE-->
        <nav id="navbar">
          <ul>
            <li class="dropdown">
              <a href="index.html" class="dropbtn">Home</a>
              <div class ="dropdown-content">
              </div>
            </li>
            <li class="dropdown">
              <a href="#" class="dropbtn">Course</a>
              <div class="dropdown-content">
                <a href="https://tophat.com/" target="_blank">TopHat</a>
                <a href="https://drive.google.com/open?id=1AsHhIFfQ3yNE_m2z4wswRfKh77K0UH9w" target="_blank">Course Google Drive</a>
                <a href="https://www.w3schools.com/" target="_blank">W3Schools</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="#" class="dropbtn">About</a>
              <div class="dropdown-content">
                <a href="Aboutuser.html">About The Developer</a>
                <a href="contact.html">Contact</a>
              </div>
            </li>
             <li class="dropdown">
                <a href="#" class="dropbtn">Account</a>
                <div class="dropdown-content">
                   <a href="savedurls.php">MyUrls</a>
                   <a href="googleAPI.html">logout</a>
                </div>
             </li>
           </ul>
        </nav>
        <!--NAVBAR ENDS HERE-->
        <table>
			<tr>
				<th>Original URL</th>
				<th>Sliced URL</th>
				<th>Date Created</th>
				<th>Clicks</th>
			</tr>
			<?php echo $tableInfo ?>
		</table>
        
     </body>
</html>