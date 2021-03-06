<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Spotify® Music</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="App/Views/css/bootstrap.css" />
    <link rel="stylesheet" href="App/Views/css/bootstrap-grid.css" />
    <link rel="stylesheet" href="App/Views/css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="App/Views/css/font-awesome.min.css" />
</head>

<style type="text/css">
.bg-black {
	background-color: #000 !important;
}

.bg-black2 {
	background-color: #121212 !important;
}

.shadow-in {
   box-shadow: inset 0 0 10px #000000 !important;
   margin-top: 5px solid red !important;
   border-radius: 50px !important;
}

.background{
	background-image: url(App/Views/images/background_black.jpg);	
	background-repeat: no-repeat;
	background-size: cover;
}

.card-img-top {
	border-radius: 10px 10px 0px 0px !important;

}

.card {
	background-color: rgba(0,0,0,0) !important;
	box-shadow: 20px 15px 25px 0px rgba(0,0,0,0.75) !important;	
	padding: 10px !important;
	width: 200px;
}



.card-body {
	background-color: rgba(0,0,0,0.9) !important;
	border-radius: 0px 0px 20px 20px !important;
	color: #fff;
	box-shadow: inset 0 0 5px #1DB954 !important;
}

.spot-button{
	background-color: #1DB954 !important;
	color: #fff	!important;
	border: 1px solid #1DB954 !important;
	font-size: bold !important;
}


.shd-25 {
box-shadow: inset 0 0 25px #FFF !important;
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

/* Add a hover effect if you want */
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

.card-text {
	text-align: center !important;
}

.carousel-item:before {
	box-shadow: inset 0 0 50px #000 !important;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: "";
}


.bloco-over {
    width: 90% !important;
    height: 90%;
    overflow-x: auto !important;
    white-space: nowrap !important;
    border: 0px solid #fff !important;
 
}

.musica-foto {
	width: 90px;
	margin-left: 10px;
}

.musica-texto {
	margin-left: 20px;
	font-size: 20px;
	font-weight: bold;
	color: #fff;
}


.play-button {
  width: 25px;
  height: 25px;
  margin-left: 10px;
  margin-right: 0px;
}

#lista tr {
	border-bottom: 10px solid rgba(255,255,255,0);
}

</style>

<body class="background">

<section>
	<nav class="navbar fixed-bottom navbar-dark bg-black2" onClick = "document.getElementById('music-som').style.height = '9%';" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px; height: 10%;" >

	 <a class="navbar-brand h1 mb-0" href="?page=usuario&action=home" style="text-align: right; padding-left: 20px;" >
	 	<img src="App/Views/images/icon1.png" width="45" height="45" class="d-inline-block align-top" alt=""> 	
	 </a>

	 <a class="navbar-brand h1 mb-0" href="?page=usuario&action=pesquisa" style="text-align: center;" >
	 	<img src="App/Views/images/icon2.png" width="45" height="45" class="d-inline-block align-top" alt=""> 	
	 </a>

	<a class="navbar-brand h1 mb-0" href="?page=playlist" style="text-align: left; padding-right: 20px;" >
	 	<img src="App/Views/images/icon3.png" width="45" height="45" class="d-inline-block align-top" alt=""> 	
	 </a>

	</nav>
</section>



<style type="text/css">
  
.fixed-player {
position: fixed;
z-index: 10;
bottom: 10%;
right: 0%;
}

.fixed-player-btn {
position: fixed;
z-index: 11;
bottom: 12%;
right: -1.5%;
background-color: #fff; 
width: 12.5%; 
height: 5%;
}

.arrow {
  transform: rotate(0deg);
  transition: 0.5s all; 
} 

.arrow:hover {
  transform: rotate(180deg);
  transition: 0.5s all;
} 

</style>

<iframe class="fixed-player" id="music-som" src="index.php?page=musica&action=tocar&musica=1" frameBorder="0" width="100%" height="9%" allowfullscreen style="border: 0px solid white; 
border-bottom:  5px solid #0bb822; border-top:  2.5px solid #000; ">
</iframe>

<div class="fixed-player-btn" onclick = "document.getElementById('music-som').style.height = '100%';" >
  <img class="arrow" src="App/Views/images/arrow_up.png" width="15" height="15"  alt="">
</div>