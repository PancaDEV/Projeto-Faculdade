<?php

$conexao = new PDO('sqlite:dw.db'); // conexão ao bd
$query = "SELECT * FROM categoria"; // sql para execução
$result = $conexao->query($query); // executa o query
$result = $result->fetchAll(); // recupera valores de saída

foreach($result as $r){ // percorre a lista de resultado
  echo $r['id'] . '-' . $r['nome']; // imprime id e nome de cada registro
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>DW<?php echo date("Y")?> - Categorias</title>
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
      <p class="lead">Aqui vai as categorias</p>
      <a class="btn btn-primary btn-lg mb-4" href="nova_categoria.php">Adicionar Categoria</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th style="width: 10%" scope="col">Alterar</th>
            <th style="width: 10%" scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($result as $r) {
          ?>
            <tr>
              <th scope="row"><?php echo $r['id'] ?></th>
              <td><?php echo $r['nome'] ?></td>
              <td><a href="#" class="btn btn-warning">Alterar</a></td>
              <td><a href="#" class="btn btn-danger">Remover</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </main>

<?php require_once 'footer.php' ?>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.5.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
