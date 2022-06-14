
<section>
</br>
<center>
<div class="card">
  <img class="card-img-top" id='imagem' src="App/Views/<?= $folder.'/'.$album['foto']; ?>" alt="Imagem de capa do card" />
  <div class="card-body">
    <p class="card-text"><?= $album['titulo']; ?></p>
  </div>
</div>
</center>
</section>


<section><center>
<br/>

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