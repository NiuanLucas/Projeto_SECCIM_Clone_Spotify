<div class="align-items-center" style="margin: auto; margin-top: 50%;" >
<h1 style="color: #fff; font-weight: bold; text-align: center; font-size: 50px; margin-bottom: 15px;"> Buscar </h1>
<form method="post" action="?page=musica&action=pesquisar">
<div class="input-group mb-3" style="width: 90%; margin: 0 auto; border: 0px solid #fff;">
  <div class="input-group-prepend bg-black2">
    <span class="input-group-text" style="background-color: #1DB954;"  id="basic-addon1"> <img width="15" height="15" src="App/Views/images/busca.png"></span>
  </div>
    <input type="text" name="titulo" style="height: 50px;" class="form-control" placeholder="Artistas, músicas ou podcasts">
</div>
    <button type="submit" class="btn btn-success float-right mx-3">Pesquisar</button>
    </form>
</div>

<section>
<br/>

<?php if(isset($musicas)): ?>

<br/> <br/>
<table id="lista" >

    <?php foreach($musicas as $musica): ?>
    <tr id="<?= $musica['id']; ?>" name='musica' class="row">
        <td class="col-2"><img class="play-button" src="App/Views/images/play.png"/></td>
        <td class="col-10" id='nome<?= $musica['id']; ?>'><h6 class="musica-texto"> <?= $musica['titulo']; ?>  </h6></td>     
        <td id='arquivo<?= $musica['id']; ?>' style='display: none;'><?= $musica['arquivo']; ?></td>
    </tr>
    <?php endforeach; ?>

</table></center>
</section>

<?php endif; ?>

<script>
            
    let musicas = document.getElementsByName('musica')
    let audio = document.getElementById('music-som')
    for(let i = 0; i < musicas.length; i++)
    {
        musicas[i].addEventListener('click', function() {
            audio.src = 'index.php?page=musica&action=tocar&musica='+this.id
        })
    }
</script>

