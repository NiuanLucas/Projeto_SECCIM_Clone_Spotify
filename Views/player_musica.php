<!DOCTYPE html>
<html>
<head>
	<title>Spotify® Music</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="App/Views/css/bootstrap.css" />
	<link rel="stylesheet" href="App/Views/css/bootstrap-grid.css" />
	<link rel="stylesheet" href="App/Views/css/bootstrap-reboot.css" />
	<link rel="stylesheet" href="App/Views/css/font-awesome.min.css">

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
	background-image: url(App/Views/images/background_black_flip.jpg);	
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

#lista tr {
	border-bottom: 10px solid rgba(255,255,255,0);
}

.icon-player {
	width: 50px;
	margin: 0 auto;
	margin-left: 15px;
	margin-right: 15px;
	border-radius: 40px;
	box-shadow: 1px 1px 5px #1DB954;
	transition: 0.5s all;

}

.icon-player:hover {
	width: 52.5px;
	transform: rotate(15deg);
	box-shadow: 10px 5px 50px #1DB954;
  	transition: 0.5s all;

}

audio::-webkit-media-controls-panel {background-color: rgba(0,0,0,0.0);}


</style>

<body class="background">

<section>

	<audio class="fixed-bottom" controls style=" margin: 0 auto; border: 5px solid white; background-color: white; width: 100%; 
	border-bottom: 15px solid white; border-top: 15px solid white;">
            <source src="App/Views/musicas/<?=$musica["arquivo"];?>" type="audio/mpeg">
	</audio>

</section>



<section><center>

<div style="width: 90%; margin: 0 auto; border: 0px solid #fff; margin-top: 20%;" >

	<img style="width: 60%; margin: 0 auto; " src="App/Views/images/logo_colorido.png">

	<img style="margin: 0 auto; width: 80%; margin-bottom: 20px; box-shadow: 10px 5px 5px black;" src="App/Views/albuns/<?=$album["foto"];?>">

	<h1 style="color: #fff; font-weight: bold; text-align: center; font-size: 20px; margin-bottom: 15px; padding: 10px; padding-left: 30px; padding-right: 30px;"> <marquee> <?=$musica["titulo"]?> </marquee> </h1>


	<div>
		
	<table>

  	<tr>
    <td> <img class="icon-player" src="App/Views/images/icon5.png"/> </td>
    <td> <img class="icon-player" src="App/Views/images/icon4.png"/> </td>
    <td data-toggle="modal" data-target="#modal-playlist"> <img class="icon-player" src="App/Views/images/icon6.png"/></td>
    <td> <img class="icon-player" src="App/Views/images/icon7.png"/> </td>
  	</tr>
 
  	</table>

	</div>

        
        
        
        <!-- Modal -->
<div class="modal fade" id="modal-playlist" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-white bg-black2" style="width: 90% !important; margin: 0 auto;">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Adicionar à playlist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form method="post" action="?page=playlist&action=adicionar" enctype="multipart/form-data">
              <input type="hidden" name="musica" value="<?=$musica["id"];?>">
		  <div class="form-group">
		    <label for="exampleFormControlInput1"> Escolha a sua playlist: </label>
                    <select name="list" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1">
                        <?php foreach($playlists as $list): ?>
                        <option value="<?= $list["id"]; ?>"><?= $list["titulo"]; ?></option>
                        <?php endforeach; ?>
                    </select>
		  </div>             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary spot-button">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
</center></section>

</body>
	<script src="App/Views/js/jquery.js"></script>
	<script src="App/Views/js/bootstrap.js"></script>
	<script src="App/Views/js/bootstrap.bundle.js"></script>
</html>