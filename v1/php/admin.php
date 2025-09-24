<?php require("conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Loja do Marcio. Artigos de informática e geek." />
    <meta name="author" content="Marcio Moraes" />
    <title>Loja do Marcio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/meuestilo.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Marcio Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Sobre</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Loja</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Todos os produtos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Itens Populares</a></li>
                            <li><a class="dropdown-item" href="#!">Lançamentos</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <?php
                        session_start();
                        // mostra o nome do usuário no menu
                        echo "<span style='color: black;'>" . $_SESSION['nome'] . "</span>";
                    ?>
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
<?php
// Criar a "query" para listar
  $sql = "Select * FROM produtos";
  // Executar a query
  $listar = $conexao ->query($sql);
  // Mpstrar na tela os dados
if ($listar->num_rows > 0){
    //Tem produto
    echo '
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    ';
    while($linha = $listar->fetch_assoc()){
     echo '
     
       <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../assets/' . $linha["imagem"] . '" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">' . $linha["nome_produto"] . '</h5>
                                <!-- Product price-->
                                R$ ' .  $linha["preco_unitario"] . '
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
                ';

    }    
  echo '
    </div>
     </div>
     </section>
  ';


} else {

    // Não tem produto
    echo "<br>Não tem produto cadastrado";
}


?>


    
    </body>
    </html>