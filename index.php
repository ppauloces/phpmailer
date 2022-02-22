<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Olá, mundo!</title>
</head>

<body>
<h1 style="padding-top:50px" class="text-center">Formulário de Contato</h1>
<div class="container" style="padding-top: 3rem;">
  <form action="enviar.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input type="text" class="form-control" name="nome" id="inputEmail4" placeholder="Nome">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Email</label>
        <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Mensagem</label>
      <textarea type="text" class="form-control" name="message" id="inputAddress" placeholder="Escreva aqui"></textarea>
    </div>
    <div class="form-group">
      <label for="inputAddress">Anexo</label>
      <input type="file" class="form-control" id="inputAddress" name="anexo" placeholder="Selecione o arquivo">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
  <div div="linkResultado"></div>
</div>


  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>