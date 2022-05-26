<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>DW<?php echo date("Y")?> - Adicionar Categoria</title>
    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <!-- Stick footer -->
    <link href="css/sticky-footer.css" rel="stylesheet">

  </head>

  <body>

  <?php require_once 'nav.php' ?>

    <main role="main" class="container">
      <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Adicionar novo produto</h4>
          <form class="needs-validation" action="" method="post">
            <div class="mb-3">
              <label for="categoria">Categoria</label>
              <select class="custom-select d-block w-100" id="categoria" required>
                <option value="">Escolha...</option>
                <option>Frutas</option>
                <option>Verduras</option>
              </select>
              <div class="invalid-feedback">
                Por favor, escolha uma categoria válida.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Nome</label>
              <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Preço</label>
              <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um preço válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Descrição</label>
              <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir uma descrição válida.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Imagem</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" required>
                <label class="custom-file-label" for="customFile">Escolha uma imagem</label>
              </div>
              <div class="invalid-feedback">
                É obrigatório inserir uma imagem válida.
              </div>
            </div>
            
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar produto</button>
          </form>
        </div>
      </div>
      
    </main>

    <?php require_once 'footer.php' ?>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.5.js"></script>
    <script src="js/bootstrap.js"></script>

    <script>
      $('#customFile').on('change',function(){
          //get the file name
          var fileName = $(this).val();
          var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
          //replace the "Choose a file" label
          $(this).next('.custom-file-label').html(cleanFileName);
      })
    </script>
  </body>
</html>
