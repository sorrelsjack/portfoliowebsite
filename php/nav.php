<?php?>
<head>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <script type="text/javascript" src="/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
                <a class="navbar-brand" href="/">Jack Sorrels</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		        <span class="navbar-toggler-icon"></span> <!--TODO: Active link highlighting, fix dropdown-->
  		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="nav navbar-nav navbar-right">
                                <li class="nav-item" id="nav-home">
                                        <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item" id="nav-about">
                                        <a class="nav-link" href="/about.php">About</a>
                                </li>
                                <li class="nav-item dropdown" id="nav-work">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Work</a>
                                        <div class=dropdown-menu>
                                                <a class="dropdown-item" href="#">Placeholder</a>
                                                <a class="dropdown-item" href="#">Also a Placeholder</a>
                                                <a class="dropdown-item" href="#">What? Another?</a>
                                        </div>
                                </li>
                                <li class="nav-item" id="nav-resume">
                                        <a class="nav-link" href="/resume.php">Resume</a>
                                </li>
                        </ul>
		</div>
	</nav>