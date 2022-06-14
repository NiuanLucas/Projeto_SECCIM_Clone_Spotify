<center>
<div style="background-image: linear-gradient( rgba(0,0,0,1), rgba(0,0,0,0.0)) !important; padding: 10px; z-index:0;">
</br>
<img style="width: 90%; " src="App/Views/images/logo_colorido.png">
</div>
</center>

<div class="text-up"> Os Melhores Artistas </div>

<section>
<center>
<div class="bloco-over" style="height: 280px; width: 100% !important;">
<div class="card-deck" style=" width: 90%;">
<?php  ?>
<table> 
<tr>
    
    <?php foreach($fila1 as $album): ?>
        <td>   
            <div class="card">
                <a href="?page=musica&action=album&album=<?=$album['id'];?>"><img class="card-img-top" src="App/Views/albuns/<?=$album['foto'];?>" alt="Imagem de capa do card"></a>
              <div class="card-body">
                <p class="card-text">This is <?= $album['artista'];?></p>
              </div>
            </div>
        </td>
    <?php endforeach; ?>
<!--
<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album1.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Hip-Hop</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album2.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Rock and Roll</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album3.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Funk</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album4.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is POP</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album5.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Pagode</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album6.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Eletronic</p>
  </div>
</div>
</td>
-->
</tr>  
</table>
</div>
</div>
</div>
</center>
</section>


<div class="text-up" onClick = "document.getElementById('music-som').style.height = '100%';" > Feitos para você </div>

<section>
<center>
<div class="bloco-over" style="height: 280px; width: 100% !important;">
<div class="card-deck" style=" width: 90%;">

<table>
<tr>

    
    <?php foreach($fila2 as $album): ?>
        <td>   
            <div class="card">
              <img class="card-img-top" src="App/Views/albuns/<?=$album['foto'];?>" alt="Imagem de capa do card">
              <div class="card-body">
                <p class="card-text">This is <?= $album['artista'];?></p>
              </div>
            </div>
        </td>
    <?php endforeach; ?>
    
<!--    
<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album1.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Hip-Hop</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album2.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Rock and Roll</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album3.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Funk</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album4.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is POP</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album5.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Pagode</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album6.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Eletronic</p>
  </div>
</div>
</td>
-->
</tr>
</table>
</div>
</div>
</div>
</center>
</section>

<div class="text-up"> Hora de curtir </h2></div>

<section>
<center>
<div class="bloco-over" style="height: 280px; width: 100% !important;">
<div class="card-deck" style=" width: 90%;">

<table>
<tr>
    
    
    <?php foreach($fila3 as $album): ?>
        <td>   
            <div class="card">
              <img class="card-img-top" src="App/Views/albuns/<?=$album['foto'];?>" alt="Imagem de capa do card">
              <div class="card-body">
                <p class="card-text">This is <?= $album['artista'];?></p>
              </div>
            </div>
        </td>
    <?php endforeach; ?>

    <!--
<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album1.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Hip-Hop</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album2.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Rock and Roll</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album3.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Funk</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album4.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is POP</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album5.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Pagode</p>
  </div>
</div>
</td>

<td>   
<div class="card">
  <img class="card-img-top" src="App/Views/images/album6.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">This is Eletronic</p>
  </div>
</div>
</td>
-->
</tr>
</table>
</div>
</div>
</div>
</center>
</section>

<br/><br/>