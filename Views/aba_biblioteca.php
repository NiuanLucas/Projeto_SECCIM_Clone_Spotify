
<section>
</br>
<h1 style="color: #fff; font-weight: bold; text-align: center; font-size: 50px; margin-left: 15px; text-align: left;"> Músicas </h1>
<div class="align-items-center" style="margin: auto;" >
<div class="input-group mb-3 " style="width: 90%; margin: 0 auto; border: 0px solid #fff;">
  <div class="input-group-prepend bg-black2">
    <span class="input-group-text" style="background-color: #000;"  id="basic-addon1"> <img width="15" height="15" src="App/Views/images/busca.png"></span>
  </div>
  <input type="text" style="height: 40px; background-color: #000; color: #fff; " class="form-control" placeholder="Procure entre playlists">
</div>
</div>
</section>


<section><center>
</br>


<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-white bg-black2" style="width: 90% !important; margin: 0 auto;">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Criar playlist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form method="post" action="?page=playlist&action=cadastrar" enctype="multipart/form-data">
              <input type="hidden" name="criador" value="<?=$_SESSION["userLoggedIn"]["id"];?>">
		  <div class="form-group">
		    <label for="exampleFormControlInput1"> Dê um nome à sua playlist. </label>
		    <input name="nome" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="Ex: Músicas para festa." >
		  </div>

                  <div class="form-group">
		    <label for="exampleFormControlInput2"> Escolha uma foto: </label>
		    <input name="foto" type="file"  accept="image/png, image/jpg" class="text-white" id="exampleFormControlInput2" >
		  </div>
              
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1"> Descrição da sua playlist. </label>
		    <textarea name="descricao" class="form-control bg-dark text-white" id="exampleFormControlTextarea1" rows="3"></textarea>
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


<table id="lista" >


    <?php foreach($playlists as $list): ?>
    
        <tr>
        <td> <img class="musica-foto" src="App/Views/playlists/<?= $list['foto']; ?>" </td>
        <td><a href="?page=playlist&action=musicas&id=<?= $list['id']; ?>"> <h6 class="musica-texto"> <?= $list['titulo']; ?> </h6> </a> </td>
  	</tr>
    
    <?php endforeach; ?>
	<tr data-toggle="modal" data-target="#ExemploModalCentralizado">
    <td> <img class="musica-foto" src="App/Views/images/criar_playlist.jpg" </td>
    <td> <h6 class="musica-texto"> Criar playlist </h6> </td>
  	</tr>

  	<tr>
    <td> <img class="musica-foto" src="App/Views/images/musicas_curtidas.jpg" </td>
    <td> <h6 class="musica-texto"> Músicas Curtidas </h6> </td>
  	</tr>

  	

</table></center>
</section>


