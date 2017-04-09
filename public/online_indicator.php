<li style="margin:0;" class="dropdown">
        <a style="margin:0;" class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:green"><?php	if(isset($_SESSION['row'])) {	
																			echo "{$row['username']}";}	 
																		?></b>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="signin.php">Logout</a></li>
        </ul>
      </li>
	  
	  
	  