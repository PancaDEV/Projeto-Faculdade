<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>DW<?php echo date("Y")?> - Listagem de Produtos</title>
    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <!-- Stick footer -->
    <link href="css/sticky-footer.css" rel="stylesheet">

  </head>

  <body>

    <?php require_once 'nav.php'?>

    <main role="main" class="container-fluid">
      <div class="row p-3">
        <div class="col-12 col-md-2 col-xl-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-tudo-tab" data-toggle="pill" href="#v-pills-tudo" role="tab" aria-controls="v-pills-tudo" aria-selected="true">Tudo</a>
            <a class="nav-link" id="v-pills-frutas-tab" data-toggle="pill" href="#v-pills-frutas" role="tab" aria-controls="v-pills-frutas" aria-selected="true">Frutas</a>
            <a class="nav-link" id="v-pills-verduras-tab" data-toggle="pill" href="#v-pills-verduras" role="tab" aria-controls="v-pills-verduras" aria-selected="false">Verduras</a>
          </div>
        </div>
        <div class="col-12 col-md-10 col-xl-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-tudo" role="tabpanel" aria-labelledby="v-pills-tudo-tab">
              <div class="card-deck">
                <div class="card">
                  <img class="card-img-top img-fluid imagem " src="img/angra.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <p class="card-text text-justify">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
                    <a href="detalhe.php" class="btn btn-primary stretched-link">Mais detalhes</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid imagem " src="img/angra.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid imagem " src="img/angra.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-frutas" role="tabpanel" aria-labelledby="v-pills-frutas-tab">frutas</div>
            <div class="tab-pane fade" id="v-pills-verduras" role="tabpanel" aria-labelledby="v-pills-verduras-tab">verduras</div>
          </div>
        </div>
      </div>
    </main>

<?php require_once 'footer.php' ?>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.5.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
