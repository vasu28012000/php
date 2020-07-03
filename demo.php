
		<?php
      
        			if(isset($_POST['sb'])) { 
					$n=$_POST['sl'];
					$i="I".$n.".jpg";
		        }
		?>
<!DOCTYPE html>
<html>

<head>
	<title>SEARCH..</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="php_Project.css">
	
</head>
<style>
body {
	color: white;
  	background-color: #272E2E;
  /*background-image: url('BG.JPG');*/
  	background-repeat: no-repeat;
  	background-size: cover;
  	font-family: 'Lato', sans-serif;
}

.jumbotron{
	background-image: url("<?php echo $i ?>");
	background-size: cover;
	background-repeat: no-repeat
	background-position: center;
	margin-top: 80px;
	height: 45vh;
}
</style>
<body>

		<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
		<div class="container">

			<a class="navbar-brand" href="#">La Revue</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="navbar-nav mr-auto">
				<a class="nav-item nav-link" href="La_Revue_Home.php">Home</a>
				<a class="nav-item nav-link" href="La_Revue_Movies.php">Movies</a>
				<a class="nav-item nav-link " href="La_Revue_TV.php">TV Shows</a>	
			</div>
		
			<form class="form-inline" action="demo.php" method="post">
    			<input class="form-control mr-sm-2" type="search" placeholder="Search Movies" aria-label="Search" name='sl'>
    			<button class="btn btn-outline-light my-2 my-sm-0" type="submit" name='sb'>Search</button>
  			</form>
			</div>
			
		
	</div>

			</nav>

			<div class="container">
				<div class="jumbotron">
  <h1 class="display-4"></h1>
  <p class="lead"></p>
  <hr class="my-4">
  <p></p>
</div>

			</div>
		
<p>
<br>
</p>
<div class="row">
<p>
<font size="4"
    
          color="#FFFFFF">
	
	<pre>
				
			
			<?php
			$conn=mysqli_connect("localhost","vasuarneja@keshav.sytes.net","keshav2020","vasuarneja");
			if($conn)
			{
				$query="SELECT TFILE,IFILE from movies where NAME='".$n."';";	
						
						
						if($result=mysqli_query($conn,$query) ) 
						{
							$row=mysqli_fetch_array($result);
							$FILE=$row[0];
							$handle=fopen($FILE,'r');
							echo fread($handle,filesize($FILE));
						}
						else
						{
							echo"RESULT NOT FOUND!!!<br>                             <a href=La_Revue_Home.php>HOME</a>";
						}
				
			}
			else
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
	?>	
	
</font>

</pre>
</p>
</div>
</body>
</html>