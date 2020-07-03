
<!DOCTYPE html>
<html>
<head>
	<title>La Revue-Movies</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="php_Project.css">
	<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.card{
  margin-top: 20px;
  margin-bottom: 20px;
  background-color: rgb(51,58,65);
}
</style>
 	</head>
<style>
body {
  color: white;
  background-color: #272E2E;
  /*background-image: url(https://hookagency.com/wp-content/uploads/2015/11/black-chrome-gradient-ui-gradient-background.jpg);*/
  background-repeat: no-repeat;
  background-size: cover;
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
				    <a class="nav-item nav-link active" href="La_Revue_Movies.php">Movies<span class="sr-only">(current)</span></a>
				    <a class="nav-item nav-link" href="La_Revue_TV.php">TV Shows</a>	
			   </div>
		
			<form class="form-inline" action="demo.php" method="post">
    			<input class="form-control mr-sm-2" type="search" placeholder="Search Movies/TV Shows" name="sl" aria-label="Search">
    			<button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="sb">Search</button>
  		</form>
			</div>
			
		</div>

	</nav>
	<br>
	<br>
	<br>
<div class="row">
  <div class="container"> 
    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IWAZIR.jpg" alt="Wazir">
        </div>
        <div class="card-body">
          <h5 class="card-title">Wazir</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="WAZIR">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IJOKER.jpg" alt="Joker">
        </div>
        <div class="card-body">
          <h5 class="card-title">Joker(2019)</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="JOKER">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>  

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IAVATAR.jpg" alt="Avatar">
        </div>
        <div class="card-body">
          <h5 class="card-title">Avatar</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="AVATAR">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>  
  </div>
</div>

<div class="row"> 
  <div class="container">
    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IDJANGO UNCHAINED.jpg" alt="Django Unchained">
        </div>
        <div class="card-body">
          <h5 class="card-title">Django Unchained</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="DJANGO UNCHAINED">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="ISPECTRE.jpg" alt="Spectre">
        </div>
        <div class="card-body">
          <h5 class="card-title">Spectre</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="SPECTRE">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="ILIFE OF PI.jpg" alt="Life Of Pi">
        </div>
        <div class="card-body">
         <h5 class="card-title">Life Of Pi</h5>
         <p class="card-text">Movie Description</p>
         <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="LIFE OF PI">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="ISKYFALL.jpg" alt="SkyFall">
        </div>
        <div class="card-body">
          <h5 class="card-title">SkyFall</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="SKYFALL">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div> 

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IINTERSTELLAR.jpg" alt="Interstellar">
        </div>
        <div class="card-body">
          <h5 class="card-title">Interstellar</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="INTERSTELLAR">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>  

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IINCEPTION.jpg" alt="Inception">
        </div>
        <div class="card-body">
          <h5 class="card-title">Inception</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="INCEPTION">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>   
  </div>
</div>

<div class="row">
  <div class="container">
    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IBAJIRAO MASTANI.jpg" alt="Bajirao Mastani">
        </div>
        <div class="card-body">
          <h5 class="card-title">Bajirao Mastani</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="BAJIRAO MASTANI">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div> 

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="IDANGAL.jpg" alt="Dangal">
        </div>
        <div class="card-body">
          <h5 class="card-title">Dangal</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="DANGAL">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>  

    <div class="column">

      <div class="card" style="width: 14rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="card-img-top embed-responsive-item" src="ITITANIC.jpg" alt="Titanic">
        </div>
        <div class="card-body">
          <h5 class="card-title">Titanic</h5>
          <p class="card-text">Movie Description</p>
          <form class="form-inline" action="demo.php" method="post">
            <input type="hidden" name="sl" value="TITANIC">
            <button class="btn btn-primary" type="submit" name="sb">Check Rating</button>
          </form>
        </div>
      </div>
    </div>   
  </div>
</div>


<!--   <div class="column">
    
	<form class="form-inline" action="demo.php" method="post">
    			<input type="hidden" name="sl" value="SLUMDOG MILLIONAIRE">
    			<button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="sb"><img src="ISLUMDOG MILLIONAIRE.jpg"style="width:420px;height:250px;"/></button>
  			</form>
</div>
   	<div class=="column">
	<form class="form-inline" action="demo.php" method="post">
    			<input type="hidden" name="sl" value="BARFI">
    			<button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="sb"><img src="IBARFI.jpg"style="width:420px;height:250px;"/></button>
  			</form>

	
  </div> -->

	
  </div>
	
	
</body>
</html>