<!DOCTYPE html>
<html>
<head>
	<title>Spotify® Music</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="App/Views/css/bootstrap.css" />
	<link rel="stylesheet" href="App/Views/css/bootstrap-grid.css" />
	<link rel="stylesheet" href="App/Views/css/bootstrap-reboot.css" />
	<link rel="stylesheet" href="App/Views/css/fontawesome.css">
</head>

<style type="text/css">
.bg-black {
	background-color: #000 !important;
}

.background{
	background-image: url(App/Views/images/background2.jpg);	
	background-repeat: no-repeat;
	background-size: cover;
}

.spot-button{
	background-color: #1DB954 !important;
	color: #fff	!important;
	border: 1px solid #1DB954 !important;
	font-size: bold !important;
}

.fa {

  padding: 0px;
  padding-top: 17.5px;
  border-radius: 40px;
  font-size: 30px;
  width: 50px;
  height: 50px;
  margin: 6.5px;
  text-align: center;
  text-decoration: none;
}

.fa:hover {
  opacity: 0.5;
  background-color: #6fff4f;
}


.fa-facebook {
  background: #1DB954;
  color: white;
}

.fa-twitter {
  background: #1DB954;
  color: white;
}

.fa-instagram {
  background: #1DB954;
  color: white;
}

.fa-google-plus {
  background: #1DB954;
  color: white;
}


.login {

padding: 30px;
border-radius: 15px;
margin: 0 auto;
margin-top: 80px;
margin-bottom: 30px;
background-color: #fff;

}
</style>

<body class="background ">

<section>
	<nav class="navbar shadow fixed-top navbar-expand-lg navbar-dark bg-black ">
	 <a class="navbar-brand h1 mb-0" href="#">
	 	<img src="App/Views/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
	 	Spotify® Premium
	 </a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
	 aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
	 	<span class="navbar-toggler-icon"></span>
	 </button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(Página atual)</span></a>
	      <a class="nav-item nav-link" href="login.html">Entrar</a>
	      <a class="nav-item nav-link active" href="#">Cadastre-se</a>
		</div>
	</div>
	</nav>
</section>