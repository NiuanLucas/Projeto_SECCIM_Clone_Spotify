<section class="text-center">
    <form action="index.php?page=usuario&action=cadastrar" method="post" class="form-signin justify-content-center login " style="width: 90%;">
      <img class="mb-4" src="App/Views/images/logo_preto.png" alt="" width="100%" height="100%">
      <h1 class="h4 mb-4 font-weight-normal">Inscrever-se no Spotify.</h1>

      <label for="inputEmail" class="sr-only">Endereço de Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control mt-2" placeholder="Endereço de E-mail" required autofocus>

      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control  mt-2" placeholder="Senha" required>

      <label for="inputName" class="sr-only">Como devemos chamar Você?</label>
      <input type="text" name="nome" id="inputName" class="form-control mt-2" placeholder="Como devemos chamar Você?" required autofocus>

      <label for="inputDate" class="sr-only">Data de Nascimento</label>
      <input type="date" name="nascimento" id="inputDate" class="form-control mt-2 mb-2" required autofocus>


      <label for="inputEmail" class="sr-only mt-2">Sexo</label>
      <input type="radio" name="genero" class="mt-3 ml-0" id="male" value="Masculino" checked> <label for="male">Masculino</label>
      <input type="radio" name="genero" class="mt-3 ml-1" id="female" value="Feminino"> <label for="female">Feminino</label>
      <input type="radio" name="genero" class="mt-3 ml-1" id="other" value="Outros"> <label for="other">Outros</label>

      <button class="btn btn-lg btn-primary mt-4 btn-block spot-button font-weight-bold" type="submit">Cadastrar</button>
      <label class="justify-content-center mt-4"> Você tem uma conta? </br> <a class="font-weight-bold" style="color: #1DB954;" href="cadastro.html"> Fazer Login </a> </label>
    </form>
  </section>