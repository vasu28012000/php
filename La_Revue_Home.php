<!DOCTYPE html>
<html>
<head>
	<title>La Revue</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="php_Project.css">
</head>
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
		<div class="container">

			<a class="navbar-brand" href="#">La Revue</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="navbar-nav mr-auto">
				<a class="nav-item nav-link active" href="La_Revue_Home.php">Home<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="La_Revue_Movies.php">Movies</a>
				<a class="nav-item nav-link" href="La_Revue_TV.php">TV Shows</a>	
			</div>
		
			<form class="form-inline" action="demo.php" method="post">
    			<input class="form-control mr-sm-2" type="search" placeholder="Search Movies/TV Shows" name="sl" aria-label="Search">
    			<button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="sb">Search</button>
  			</form>
			</div>
			
		</div>

	</nav>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			
    			<form class="form-inline" action="demo.php" method="post">
    			<input type="hidden" value="JOKER" name="sl" aria-label="Search">
    			<button type="submit" name="sb" class="d-block"><img class="d-block w-100 img-fluid" src="https://see.news/wp-content/uploads/2020/02/amirhosein-naseri-desktop-screenshot-2019-04-03-18-17-47-11.jpg" alt="First slide"></button>
  			</form> 
		</div>
    		<div class="carousel-item">
			<form class="form-inline" action="demo.php" method="post">
    			<input type="hidden" value="LUCIFER" name="sl" aria-label="Search">
    			<button type="submit" name="sb" class="d-block"><img class="d-block w-100 img-fluid" id="carousel-image2" src="ILUCIFER.jpg"></button>
  			</form> 
      			
    		</div>
    		<div class="carousel-item">
			<form class="form-inline" action="demo.php" method="post">
    			<input type="hidden" value="AVATAR" name="sl" aria-label="Search">
    			<button type="submit" name="sb" class="d-block"><img class="d-block w-100 img-fluid" src="IAVATAR.jpg" alt="Third slide"></button>
  			</form> 
      			
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  		</a>
	</div>

<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">Hello, Cinephiles!</h1>
  		<p class="lead">
  			La Revue is a website where you can find reviews of your favourite Movies and TV Shows
  		</p>
  		<hr class="my-4">
  		<p>It shows you the reviews by the most prominent websites and movie critics around the globe so that you can find out if the movie you want to watch is actually worth your time</p>
  		<p>
  			Select what to browse
  		</p>
  		<p class="lead">
    		<a class="btn btn-dark btn-md" href="La_Revue_Movies.php" role="button">Movies</a>
    		<a class="btn btn-dark btn-md" href="La_Revue_TV.php" role="button">TV Shows</a>
 		 </p>
	</div>
 
</div>

</body>
</html>